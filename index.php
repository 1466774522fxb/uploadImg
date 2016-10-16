<?php
	// define('DIR_SECURE_FILENAME', 'default.html');//定义安全文件(每个目录下的index.html文件(可定义多个))名字为(default.html)
	// define('DIR_SECURE_CONTENT', 'deney Access!');			//定义安全文件的显示内容
	// define('BUILD_DIR_SECURE', false);						//关闭安全文件(默认是开启的)
	define("APP_PATH", "App/");			//定义应用目录
	define("APP_DEBUG", true);			//开启调试模式(ture)   默认为运用模式(false)

	include "thinkPHP/thinkPHP.php";	//引入thinkPHP框架

	// require "./ThinkPHP/ThinkPHP.php";	