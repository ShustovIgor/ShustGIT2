<?php
require_once 'server.php';
?>
<form action = "Janre.php" method = "GET">
<caption> Заполните данные о книге</caption>
<table border="1">
<tr>
<th> Жанр </th>
</tr>
<tr>
<td> <input type = "text" name = "Janre"> </td>

</tr>
</table>
<br>
<input type = "submit" name = "submit1" value = "Добавить книгу"><br>
<br>
</form>
<?php
if ($_GET['submit1'])
{
	$result = mysqli_query($link,"INSERT INTO janre ( id_Janre, Janre)
  VALUES (0,'$_GET[Janre]');");
}
?>