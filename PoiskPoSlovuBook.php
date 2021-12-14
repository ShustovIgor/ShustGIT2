<?php
require_once'server.php';
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
<form action="PoiskPoSlovuBook.php" method="GET">
 Издательство:<input type="text" name="Nameizdatelstvo"><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  izdatelstvo.nazvanie,
  book.NameBook,
  book.Cena,
  book.God_izdania,
  author.FIO,
  book.Kol_vo_str
FROM book
  INNER JOIN izdatelstvo
    ON book.id_Izdatelstvo = izdatelstvo.id_izdatelstva
  INNER JOIN author
    ON book.id_Author = author.id_Author
WHERE izdatelstvo.nazvanie = '$_GET[Nameizdatelstvo]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Книга".'</th>';
echo '<th>'."Цена".'</th>';
echo '<th>'."Год издания".'</th>';
echo '<th>'."Автор".'</th>';
echo '<th>'."кол-во стр.".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	echo '<tr>';
	echo '<td>'.$row['NameBook'].'</td>';
	echo '<td>'.$row['Cena'].'</td>';
	echo '<td>'.$row['God_izdania'].'</td>';
	echo '<td>'.$row['FIO'].'</td>';
	echo '<td>'.$row['Kol_vo_str'].'</td>';
	echo '</tr>';

}
echo '</table>';
}
?>
<form method="post" action="http://server.ru/qwe.php">
<input type="submit" name="submitButton" value="Меню" />
</form>