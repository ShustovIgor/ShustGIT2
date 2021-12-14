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
Автор: <select name="NameAuthor">
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
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  author.FIO,
  book.NameBook,
  janre.Janre,
  book.Cena,
  book.God_izdania,
  book.Kol_vo_str,
  izdatelstvo.nazvanie,
  status.Statuss
FROM book
  INNER JOIN author
    ON book.id_Author = author.id_Author
  INNER JOIN janre
    ON book.id_Janre = janre.id_Janre
  INNER JOIN izdatelstvo
    ON book.id_Izdatelstvo = izdatelstvo.id_izdatelstva
  INNER JOIN knig_fond
    ON knig_fond.id_book = book.id_Book
  INNER JOIN chitatel
    ON knig_fond.id_chitatel = chitatel.id
  INNER JOIN inventori_kode
    ON knig_fond.inventary_kod = inventori_kode.id_kode
  INNER JOIN status
    ON knig_fond.Status = status.id_status
WHERE janre.Janre ='$_GET[NameAuthor]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Книга".'</th>';
echo '<th>'."Автор".'</th>';
echo '<th>'."Жанр".'</th>';
echo '<th>'."Цена".'</th>';
echo '<th>'."Год издания".'</th>';
echo '<th>'."Кол-во стр.".'</th>';
echo '<th>'."Издательство".'</th>';
echo '<th>'."Статус |взято/свободно|".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['NameBook'].'</td>';
	echo '<td>'.$row['FIO'].'</td>';
	echo '<td>'.$row['Janre'].'</td>';
	echo '<td>'.$row['Cena'].'</td>';
	echo '<td>'.$row['God_izdania'].'</td>';
	echo '<td>'.$row['Kol_vo_str'].'</td>';
	echo '<td>'.$row['nazvanie'].'</td>';
	echo '<td>'.$row['Statuss'].'</td>';
	echo '</tr>';
	
}

}
echo '</table>';

?>
<br>
<form method="post" action="http://server.ru/qwe.php">
<input type="submit" name="submitButton" value="Меню" />
</form>