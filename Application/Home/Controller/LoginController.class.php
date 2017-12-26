<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller 
{
    public function index()
    {
        $this->display();
    }

    public function login()
    {
    	$data['username'] = trim($_POST['username']);
    	$data['password'] = md5(trim($_POST['password']));
    	$user = D('User')->where($data)->find();
    	if($user){
    		$_SESSION['xqs_token'] = base64_encode($_POST['username']);
    		$_SESSION['xqs_uid'] = $user['id'];
    		$this->success('登录成功', U('Home/Index/index'));
    	}else{
    		$this->error('用户名或密码错误', U('Home/Login/index'),2);
    	}
    }
}