<?php 
	$tmpName=$_FILES['data']['tmp_name'];
    $fileName="111.jpg";
    $content = file_get_contents($tmpName); 	
	file_put_contents($fileName,$content,FILE_APPEND);

	$res = array(
			"error"=>0,
		);
	echo json_encode($res);
?>
