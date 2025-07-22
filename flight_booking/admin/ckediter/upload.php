<?php
include_once('connect.php');
if(isset($_FILES['upload']['name'])){
	$image=date('dmyhis').$_FILES['upload']['name'];
	$image_tmp=$_FILES['upload']['tmp_name'];
	move_uploaded_file($image_tmp, 'image/'.$image);
	$function_number=$_GET['CKEditorFuncNum'];
	$url="http://".$_SERVER['HTTP_HOST'].'/bloging/image/'.$image;
	$message="";
	echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number,'$url','$message');</script> ";
}
?>
<script src="ckediter/ckeditor.js"></script>
<script type="text/javascript">
   CKEDITOR.replace( 'description',{
        filebrowserUploadUrl:"upload.php"
    } );
   </script>