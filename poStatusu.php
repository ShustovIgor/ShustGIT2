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
<form action = "poStatusu.php" method = "GET" >
Статус: <select name="Namestatus">
<?php
$result=mysqli_query($link,"SELECT
  status.Statuss
FROM status");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['Statuss']."</option>");
}
?>
</select><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  book.NameBook,
  chitatel.Nomer_bileta,
  status.Statuss,
  knig_fond.id_book,
  knig_fond.inventary_kod
FROM knig_fond
  INNER JOIN book
    ON knig_fond.id_book = book.id_Book
  INNER JOIN chitatel
    ON knig_fond.id_chitatel = chitatel.id
  INNER JOIN status
    ON knig_fond.Status = status.id_status
WHERE status.Statuss ='$_GET[Namestatus]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Книга".'</th>';
echo '<th>'."№ билета читателя".'</th>';
echo '<th>'."Статус".'</th>';
echo '<th>'."id|Книга".'</th>';
echo '<th>'."Инвентарный код".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['NameBook'].'</td>';
	echo '<td>'.$row['Nomer_bileta'].'</td>';
	echo '<td>'.$row['Statuss'].'</td>';
	echo '<td>'.$row['id_book'].'</td>';
	echo '<td>'.$row['inventary_kod'].'</td>';
	echo '</tr>';
	
}

}
echo '</table>';

?>
<br>
<form method="post" action="http://server.ru/qwe.php">
<input type="submit" name="submitButton" value="Меню" />
</form>