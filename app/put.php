<?php
if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["occupation"] ))
{
$name=$_POST['name'];
$age=$_POST['age'];
$occupation=$_POST['occupation'];
$ch = curl_init('http://test.invision.kz/test.php?name='.$name.'&age='.$age.'&occupation='.$occupation.'');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
$result = curl_exec($ch);
echo $result;
echo $_POST['name'];
echo $_POST['age'];
echo $_POST['occupation'];
}