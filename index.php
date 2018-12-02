<!DOCTYPE html>
<html lang="en">
<?php 
$year=date('Y');
$title='Brand';
$h1='bran<span class="lastD">d</span>'.$year;

?>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="containerS">


		<header>
		<div id="flexH"><!---Первая строка-->
			<div > <!--- Левая часть верхней строки-->
				<img src="./img/index/logo.png" alt="logo" class="logo">
				<h1><? echo $h1; ?></h1>
				<nav class="navbar navbar-light bg-light">
  						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   								 <span class="Browse">Browse</span>
  						</button>
  						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      						<ul>
        						<li><a class="dropdown-item" href="#">WOMEN</a>
        							<div class="dropdown-divider"></div>
        						<ul class="subnav">
        							<li><a class="dropdown-item" href="#WDresses">Dresses</a></li>
	        						<li><a class="dropdown-item" href="#WTops">Tops</a></li>
	        						<li><a class="dropdown-item" href="#WSweaters">Sweaters/Knits</a></li>
        							<li><a class="dropdown-item" href="#WJackets">Jackets/Coats</a></li>
        							<li><a class="dropdown-item" href="#WBlazers">Blazers</a></li>
        							<li><a class="dropdown-item" href="#WDenim">Denim</a></li>
        							<li><a class="dropdown-item" href="#WLeggings">Leggings/Pants</a></li>
        							<li><a class="dropdown-item" href="#WSkirts">Skirts/Shorts</a></li>
        							<li><a class="dropdown-item" href="#WAccessories">Accessories</a></li>
	
        						</ul></li>	
        						
        						<li><a class="dropdown-item" href="#">MEN</a>
        							<div class="dropdown-divider"></div>
        						<ul class="subnav">
        							<li><a class="dropdown-item" href="#MTees">Tees/Tank tops</a></li>
        							<li><a class="dropdown-item" href="#MShirts">Shirts/Polos</a></li>
        							<li><a class="dropdown-item" href="#MSweaters">Sweaters</a></li>
        							<li><a class="dropdown-item" href="#MSweatshirts">Sweatshirts/Hoodies</a></li>
        							<li><a class="dropdown-item" href="#Blazers">Blazers</a></li>
        							<li><a class="dropdown-item" href="#MJackets">Jackets/vests</a></li>
      							</ul></li>
      						</ul>
    					</div>
  						<form class="form-inline">
    						<input class="form-control" type="search" placeholder="Search for item..." aria-label="Search">
    						<button class="btn2" type="submit">&#128269;</button>
  						</form>
				</nav>
			</div> <!--- Левая часть верхней строки-->

			<div class="pravo"><!--- Правая часть верхней строки-->
			<!--- Корзина-->
				<div class="btn-group">
				  <button type="button" class="btn btn-default cart dropdown-toggle" data-toggle="dropdown"><img src="./img/index/cart.png" alt="cart"><span class="caret"></span></button>
				  <ul class="dropdown-menu" role="menu">
				    <li>	
				    	<div class="container">
								 <div class="row">
								   <div class="col">
								    <img src="./img/prod/rebox_zane.png" alt="rebox_zane" class="vcart">
								   </div>
								   <div class="col-5">
								     	<div class="row-sm">
								     		<span class="Rebox_Zane">Rebox zane</span>
								     	</div>
								     	<div class="row-sm">
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda2">&#10027;</span>
								     	</div>
								     	<div class="row-sm">
								     		<span class="cart_price">1 x 250$</span>
								     	</div>
								   </div>
								   <div class="col">
								   <img src="./img/prod/zakr.png" alt="zakr" class="zakrS">
								   </div>
								 </div>
								</div>				    	
				    </li>
				    <li>
				    	<div class="container">
								 <div class="row">
								   <div class="col">
								    <img src="./img/prod/rebox_zane2.png" alt="rebox_zane" class="vcart">
								   </div>
								   <div class="col-5">
								     	<div class="row-sm">
								     		<span class="Rebox_Zane">Rebox zane</span>
								     	</div>
								     	<div class="row-sm">
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda">&#9733;</span>
								     		<span class="zvezda2">&#10027;</span>
								     	</div>
								     	<div class="row-sm">
								     		<span class="cart_price">1 x 250$</span>
								     	</div>
								   </div>
								   <div class="col">
								   <img src="./img/prod/zakr.png" alt="zakr" class="zakrS">
								   </div>
								 </div>
								</div>							
				    </li>
				    <li><div class="container">
				    	
  							<div class="row">
  							  <div class="col">
  							   		<span class="TOTAL">Total</span>
  							  </div>
  							  <div class="col">
  							  </div>
  							  <div class="col">
  							   		<span class="TOTAL">$500.00</span>
  							  </div>
  							</div>	 
  						</div> 
				    </li>
				   <li>
				    	<button type="button" class="btn3"><span class="check">checkout</span></button>
				    </li>
				    <li>
				    	<button type="button" class="btn4"><span class="go_to_cart">go to cart</span></button>
				    </li>
				  </ul>
				</div>
			<!--- Аккаунт-->
				<div class="btn-group">
				  <button type="button" class="btn btn-default account dropdown-toggle" data-toggle="dropdown"><span class="myacc">My Account</span></button>
				  
				</div>
			</div><!--- Правая часть верхней строки-->
		</div> <!---Верхняя строка-->

		</header>
	</div>
	<div class="borderv"><!---Вторая строка-->
	
				<nav class="nav justify-content-center">
  					<a class="nav-link Home" href="#">Home</a>
  					<a class="nav-link Home" href="#">man</a>
  					<a class="nav-link Home" href="#">women</a>
  					<a class="nav-link Home" href="#">kids</a>
  					<a class="nav-link Home" href="#">accoseriese</a>
  					<a class="nav-link Home" href="#">featured</a>
  					<a class="nav-link Home" href="#">hot deals</a>
				  	<div class="dropdown-menu">
      						<ul>
        						<li><a class="dropdown-item" href="#">WOMEN</a>
        							<div class="dropdown-divider"></div>
        						<ul class="subnav">
        							<li><a class="dropdown-item" href="#WDresses">Dresses</a></li>
	        						<li><a class="dropdown-item" href="#WTops">Tops</a></li>
	        						<li><a class="dropdown-item" href="#WSweaters">Sweaters/Knits</a></li>
        							<li><a class="dropdown-item" href="#WJackets">Jackets/Coats</a></li>
        							<li><a class="dropdown-item" href="#WBlazers">Blazers</a></li>
        							<li><a class="dropdown-item" href="#WDenim">Denim</a></li>
        							<li><a class="dropdown-item" href="#WLeggings">Leggings/Pants</a></li>
        							<li><a class="dropdown-item" href="#WSkirts">Skirts/Shorts</a></li>
        							<li><a class="dropdown-item" href="#WAccessories">Accessories</a></li>
	
        						</ul></li>	
        						
        						<li><a class="dropdown-item" href="#">MEN</a>
        							<div class="dropdown-divider"></div>
        						<ul class="subnav">
        							<li><a class="dropdown-item" href="#MTees">Tees/Tank tops</a></li>
        							<li><a class="dropdown-item" href="#MShirts">Shirts/Polos</a></li>
        							<li><a class="dropdown-item" href="#MSweaters">Sweaters</a></li>
        							<li><a class="dropdown-item" href="#MSweatshirts">Sweatshirts/Hoodies</a></li>
        							<li><a class="dropdown-item" href="#Blazers">Blazers</a></li>
        							<li><a class="dropdown-item" href="#MJackets">Jackets/vests</a></li>
      							</ul></li>
      						</ul>
    					</div>

				</nav>

		</div><!---Вторая строка-->
