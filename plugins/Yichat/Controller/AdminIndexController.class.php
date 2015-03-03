<?php

namespace plugins\Yichat\Controller; 
use Api\Controller\PluginController;

class AdminIndexController extends PluginController{
	
	function _initialize(){
		$adminid=sp_get_current_admin_id();//获取后台管理员id，可判断是否登录
		if(!empty($adminid)){
			$this->assign("adminid",$adminid);
		}else{
			//TODO no login
		}
	}
	
	function index(){
		//$plugin_yichat_model=D("plugins://Yichat/PluginYichat");//实例化自定义模型PluginYichat ,需要创建plugin_demo表
		//$plugin_yichat_model->reply();
		
		$users_model=D("Users");//实例化Common模块下的Users模型
		//$users_model=D("Common/Users");//也可以这样实例化Common模块下的Users模型
		$users=$users_model->limit(0,5)->select();
		
		
		
		$this->assign("users",$users);
		
		$this->display(":admin_index");
	}

}
