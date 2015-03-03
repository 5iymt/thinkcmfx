<?php

namespace plugins\Yichat\Controller; 
use Api\Controller\PluginController;

class IndexController extends PluginController{
	
	function index(){
		$plugin_yichat_model=D("plugins://Yichat/PluginYichatText");//实例化自定义模型PluginYichatText ,需要创建PluginYichatText表
		$plugin_yichat_model->reply();
		
		$users_model=D("Users");//实例化Common模块下的Users模型
		//$users_model=D("Common/Users");//也可以这样实例化Common模块下的Users模型
		$users=$users_model->limit(0,5)->select();
		
		$this->assign("users",$users);
		
		$this->display(":index");
	}

}
