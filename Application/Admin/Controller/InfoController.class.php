<?php
namespace Admin\Controller;
use Think\Controller;
class InfoController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$info = M("info")->where(array("id"=>1))->find();
		$this->assign("info",$info);
		$this->display();
	}
	public function edit_info(){
		$info = I("post.");
		$sql = M("info")->where(array("id"=>1))->save($info);
		if ($sql) {
			$this->success("修改成功",U("Admin/Info/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
}