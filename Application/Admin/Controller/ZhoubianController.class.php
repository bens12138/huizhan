<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ZhoubianController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$fri = M("column")->where(array("id"=>16,"is_del"=>1))->find();
		$this->assign("fri",$fri);
		$fri_id = $fri["id"];
		$sec = M("column")->where(array("pid"=>$fri_id))->select();
		foreach ($sec as $key => $value) {
			$sec[$key]['erji'] = [];
			$erjiinfo = $this->erji($value['id']);
			foreach ($erjiinfo as $v) {
				array_push($sec[$key]['erji'], $v);
			}
		}
		// dump($sec);die;
		$this->assign("sec",$sec);
		$this->display();
	}
	private function erji($erjiid){
		$botlink = M('article');
		$links = $botlink->where(array('pid'=>$erjiid,"is_del"=>1))->select();
		return $links;
	}
	public function editZhou(){
		$id = I("get.id");
		$col_id = M("column")->where(array("id"=>$id))->find();
		$this->assign("cld",$col_id);
		$this->display();
	}
	public function edit_zhou(){
		$id = I("post.id");
		$data["title"] = I("post.title");
		$data["edit_time"] = time();
		$sql = M("column")->where(array("id"=>$id))->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Zhoubian/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
	//添加文章页面
	public function addNews(){
		$parent = M("column")->where(array("pid"=>16))->select();
		$this->assign("parent",$parent);
		$this->display();
	}
	//添加文章方法
	public function add_news(){
		$title = I("post.title");
		$content = I("post.cont");
		$author = I("post.author");
		$pid = I("post.pid");
		$file = $_FILES["file"];
		$upload = new Upload();// 实例化上传类
        $upload->maxSize   =     3145728000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     "./Public/Uploads/"; // 设置附件上传根目录
		$upload->subName   =	 "zhoubianfuwu"; // 设置附件上传（子）目录
		$upload->autoSub   =	 true;	
        // 上传单个文件 
        $info = $upload->uploadOne($file);
        $data = array(
        	"title" => $title,
        	"img" => $info['savepath'].$info['savename'],
        	"content" => $content,
        	"author" => $author,
        	"pid" => $pid,
        	"add_time" => time(),
        	"edit_time" => time(),
        	"is_del" => 1
        );
        $sql = M("article")->add($data);
		if ($sql) {
			$this->success("添加成功",U("Admin/Zhoubian/index"),1);
		} else {
			$this->error("添加失败");
		}
	}
	//修改文章页面
	public function editNews(){
		$id = I("get.id");
		$parent = M("column")->where(array("pid"=>16))->select();
		$this->assign("parent",$parent);
		$art = M("article")->where(array("id"=>$id))->find();
		$this->assign("art",$art);
		$this->display();
		# code...
	}
	//修改文章方法
	public function edit_news(){
		$data = I("post.");
		$file = $_FILES["file"];
		$upload = new Upload();// 实例化上传类
        $upload->maxSize   =     3145728000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     "./Public/Uploads/"; // 设置附件上传根目录
		$upload->subName   =	 "zhoubianfuwu"; // 设置附件上传（子）目录
		$upload->autoSub   =	 true;	
        // 上传单个文件 
        $info = $upload->uploadOne($file);
        $data["img"] = $info['savepath'].$info['savename'];
        $data["edit_time"] = time();
        // dump($data);die;
		$sql = M("article")->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Zhoubian/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
	//删除文章方法
	public function del_news(){
		$id = I("post.id");
		$where =array('id' => $id);
		$data = array('is_del' => 0);
		$sql = M("article")->where($where)->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
	}
}