<!---- Домашнее задание НАЧАЛО--->
<div class="dz2">

		<span class="Browse">
			Домашнее задание 2 <br>
			<?php 
				echo "1.Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
				<br>Затем написать скрипт, который работает по следующему принципу:<br>";

				$a=-3; $b=-1;

				if ($a >=0 && $b >=0) { $c=$a-$b;} 
				elseif ($a <0 && $b <0) { $c=$a*$b;} 
				elseif (($a >=0 && $b <0) || ($a <0 && $b >=0)) { $c=$a+$b;} 
				echo 'Результат='.$c.'<br><br>';
				
				echo "2.Присвоить переменной $а значение в промежутке [0..15]. <br>
				С помощью оператора switch организовать вывод чисел от $a до 15.:<br>";
	
				echo 'Вариант со switch =';
				$a=4;
				switch ($a) {
					case '0':
				 		echo '0;&nbsp';
					case '1':
				 		echo '1;&nbsp';
					case '2':
				 		echo '2;&nbsp';
				 	case '3':
				 		echo '3;&nbsp';				 						 	
					case '4':
				 		echo '4;&nbsp';
					case '5':
				 		echo '5;&nbsp';
					case '6':
				 		echo '6;&nbsp';
				 	case '7':
				 		echo '7;&nbsp';	
					case '8':
				 		echo '8;&nbsp';
					case '9':
				 		echo '9;&nbsp';
					case '10':
				 		echo '10;&nbsp';
				 	case '11':
				 		echo '11;&nbsp';
					case '12':
				 		echo '12;&nbsp';
					case '13':
				 		echo '13;&nbsp';
				 	case '14':
				 		echo '14;&nbsp';				 						 	
				 	case '15':
				 		echo 'Закончили<br><br>';
				 		break;
				 	
				 	default:
				 		break;			 		
				}

				echo 'Вариант с do..while =';
				$a=4;
				do {
					Echo $a.';&nbsp';
					$a++;
				} while ($a<=15); echo 'Закончили<br><br>';

				$a=2;
				
   				for ($i = $a; $i++<15;) echo $i.'-';
   				echo 'Вариант с for<br><br>';	
   				

				echo "3.Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
				<br>  Обязательно использовать оператор return:<br>";
				$a=8;
				$b=2;

				function sum($a,$b){
					$c=$a+$b;
					return $c;
				}				
				function minus($a,$b){
					$c=$a-$b;
					return $c;
				}
				function ymnoj($a,$b){
					$c=$a*$b;
					return $c;
				}
				function delit($a,$b){
					$c=$a/$b;
					return $c;
				}
				echo sum($a,$b).';&nbsp';
				echo minus($a,$b).';&nbsp';
				echo ymnoj($a,$b).';&nbsp';
				echo delit($a,$b).';&nbsp<br><br>';

				echo "4.Реализовать функцию с тремя параметрами: function mathOperation($ arg1, $ arg2, $ operation), где 
				$ arg1, $ arg2 – значения аргументов, $ operation – строка с названием операции. 
				<br> В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch):<br>";
				
				$a=12;
				$b=23;
				$g='ymnoj';

				function mathOperation($arg1, $arg2, $operation)
				{
					switch ($operation) {
						case 'sum':
							return sum($arg1,$arg2);
							break;
						case 'minus':
							return minus($arg1,$arg2);
							break;
						case 'ymnoj':
							return ymnoj($arg1,$arg2);
							break;
						case 'delit':
							return delit($arg1,$arg2);
							break;						
						default:
							break;
					}

					return false;
				}

				echo mathOperation($a,$b,$g).'<br><br>';
				
				echo "5.Посмотреть на встроенные функции PHP.<br> Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.:<br>";
				echo $year=date('Y').'&nbsp смотри футер))<br><br>';

				echo "6.*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($ val, $ pow), где $ val – заданное число, $ pow – степень:<br>";

				$a=2;
				$b=5;				
				
				function power($val, $pow)
				{
					if($pow == 0){
 						   return 1;
 					}
 					else if($pow < 0){
 					  return power( 1/$val, -$pow);
 					}
 					return $val * power($val, $pow-1); 
				}

				function power2($val, $pow)
				{
					$c=$val**$pow;
					return $c; 
				}

				echo power($a,$b).';&nbsp требуемый вариант  :)<br>';
				echo power2($a,$b).';&nbsp вариант с **  :)<br>';
				echo pow($a, $b).';&nbspвстроенный php=вариант :)<br>';

				echo "7.*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>";

				function plural_form($number,$after) {
				  $cases = array(2,0,1,1,1,2);
				  echo $before[($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)]].' '.$number.' '.$after[($number%100				>4 && $number%100<20)? 2: $cases[min($number%10, 5)]];
				}

				function timeNOW()
				{
										
					$ch=plural_form(
						 $time1=date(' H ',time()),
						  /* варианты написания для количества 1, 2 и 5 */
						  array('час','часа','часов')
					);

					$minyt=plural_form(
						 $time2=date(' i ',time()),
						  /* варианты написания для количества 1, 2 и 5 */
						  array('минута','минуты','минут')
					);	

					return;
				}
				echo timeNOW().'&nbsp <-------смотри часики))<br><br>';

				echo "8.*Фибанначи:<br>";

								
				
				function fibonacci($n,$prev1=1,$prev2=-1)
				{
					
					$current=$prev1+$prev2;
					echo "$current ";
						if($n >= 1){
 							   fibonacci($n-1, $current, $prev1);
 						} 	
 						
				}
				echo fibonacci(6).'-возвращает число ф...';
							
			?>
		</span>
