<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ZhinanController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$fri = M("column")->where(array("is_del"=>1,"id"=>10))->find();
		$this->assign("fri",$fri);
		$sec = M("column")->where(array("is_del"=>1,"pid"=>10))->select();
		$this->assign("sec",$sec);
		$this->display();
	}
	public function addNan(){
		$this->display();
	}
	public function add_nan(){
		$title = I("post.title");
		$pic = $_FILES["file"];

		$upload = new Upload();// 实例化上传类
		$upload->maxSize   =	3145728000 ;// 设置附件上传大小
		$upload->exts	   =	array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =	"./Public/Uploads/"; // 设置附件上传根目录
		$upload->subName   =	 "zhubanfangzhinan"; // 设置附件上传（子）目录
		$upload->autoSub   =	 true;
		// 上传单个文件
		$info   =   $upload->uploadOne($pic);
		$data=array(
			"title" => $title,
			"img" => $info['savename'],
			"add_time" => time(),
			"edit_time" => time(),
			"pid" => 10,
			"status" => 1,
			"is_del" => 1,
		);
		$sql = M("column")->add($data);
		if ($sql) {
			$this->success("添加成功",U("Admin/Zhinan/index"),1);
		} else {
			$this->error("添加失败");
		}
	}
	public function editNan(){
		$id = I("get.id");
		$xx = M("column")->where(array("id"=>$id))->find();
		$this->assign("xx",$xx);
		$this->display();
	}
	public function edit_nan(){
		$id = I("post.id");
		$title = I("post.title");
		$pic = $_FILES["file"];

		$upload = new Upload();// 实例化上传类
		$upload->maxSize   =	 3145728000 ;// 设置附件上传大小
		$upload->exts	  =	 array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =	 "./Public/Uploads/"; // 设置附件上传根目录
		$upload->subName   =	 "zhubanfangzhinan"; // 设置附件上传（子）目录
		$upload->autoSub   =	 true;
		// 上传单个文件
		$info   =   $upload->uploadOne($pic);
		if($info) {
			$data['img'] = $info['savepath'].$info['savename'];	  // 上传路径
		}
		$data['title'] = $title;
		$data['edit_time'] = time();
		$sql = M("column")->where(array("id"=>$id))->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Zhinan/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
	//修改状态
	public function edit_status(){
		$id = I("post.id");
		$status = M("column")->where(array("id"=>$id))->find();
		if ($status["status"] == 1) {
			$data["status"] = 0;
		} else {
			$data["status"] = 1;
		}
		$sql = M("column")->where(array("id"=>$id))->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
	}
	//删除
	public function del_nan(){
		$id = I("post.id");
		$where =array('id' => $id);
		$data = array('is_del' => 0);
		$sql = M("column")->where($where)->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
	}
}