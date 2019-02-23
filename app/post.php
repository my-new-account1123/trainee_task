<?php
if (isset($_POST["postID"]) && isset($_POST["postname"]) && isset($_POST["postage"]) && isset($_POST["postoccupation"] ))
{
	$postID=$_POST['postID'];
	$postname=$_POST['postname'];
	$postage=$_POST['postage'];
	$postoccupation=$_POST['postoccupation'];
	$url = 'http://test.invision.kz/test.php';
	$fields = [
		'id' => $postID,
		'name' => $postname,
		'age' => $postage,
		'occupation' => $postoccupation
	];
	$fields_string = http_build_query($fields);
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
	$result = curl_exec($ch);
	echo $result;
}

