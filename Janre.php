<?php
require_once 'server.php';
?>
<html>
<head>
 	<title>Фоновое изображение с помощью CSS</title>
   <style>
	body
	{
		background: #000 url(https://catherineasquithgallery.com/uploads/posts/2021-03/1614630795_37-p-fon-knigi-dlya-fotoshopa-61.jpg); /* Фоновый цвет и фоновый рисунок*/
		color: #fff; /*Цвет текста на странице*/
		background-attachment: fixed; /* Фон страницы фиксируется */
		background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
	}
 </style>
 </head>
 </html>
<form action = "qwe 3.php" method = "GET" >
Список жанров: <select name="NameAuthor">
<?php
$result=mysqli_query($link,"SELECT
  janre.Janre
FROM janre");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['Janre']."</option>");
}
?>
</select><br>

</form>

<form action = "Janre.php" method = "GET">
<caption>---Добавить новый жанр---</caption>
<br>   </br>
<table border="1">
<tr>
<th> Жанр </th>
</tr>
<tr>
<td> <input type = "text" name = "Janre"> </td>

</tr>
</table>
<br>
<input type = "submit" name = "submit1" value = "Добавить жанр"><br>
<br>
</form>
<?php
if ($_GET['submit1'])
{
	$result = mysqli_query($link,"INSERT INTO janre ( id_Janre, Janre)
  VALUES (0,'$_GET[Janre]');");
}
?>
<form method="post" action="http://server.ru/qwe.php">
<input type="submit" name="submitButton" value="Меню" />
</form>