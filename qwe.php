<?php
require_once 'server.php';
?>
<html>
<head>
 	<title>Фоновое изображение с помощью CSS</title>
   <style>
	body
	{
		background: #000 url(https://klv-oboi.ru/img/gallery/50/thumbs/thumb_l_P4131.jpg); /* Фоновый цвет и фоновый рисунок*/
		color: #fff; /*Цвет текста на странице*/
		background-attachment: fixed; /* Фон страницы фиксируется */
		background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
	}
 </style>
 </head>
 </html>
<th><center><font size="30" color="white" face="Monotype Corsiva"> Меню управления библиотеки </font></center></th>
<br>
<form method="post" action="http://server.ru/Janre.php">
<center><input type="submit" name="submitButton" value="Добавить жанр" /></center>
</form>
<br>
<form method="post" action="http://server.ru/DeleteJanra.php">
<center><input type="submit" name="submitButton" value="Удалить жанр" /></center>
</form>
<br>
<form method="post" action="http://server.ru/PoiskPoSlovuBook.php?Nameizdatelstvo=Эксмо&submit=Поиск">
<center><input type="submit" name="submitButton" value="Поиск по издательству" /></center>
</form>
<br>
<form method="post" action="http://server.ru/poStatusu.php">
<center><input type="submit" name="submitButton" value="Поиск по статусу" /></center>
</form>
<br>
<form method="post" action="http://server.ru/qwe%203.php">
<center><input type="submit" name="submitButton" value="Поиск по жанру" /></center>
</form>
