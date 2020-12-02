<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DODO</title>
  </head>
  <body>
  <?php
 	$connect = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
	$text_zaprosa2 = "SELECT * FROM basket";
	$zapros2 = mysqli_query($connect, $text_zaprosa2); 	
  ?> 	
    <div class="col-10 mx-auto">     
        <div class="row">   <!-- header -->
            <div class="col-2">
                <img src="img/logo.jpg" class="w-100">
            </div>
            <div class="col-7">
                
            </div>
            <div class="col-3 text-right">
                <button class="btn bg-btn-dodo mt-5 basket">Корзина</button>
            </div>

            <div class="bsk-box bg-white border rounded col-3 pt-3"> <!-- Корзина -->
             
                <div class="row">
                    <div class="col-3">
                        <img src="img/1.jpeg" class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <h5>Пицца из половинок</h5>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <h5>630  <span>₽</span></h5>                        
                    </div>
                    <div class="col-2 mt-2">
                   
                           
                        <button style='border: none; background: none'> <img src="img/trash.png" class="w-100"></button>
                   
                        
                    </div>
                </div>
                <?php
					for($i=0;$i<$zapros2->num_rows;$i++){
						$stroka2 = $zapros2->fetch_assoc();        	

                ?>
               <div class="row">
                    <div class="col-3">
                        <img src="<?php echo $stroka2["img"]?>" class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <h5><?php echo $stroka2["name"]?></h5>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <h5><?php echo $stroka2["price"]?><span></span></h5>                        
                    </div>
                    <div class="col-2 mt-2">                   		
                        <form action="delete.php" method="GET">
                        	<input type="hidden" name="id" value="<?php echo $stroka2["id"]?>">
                        	<button style='border: none; background: none'> <img src="img/trash.png" class="w-100"></button>
                        </form>   
                        
                   
                        
                    </div>
                </div>                
  		<?php
			}
		?>               
		
                     
   
				<div class="row">
	               <button class="btn bg-btn-dodo cls my-3 ml-2">Закрыть</button>
	                <form action="deleteall.php" method="GET">
	                	<button class="btn bg-btn-dodo cls my-3 ml-2">Очистить все</button>
	                </form>					
				</div>
 
            </div>
        </div>     

        <div class="col-12 rounded banner "> <!-- banner -->            
        </div>

        <h1 class="my-5">Пицца</h1>
        <div class="row  pb-5">

            <div class="col-3">   
                <img src="img/1.jpeg" class="w-100">
                <div class="pizz"> 
                    <h3>Пицца из половинок</h3>   
                    <p class="text-secondary">Соберите свою пиццу 35 см с двумя разными вкусами</p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3>630 <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
            
                        <button class="btn bg-btn-dodo">Выбрать</button>  
                
                                              
                    </div>
                </div>       
            </div>

        <?php
        	$pizza = "SELECT * FROM pizzas WHERE category='Пицца'";
        	$pizza2 = mysqli_query($connect, $pizza);
			for($i=0;$i<$pizza2->num_rows;$i++){
				$stroka = $pizza2->fetch_assoc();        	
        ?>
        <!--пиццы-->           
            <div class="col-3">   
                <img src="<?php echo $stroka["img"]?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $stroka["name"]?></h3>   
                    <p class="text-secondary"><?php echo $stroka["title"]?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka["price"]?> <span></span></h3>                        
                    </div>
                    <div class="col-6">
                 
            
                        
                        <form action="basket.php" method="GET">
                        	<input type="hidden" name="name" value="<?php echo $stroka["name"]?>">
                        	<input type="hidden" name="price" value="<?php echo $stroka["price"]?>">
                        	<input type="hidden" name="img" value="<?php echo $stroka["img"]?>">
                        	<button class="btn bg-btn-dodo">Выбрать</button> 
                        </form> 
                
                                              
                    </div>
                </div>       
            </div>
 		<?php
			}
		?>






                                
        </div>
      <h1 class="my-5">Комбо</h1>
      <div class="row">	
       <?php
        	$combo = "SELECT * FROM pizzas WHERE category='комбо'";
        	$combo2 = mysqli_query($connect, $combo);
			for($i=0;$i<$combo2->num_rows;$i++){
				$stroka2 = $combo2->fetch_assoc();        	
        ?>
        <!--комбо-->
	            <div class="col-3">   
	                <img src="<?php echo $stroka2["img"]?>" class="w-100">
	                <div class="pizz"> 
	                    <h3><?php echo $stroka2["name"]?></h3>   
	                    <p class="text-secondary"><?php echo $stroka2["title"]?></p>
	                </div>  
	                <div class="row">
	                    <div class="col-6">
	                        <h3><?php echo $stroka2["price"]?> <span></span></h3>                        
	                    </div>
	                    <div class="col-6">
	                 
	            
	                        
	                        <form action="basket.php" method="GET">
	                        	<input type="hidden" name="name" value="<?php echo $stroka2["name"]?>">
	                        	<input type="hidden" name="price" value="<?php echo $stroka2["price"]?>">
	                        	<input type="hidden" name="img" value="<?php echo $stroka2["img"]?>">
	                        	<button class="btn bg-btn-dodo">Выбрать</button> 
	                        </form> 
	                
	                                              
	                    </div>
	                </div>       
	            </div>
	 		<?php
				}
			?>
		</div>











      <h1 class="my-5">Закуски</h1>
      <div class="row">	
       <?php
        	$z = "SELECT * FROM pizzas WHERE category='закуски'";
        	$z2 = mysqli_query($connect, $z);
			for($i=0;$i<$z2->num_rows;$i++){
				$stroka3 = $z2->fetch_assoc();        	
        ?>
        <!--закуски-->
	            <div class="col-3">   
	                <img src="<?php echo $stroka3["img"]?>" class="w-100">
	                <div class="pizz"> 
	                    <h3><?php echo $stroka3["name"]?></h3>   
	                    <p class="text-secondary"><?php echo $stroka3["title"]?></p>
	                </div>  
	                <div class="row">
	                    <div class="col-6">
	                        <h3><?php echo $stroka3["price"]?> <span></span></h3>                        
	                    </div>
	                    <div class="col-6">
	                 
	            
	                        
	                        <form action="basket.php" method="GET">
	                        	<input type="hidden" name="name" value="<?php echo $stroka3["name"]?>">
	                        	<input type="hidden" name="price" value="<?php echo $stroka3["price"]?>">
	                        	<input type="hidden" name="img" value="<?php echo $stroka3["img"]?>">
	                        	<button class="btn bg-btn-dodo">Выбрать</button> 
	                        </form> 
	                
	                                              
	                    </div>
	                </div>       
	            </div>
	 		<?php
				}
			?>
		</div>







      <h1 class="my-5">Десерт</h1>
      <div class="row">	
       <?php
        	$d = "SELECT * FROM pizzas WHERE category='десерты'";
        	$d2 = mysqli_query($connect, $d);
			for($i=0;$i<$d2->num_rows;$i++){
				$stroka4 = $d2->fetch_assoc();        	
        ?>
        <!--десерт-->
	            <div class="col-3">   
	                <img src="<?php echo $stroka4["img"]?>" class="w-100">
	                <div class="pizz"> 
	                    <h3><?php echo $stroka4["name"]?></h3>   
	                    <p class="text-secondary"><?php echo $stroka4["title"]?></p>
	                </div>  
	                <div class="row">
	                    <div class="col-6">
	                        <h3><?php echo $stroka4["price"]?> <span></span></h3>                        
	                    </div>
	                    <div class="col-6">
	                 
	            
	                        
	                        <form action="basket.php" method="GET">
	                        	<input type="hidden" name="name" value="<?php echo $stroka4["name"]?>">
	                        	<input type="hidden" name="price" value="<?php echo $stroka4["price"]?>">
	                        	<input type="hidden" name="img" value="<?php echo $stroka4["img"]?>">
	                        	<button class="btn bg-btn-dodo">Выбрать</button> 
	                        </form> 
	                
	                                              
	                    </div>
	                </div>       
	            </div>
	 		<?php
				}
			?>
		</div>						            
	</div>

    <script type="text/javascript">
        let bsk = document.querySelector('.basket');
        let bsk_box = document.querySelector('.bsk-box');
        let close = document.querySelector('.cls');

        bsk.onclick = function() {
            bsk_box.style.display = "block";
        }

        close.onclick = function() {
            bsk_box.style.display = "none";
        }

    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>