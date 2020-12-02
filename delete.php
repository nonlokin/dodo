<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
					//удалить из таблицы контакты где название столбца
	$text_zaprosa = "DELETE FROM basket WHERE id = '".$_GET["id"]."' ";
	mysqli_query($connect, $text_zaprosa);
	header("Location:index.php")


?>