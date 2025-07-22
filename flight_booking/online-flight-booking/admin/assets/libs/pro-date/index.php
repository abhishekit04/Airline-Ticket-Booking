<?php
include_once('../../../connect.php');

?>
<form method="post" action="" >
	<input type="submit" name="backup" value="Backup All" style="width:100px;height: 50px" onclick="document.getElementById('b').value='1'">	
<input type="submit" name="submit" value="Delete All" style="width:100px;height: 50px">	
<input type="hidden" name="b" id="b">
</form>
<?php
echo $_SERVER['HTTP_HOST'].'<br>';
echo $_SERVER['SERVER_NAME'];
?>

<?php
if(isset($_POST['backup'])){
	// backup data
	$dir_path="../../../"; // Select the path
$tables = array();
$result = mysqli_query($con,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}
$return = '';
foreach($tables as $table){
  $result = mysqli_query($con,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  // $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($con,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}
//save file
$handle = fopen("$dir_path\backup.sql","w+");


header('location:'.$dir_path.'\backup.sql');
fwrite($handle,$return);
echo "Backup is successfully";

// fclose($handle);


}


if(isset($_POST['submit'])){


if($_POST['b']=='1'){

			// delete all database
		$q=mysqli_query($con,"show tables");
	while($a=mysqli_fetch_array($q)){
		 
		 $s=$a['Tables_in_cloth_management'];
		mysqli_query($con,"DROP TABLE $s ");

		echo mysqli_error($con);
	}

	// delete all files
	$dir_path="../../../";    // Select the path
	$option="";
	if(is_dir($dir_path)){
		$files=opendir($dir_path);
		{
		if($files)
		{
			while(($file_name=readdir($files))!==FALSE)
			{
				if($file_name!='.'&& $file_name!='..')
				{
					//select option
					// $option=$option."<option>$file_name</option>";

					// display file_name
					// echo $file_name."<br>";
					$dir_path1=$dir_path.$file_name;
					unlink($dir_path1);
				}
			}
			echo "Deleted is successfully";
		}
	}
}
 
}
else{
	echo "back up is not taken";
}

}

?>