<?php
namespace plugins\Yichat\Model;//Yichat插件英文名，改成你的插件英文就行了
use Common\Model\CommonModel;//继承CommonModel
class PluginYichatModel extends CommonModel{ 
	
	//自动验证
	protected $_validate = array(
			//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
			//array('ad_name', 'require', '广告名称不能为空！', 1, 'regex', 3),
	);
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
	//自定义方法
	function reply(){
		echo "hello 5iymt！";
	}
}