</div>
<div class="dz">

		<span class="Lorem_ipsum_dolor_sit_amet">
			Домашнее задание 1 <br>
			<?php 
			$a=1;
			$b=2;
			echo 'Была $a='.$a.'<br>';
			echo 'Была $b='.$b.'<br>';

			echo '<hr>';
			$a+=+$b-$b=$a;

			echo 'Стала $a='.$a.'<br>';
			echo 'Стала $b='.$b.'<br>';
			?>
		</span>
</div>
<!---- Домашнее задание КОНЕЦ--->
<!---- Слайдер НАЧАЛО--->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/index/slider.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/index/slider.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/index/slider.png" alt="Third slide">
    </div>
  </div>
 
</div>

<div class="containerS">
	<div class="container vcaf">
		
		 <div class="col mr-4">
		 	<div class="row mb-4">
		 		<img src="./img/index/hdfm.png" alt="hdfm">
		 	</div>
		 	<div class="row">
		 		<img src="./img/index/lta.png" alt="lta">
		 	</div>				 		
		 </div>
	
		
		 <div class="col">
		 	<div class="row mb-4">
		 		<img src="./img/index/hdfw.png" alt="hdfw">
		 	</div>
		 	<div class="row" >
		 		<img src="./img/index/nafk.png" alt="hdfm">
		 	</div>				 		
		 </div>				
										 
  	</div> 

