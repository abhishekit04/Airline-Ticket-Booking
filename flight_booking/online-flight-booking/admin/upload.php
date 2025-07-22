<?php
include_once('connect.php');
if(isset($_FILES['upload']['name'])){
	$image=date('dmyhis').$_FILES['upload']['name'];
	$image_tmp=$_FILES['upload']['tmp_name'];
	move_uploaded_file($image_tmp, 'image/ckeditor/'.$image);
	$function_number=$_GET['CKEditorFuncNum'];
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){$url_link = 'https://'.$_SERVER['HTTP_HOST'].'/';}else{
		$url_link ='http://'.$_SERVER['HTTP_HOST'].'/';}
$url=$url_link.'irriagation/finial%20project/admin/image/ckeditor/'.$image;
	$message="";
	echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number,'$url','$message');</script> ";
}
?>
