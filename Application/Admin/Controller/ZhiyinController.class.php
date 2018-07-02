<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ZhiyinController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$zhiyin = M("column")->where(array("id"=>1))->find();
		$this->assign("fri",$zhiyin);
		$zhiyin_chi = M("column")->where(array("pid"=>1))->select();
		$this->assign("sec",$zhiyin_chi);
		$this->display();
	}
	public function editZhi(){
		$id = I("get.id");
		$zhiyin = M("column")->where(array("id"=>$id))->find();
		$this->assign("zy",$zhiyin);
		$this->display();
	}
	public function edit_zhi(){
		$id = I("post.id");
		$title = I("post.title");
		$btitle = I("post.btitle");
		$pic = $_FILES["file"];
		
		$upload = new Upload();// 实例化上传类
        $upload->maxSize   =     3145728000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     "./Public/Uploads/"; // 设置附件上传根目录
        $upload->autoSub   =     false;
        // 上传单个文件 
        $info   =   $upload->uploadOne($pic);
        if($info) {
            $data['img'] = $info['savename'];      //$info['savepath']. 上传路径
        }
        $data['title'] = $title;
        $data['btitle'] = $btitle;
        $data['edit_time'] = time();
        
		$sql = M("column")->where(array("id"=>$id))->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Zhiyin/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
}