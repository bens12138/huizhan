<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		$this->display();
	}
	public function login(){
		$name = I("post.name");
		$pwd = md5(I("post.password"));
		$admin = M("admin")->where(array("name"=>$name,"password"=>$pwd))->find();
		if(!$admin){
			$this->error("账号或密码错误");
		}elseif($admin["is_del"] == 0||$admin["status"] == 0){
			$this->error("该账号暂时无法使用");
		}elseif($admin) {
			session("id",$admin["id"]);
			$this->success("登陆成功",U("Admin/Index/index"),3);
		}
	}
}