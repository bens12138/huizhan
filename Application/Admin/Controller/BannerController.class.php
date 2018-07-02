<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class BannerController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$ban = M("banner")->select();
		$this->assign("ban",$ban);
		$this->display();
	}
	public function editBan(){
		$id = I("get.id");
		$ban = M("banner")->where(array("id"=>$id))->find();
		$this->assign("ban",$ban);
		$this->display();
	}
	public function edit_ban(){
		$id = I("post.id");
		$title = I("post.title");
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
        $data['edit_time'] = time();
		$sql = M("banner")->where(array("id"=>$id))->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Banner/index"),3);
		} else {
			$this->error("修改失败");
		}
	}
}