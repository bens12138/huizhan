<?php
namespace Admin\Controller;
use Think\Controller;
class NavController extends Controller {
	public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$nav = M("nav")->where(array("is_del"=>1,"pid"=>0))->select();
		foreach ($nav as $key => $value) {
			$nav[$key]["erji"]=[];
			$erji = $this->erji($value["id"]);
			foreach ($erji as $v) {
				array_push($nav[$key]['erji'], $v);
			}
		}
		//dump($nav);die;
		$this->assign("nav",$nav);
		$this->display();
	}
	//获取二级导航
	public function erji($pid){
		$erji = M("nav")->where(array("is_del"=>1,"pid"=>$pid))->order("id asc")->select();
		return $erji;
	}
	//添加
	public function addNav(){
		$nav = M("nav")->where(array("pid"=>0))->select();
		$this->assign("nav",$nav);
		$this->display();
	}
	public function add_nav(){
		$pid = I("post.pid");
		$name = I("post.name");
		$data = array(
			"name" => $name,
			"add_time" => time(),
			"edit_time" => time(),
			"pid" => $pid,
			"status" => 1,
			"is_del" => 1,
		);
		$sql = M("nav")->add($data);
		if ($sql) {
			$this->success("添加成功",U("Admin/Nav/index"),1);
		} else {
			$this->error("添加失败");
		}
	}
	//修改页面
	public function editNav(){
		$id = I("get.id");
		$nav = M("nav")->where(array("id"=>$id))->find();
		$this->assign("nav",$nav);
		//查询所有一级导航
		$firnav = M("nav")->where(array("pid"=>0))->select();
		$this->assign("firnav",$firnav);
		$this->display();
	}
	//修改
	public function edit_nav(){
		$id = I("post.id");
		$pid = I("post.pid");
		$name = I("post.name");
		$where =array('id' => $id);
		$data = array(
			'pid' => $pid,
			'name' => $name,
			"edit_time" => time()
		);

		$sql = M("nav")->where($where)->save($data);
		if ($sql) {
			$this->success("修改成功",U("Admin/Nav/index"),1);
		} else {
			$this->error("修改失败");
		}
	}
	//删除
	public function del_nav(){
		$id = I("post.nav_id");
		$where =array('id' => $id);
		$data = array('is_del' => 0);

		$sql = M("nav")->where($where)->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
	}
	//修改状态
    public function edit_status(){
		$id = I("post.id");
		$status = M("nav")->where(array("id"=>$id))->find();
		if ($status["status"] == 1) {
			$data["status"] = 0;
		} else {
			$data["status"] = 1;
		}
		$sql = M("nav")->where(array("id"=>$id))->save($data);
		if ($sql) {
			echo 1;exit;
		} else {
			echo 2;exit;
		}
    }
}