<!---- Слайдер КОНЕЦ--->
				
					
	<div class="Lorem">
		<span class="Lorem_ipsum_dolor_sit_amet">
			fetured items
		</span><br>
		<span class="Sed">
			Shop for items based on what we featured in this week
		</span>
	</div>
					 
	 <div class="container vcaf">
		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr1.png" alt="pr1" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>
		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr2.png" alt="pr2" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>

		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr3.png" alt="pr3" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>

		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr4.png" alt="pr4" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>


	</div>	
<!--второй ряд-->
		<div class="container vcaf">
		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr5.png" alt="pr5" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>
		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr6.png" alt="pr6" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>

		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr7.png" alt="pr7" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>

		<div class="row">
		 
		  	<div class="col">
		    	<div class="row-sm">
		    		<div class="image_plus">
		    			<img src="./img/prod/pr8.png" alt="pr8" class="prodv">
		    			
		    				<button type="button" class="btn5">
		    					<span class="h2_text">
		    						<img src="./img/prod/cartb.png" alt="cartb">
		    						Add to Cart
		    					</span>
		    				
		    				</button>
					</div>
		    	</div>
		    	<div class="row-sm mt-2 mb-2">
		    		<span class="Mango">Mango People T-shirt</span>
		    	</div>
		    	<div class="row-sm">
		    		<div class="col flexP  pl-0 pr-3">
		    			<div>
		    				<span class="prod_price">52.00$</span>
		    			</div>
		    		
					
		    			<div class="hide_zvevda">
  			  			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			<span class="zvezda3">&#9733;</span>
		    			</div>
		    		</div>
		 		</div>
			</div>
						
		</div>


	</div>		
			
	<div class="Lorem">
		<button type="button" class="btn btn-default dalee" data-toggle="dropdown"><span class="mydal">Brose all product </span> <span class="myacc">&#8594;</span></button>
	</div>

		<div class="cae"><img  src="./img/index/feature.png" alt="First slide"></div>
		    
		 



<div class="niz">
<img  class="nizcit" src="./img/index/more.png" alt="more">


