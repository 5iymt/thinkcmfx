<?php
namespace plugins\Yichat;
use Common\Lib\Plugin;

/**
 * Yichat
 */
class YichatPlugin extends Plugin{//Yichat插件英文名，改成你的插件英文就行了

        public $info = array(
            'name'=>'Yichat',//Yichat插件英文名，改成你的插件英文就行了
            'title'=>'易信插件',
            'description'=>'易信插件',
            'status'=>1,
            'author'=>'ThinkCMF',
            'version'=>'1.0'
        );
        
        public $has_admin=1;//插件是否有后台管理界面

        public function install(){
			$status=true;			
				/*
				CREATE TABLE `sp_plugin_yichat_text` (
					`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
					`keyword`  varchar(255) NOT NULL DEFAULT '' COMMENT '关键字' ,
					`content`  varchar(300) NOT NULL DEFAULT '5iymt' COMMENT '文本回复内容' ,
					`ctime`  varchar(13) NULL COMMENT '创建时间' ,
					`mtime`  varchar(13) NULL COMMENT '更新时间' ,
					PRIMARY KEY (`id`)
					)
					DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
					;*/
			
            return $status;//安装成功返回true，失败false
        }

        public function uninstall(){
            return true;//卸载成功返回true，失败false
        }
        
        //实现的app_init钩子方法
        public function app_init($param){
        	$config=$this->getConfig();
        	$this->assign($config);
        	$this->display('widget');
        }

    }