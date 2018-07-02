<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//判断session是否过期
        if (!session("?id")) {
            echo '<literal> <script> alert("身份验证已过期，请重新登录！！"); top.location.href="../Login/index"; </script> </literal>';
        }
		$this->display();
    }
    public function index_v1(){
		$this->display();
    }
}