<?php
require_once 'server.php';
?>

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
  janre.Janre
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
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['NameBook'].'</td>';
	echo '<td>'.$row['FIO'].'</td>';
	echo '<td>'.$row['Janre'].'</td>';
	echo '</tr>';
	
}

}
echo '</table>';
?>