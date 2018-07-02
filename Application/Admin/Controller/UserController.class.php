<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
    	$admin = M("admin")->where(array("is_del"=>1))->select();
    	$this->assign("admin",$admin);
		$this->display();
    }
    public function addUser(){
		$this->display();
    }
    public function add_user(){
		$name = $_POST["name"];
		$pwd = $_POST["password"];
		$data = array(
			'name' => $name,
			'password' => md5($pwd),
			'add_time' => time(),
			'edit_time' => time(),
			'status' => 1,
			'is_del' => 1
		);
		$sql = M("admin")->add($data);
		if ($sql) {
			$this->success("添加成功",U("Admin/User/index"),1);
		} else {
			$this->error("添加失败");
		}
    }
    public function editUser(){
    	$id = $_GET["id"];
    	$admin = M("admin")->where(array("id"=>$id))->find();
    	$this->assign("admin",$admin);
		$this->display();
    }
    public function edit_user(){
		$id = $_POST["id"];
		$name = $_POST["name"];
		$pwd = $_POST["password"];
		$data = array(
			'id' => $id,
			'name' => $name,
			'password' => md5($pwd),
			'edit_time' => time()
		);
		$sql = M("admin")->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/User/index"),1);
		} else {
			$this->error("修改失败");
		}
    }
    public function del_user(){
		$id = I('post.user_id');
		$where =array('id' => $id);
		$data = array('is_del' => 0);

		$sql = M("admin")->where($where)->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
    }
    public function edit_status(){
		$id = I("post.user_id");
		$status = M("admin")->where(array("id"=>$id))->find();
		if ($status["status"] == 1) {
			$data["status"] = 0;
		} else {
			$data["status"] = 1;
		}
		$sql = M("admin")->where(array("id"=>$id))->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
		
    }
}