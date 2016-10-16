<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="/thinkPHP/upload_img/Public/js/jquery.min.js" type="text/javascript"></script>
<script src="/thinkPHP/upload_img/Public/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/thinkPHP/upload_img/Public/uploadify/uploadify.css">

</head>
    <body>
        <div id="imgs"><img width="200px" src="/thinkPHP/upload_img/Public/uploads/1.jpg"></div>
        <input id="file_upload" name="file_upload" type="file" multiple="true" value="" />
    </body>
    <script>
        var img = '';
		$('#file_upload').uploadify({
	        	'swf'      : '/thinkPHP/upload_img/Public/uploadify/uploadify.swf',
	        	'uploader' : 'upload',   //上传的方法
	        	'buttonText' : '缩略图上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 //把所有上传的图片都放入DIV中
	        	 img += "<img width='200px' src='/thinkPHP/upload_img/Public/Uploads/"+data+"'>";
	            $('#imgs').html(img);
        	}
    	});
    </script>
</html>