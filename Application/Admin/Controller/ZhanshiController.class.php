<?php
namespace Admin\Controller;
use Think\Controller;
class ZhanshiController extends Controller {
    public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
    	$arc = M("article")->where(array("is_del"=>1,"pid"=>20))->select();
    	$this->assign("arc",$arc);
		$this->display();
    }
    public function addShi(){
		$this->display();
    }
    public function add_shi(){
		$title = $_POST["title"];
		$author = $_POST["author"];
		$cont = $_POST["cont"];
		$data = array(
			'title' => $title,
			'author' => $author,
			'content' => $cont,
			'pid' => 20,
			'add_time' => time(),
			'edit_time' => time(),
			'is_del' => 1
		);
		$sql = M("article")->add($data);
		if ($sql) {
			$this->success("添加成功",U("Admin/Zhanshi/index"),1);
		} else {
			$this->error("添加失败");
		}
    }
    public function editShi(){
    	$id = $_GET["id"];
    	$art = M("article")->where(array("id"=>$id))->find();
    	$this->assign("art",$art);
		$this->display();
    }
    public function edit_shi(){
		$id = $_POST["id"];
		$title = $_POST["title"];
		$author = $_POST["author"];
		$cont = $_POST["cont"];
		$data = array(
			'title' => $title,
			'author' => $author,
			'content' => $cont,
			'edit_time' => time()
		);
		$sql = M("article")->where(array("id"=>$id))->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Zhanshi/index"),1);
		} else {
			$this->error("修改失败");
		}
    }
    public function del_shi(){
		$id = I('post.id');
		$where =array('id' => $id);
		$data = array('is_del' => 0);

		$sql = M("article")->where($where)->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
    }
    public function edit_status(){
		$id = I("post.user_id");
		$status = M("article")->where(array("id"=>$id))->find();
		if ($status["status"] == 1) {
			$data["status"] = 0;
		} else {
			$data["status"] = 1;
		}
		$sql = M("article")->where(array("id"=>$id))->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
    }
}