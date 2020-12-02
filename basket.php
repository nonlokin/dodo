<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
		$text_zaprosa_vstavit = "INSERT INTO basket (name, price, img)
								VALUES ('{$_GET["name"]}', '{$_GET["price"]}', '{$_GET["img"]}')";
		$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
		header("Location: index.php")						
	?>
