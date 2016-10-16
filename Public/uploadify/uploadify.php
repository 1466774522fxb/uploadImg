<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/thinkPHP/upload_img/Public/uploadify/uploads'; // Relative to the root

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];	//文件上传方式【(http post)合法】
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);	//返回文件路径的信息(文件名)

	// $size = $_FILES['Filedata']['size'];		//上传文件的大小

	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);			//文件合法移动到$targetFile
	} else {
		echo 'Invalid file type.';
	}
}
?>