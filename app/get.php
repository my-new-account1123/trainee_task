<?php 
$ch = 'http://test.invision.kz/test.php';
$session = curl_init($ch);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($session);
$id=0;
curl_close($session);
$url = json_decode($data, true);
if ($url === NULL) die('Ошибка');
echo '<table class="table table-bordered">';
echo '<thead>
<tr>
<th>id</th>
<th>Имя</th>
<th>Возраст</th>
<th>Специальность</th>
</tr>';
foreach ($url as $coin) {
	$id++;
	$name = $coin["name"];
	$age = $coin["age"];
	$occupation = $coin["occupation"];
	echo ' <tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$age. '<td>'.$occupation.'</td>
	<td>

	<form action="../invison/app/delet.php" method="post">
	<input type="hidden" id="custId" name="custId" value="'.$id.'">
	<br/> 
	<input class="btn btn-primary" value="Очистить" type="submit">
	</form>
	</td>
	<td>
<form action="../invison/app/post.php" method="post">
	<div class="form-group">
		<label for="name">Имя</label>
		<input id="name" name="postname" type="text"  class="form-control" >
	</div>
	<div class="form-group">
		<label for="age">Возраст</label>
		<input id="age" name="postage" type="text" value="" class="form-control">
	</div>
	<div class="form-group">
		<label for="occupation">Специальность</label>
		<input  id="occupation" name="postoccupation" type="text" value=""class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" id="custId" name="postID" value="'.$id.'">
	</div>	
	<button type="submit" class="btn btn-primary">Изменить</button>
</form>
	</td> ';
}
echo '</table>';
die();