<div id="flexHN"><!---Первая строка-->
	<div class="n1"> <!--- Левая часть верхней строки-->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  			
						 <div class="carousel-inner">
						   <div class="carousel-item active">
						     	<div class="floatl">
						     		<img class="logos" src="./img/index/lico.png" alt="First slide">
						     	</div>
						    		<div class="citcit"> 
						    			<span class="vest"> “Vestibulum quis porttitor dui! Quisque viverra nunc mi, 
											a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</span>
											<br>
											<br><span class="bin">Bir Burhan</span>
											<br><span class="vest2">Dhaka, Bd</span>

									</div>
						   </div>
						   <div class="carousel-item">
						     	<div class="floatl">
						     		<img class="logos" src="./img/index/lico.png" alt="slide 2">
						     	</div>
						    		<div class="citcit"> 
						    			<span class="vest"> “Vestibulum quis porttitor dui! Quisque viverra nunc mi, 
											a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</span>
											<br>
											<br><span class="bin">Bir Burhan</span>
											<br><span class="vest2">Dhaka, Bd</span>

									</div>
						   </div><div class="carousel-item">
						     	<div class="floatl">
						     		<img class="logos" src="./img/index/lico.png" alt="slide 3">
						     	</div>
						    		<div class="citcit"> 
						    			<span class="vest"> “Vestibulum quis porttitor dui! Quisque viverra nunc mi, 
											a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</span>
											<br>
											<br><span class="bin">Bir Burhan</span>
											<br><span class="vest2">Dhaka, Bd</span>

									</div>
						   </div>
						 </div>
						 <br>
						<ol class="carousel-indicators">
						   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						 </ol>
					</div>
    </div>
    <div class="n1">
		<div class="citcit2"> 
			<span class="vest3"> Subscribe</span>
			<br>
			<span class="vest4"> FOR OUR NEWLETTER AND PROMOTION</span>
		</div>
		<form class="form-inline2">
 				<div class="input-group mb-2 mr-sm-2">
 				 
 				  <input type="text" class="form-control2" id="inlineFormInputGroupUsername2" placeholder="Enter Your Email">
 				  <button type="button" class="btn-default account2" data-toggle="dropdown"><span class="myacc">Subscribe</span></button>
					
 				</div>
					
		</form>
    </div>
 </div>
 
</div>
			





<div class="container vcaf ot100">
		<div class="row  w50">
		 
		  	<div class="col w100">
		    	<div class="row-sm">
					<img src="./img/index/logo.png" alt="logo" class="logo">
					<span class="h1">bran<span class="lastD">d</span></span>
		    	</div>
		    	<div class="row-sm">
		    		<span class="objectively"><br><br><br><br>
Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships. 
					</span>

		    	</div>
		    	<div class="row-sm">
		    		<br>
		    		<span class="objectively">
Efficiently plagiarize 24/365 action items and focused infomediaries.
Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.
		    		</span>
		    	</div>
		    </div>	
						
		</div>
		<div class="row bflex mt-4">
			<div class="col w100">
				<span class="lastD4">Company</span>
			</div>
				<div class="col w100">
        <br><br>
				<ul class="subnav">

        			<li><a class="dropdown-item" href="#WDresses">Home</a></li>
	        		<li><a class="dropdown-item" href="#WTops">Shop</a></li>
	        		<li><a class="dropdown-item" href="#WSweaters">About</a></li>
        			<li><a class="dropdown-item" href="#WJackets">How It Works</a></li>
        			<li><a class="dropdown-item" href="#WBlazers">Contact</a></li>
        		
        		</ul>
        		</div>
		</div>
		<div class="row bflex mt-4">
			<span class="lastD4">information</span>
			<div class="col w100">
      	<br><br>
				<ul class="subnav">

        			<li><a class="dropdown-item" href="#WDresses">Tearms & Condition</a></li>
	        		<li><a class="dropdown-item" href="#WTops">Privacy Policyp</a></li>
	        		<li><a class="dropdown-item" href="#WSweaters">How to Buy</a></li>
        			<li><a class="dropdown-item" href="#WJackets">How to Sell</a></li>
        			<li><a class="dropdown-item" href="#WBlazers">Promotion</a></li>
        		
        		</ul>
        		</div>
		</div>
		<div class="row bflex mt-4">
			<span class="lastD4">shop category</span>
			<div class="col w100">
      <br><br>
				<ul class="subnav">

        			<li><a class="dropdown-item" href="#WDresses">Men</a></li>
	        		<li><a class="dropdown-item" href="#WTops">Women</a></li>
	        		<li><a class="dropdown-item" href="#WSweaters">Child</a></li>
        			<li><a class="dropdown-item" href="#WJackets">Apparel</a></li>
        			<li><a class="dropdown-item" href="#WBlazers">Browse All</a></li>
        		
        		</ul>
        		</div>
		</div>
	


</div>	

		<footer>
			<p>&#169; <?php echo $year; ?> -Brand All Rights Reserved</p>
			<div id="soc">
				<img src="./img/index/fs.png" alt="logo" class="logoR">
				<img src="./img/index/twiter.png" alt="logo" class="logoR">
				<img src="./img/index/in.png" alt="logo" class="logoR">
				<img src="./img/index/pp.png" alt="logo" class="logoR">
				<img src="./img/index/gplus.png" alt="logo" class="logoR">
				
			</div>
		</footer>

	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
<?php ?>
</html>