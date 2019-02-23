<?php
if (isset($_POST["custId"]))
{
$id=$_POST['custId'];
$$id=$id-1;
$ch = curl_init('http://test.invision.kz/test.php?id='.$$id.'');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
$result = curl_exec($ch);
echo $result;
}
