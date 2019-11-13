<?php  
	$arr=$_FILES;
	$tmpName=$arr['data']['tmp_name'];
	$fileName="111.jpg";
	$content=file_get_contents($tmpName);
	file_put_contents($fileName,$content,FILE_APPEND);

	$arrRetuen=array(
		"error"=>0
	);
	echo json_encode($arrRetuen);
?>
