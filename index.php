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
<!--- Домащнее задание третье--->
<div class="dz3">

		<span class="Browse">
			Домашнее задание 3 <br>
			<?php 
				echo "1.С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка:<br><br>";
				$a = 0;
				$n=100;
				while ($a < $n) {
				   if ($a % 3 == 0) {
				       echo $a.PHP_EOL;
				   }
				   $a++;
				}
				
				echo "<br><br>2.С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br><br>";
				$numb = 0;
				do {
				    if ($numb == 0) {
				        echo "$numb - это ноль$nbsp";
				    } elseif ($numb % 2 == 0) {
				        echo "$numb - четное число$nbsp";
				    } else {
				        echo "$numb - нечетное число $nbsp";
				    }
				    $numb++;
					} while ($numb <= 10);
				
				echo "<br><br>3.Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:<br><br>";
					
					$regions = [
					    'Новосибирская область' => [
					        'Новосибирск',
					        'Барабинск',
					        'Бердск',
					        'Болотное',
					        'Искитим',
					        'Карасук',
					        'Каргат',
					        'Куйбышев',
					        'Купино',
					        'Обь',
					        'Татарск',
					        'Тогучин',
					        'Черепаново',
					        'Чулым'					        
					    ],
					    'Омская область' => [
					        'Омск',
					        'Исилькуль',
					        'Калачинск',
					        'Называевск',
					        'Тара',
					        'Тюкалинск',
					    ],
					    'Тюменская область' => [
					        'Тюмень',
					        'Заводоуковск',
					        'Ишим',
					        'Тобольск',
					        'Тюмень',
					        'Ялуторовск'
					    ],
					];
					foreach ($regions as $region=>$cities) {					 					   
					    echo $region.':'.'<br>';
					    $count = count($cities);
					    foreach ($cities as $key => $city) {
					        echo $city;
					        if ($key != $count - 1) {
					            echo ', ';
					        } else {
					            echo '.'.'<br>';
					        }
					    }
					}
				echo "<br><br>4.Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’):<br><br>";
				
				function translit($string, $dir = 'rus') {
				    $rus = [
			        'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
			        'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
			    			];
			    	$eng = [
			        'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
			        'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P','R','S','T','U','F','H','Ts','Ch','Sh','Sch','A','I','Y','e','Yu','Ya'
			    			];
			    		switch ($dir) {
			        	case 'rus':
			        	    return str_replace($rus, $eng, $string);
			        	case 'eng':
			        	    return str_replace($eng, $rus, $string);
			    		}
			    	return false;
				}
					echo(
						translit("Я не знаю что здесь написать", 'rus')
					);
					echo '<br>';
					echo(
						translit("london is the capital of Great Britan", 'eng')
					);

				echo "<br><br>5.Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку:<br><br>";
				function probelTocherta($string)
					{
					    return str_replace(' ', '_', $string);
					}
				echo(
					probelTocherta("Я ничего не понимаю в этой жизни")
				);

				echo "<br><br>6.В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.:<br><br>";
				$menu = [
				    [
				        'name' => 'Home',
				        'href' => '/',				        				        
				    ],
				    
				    [
				        'name' => 'Man',
				        'href' => '/Man.php',
				        'podmenu' => [
				        	[
				                'name' => 'Tees/Tank tops',
				                'href' => '/Tees_Tank tops.php',				                
				            ],
							[
				                'name' => 'Shirts/Polos',
				                'href' => '/Shirts_Polos.php',				                
				            ],
							[
				                'name' => 'Sweaters',
				                'href' => '/Sweaters.php',				                
				            ],
				            [
				                'name' => 'Sweatshirts/Hoodies',
				                'href' => '/Sweatshirts_Hoodies.php',				                
				            ],
				            [
				                'name' => 'Blazers',
				                'href' => '/Blazers.php',				                
				            ],
				            [
				                'name' => 'Jackets/vests',
				                'href' => '/Jackets_vests.php',				                
				            ],
				           
				        ],
				    ],
				    [
				        'name' => 'Woman',
				        'href' => '/Woman.php',
				        'podmenu' => [
				        	[
				                'name' => 'Dresses',
				                'href' => '/Dresses.php',				                
				            ],
							[
				                'name' => 'Tops',
				                'href' => '/Tops.php',				                
				            ],
							[
				                'name' => 'Sweaters/Knits',
				                'href' => '/Sweaters_Knits.php',				                
				            ],
				            [
				                'name' => 'Jackets/Coats',
				                'href' => '/Jackets_Coats.php',				                
				            ],
				            [
				                'name' => 'Blazers',
				                'href' => '/Blazers.php',				                
				            ],
				            [
				                'name' => 'Denim',
				                'href' => '/Denim.php',				                
				            ],
				            [
				                'name' => 'Leggings/Pants',
				                'href' => '/Leggings_Pants.php',				                
				            ],
				            [
				                'name' => 'Skirts/Shorts',
				                'href' => '/Skirts_Shorts.php',				                
				            ],
				            [
				                'name' => 'Accessories',
				                'href' => '/Accessories.php',				                
				            ],
				        ],
				    ],
				    [
				        'name' => 'Kids',
				        'href' => '/Kids.php',	
				    ],
				     [
				        'name' => 'accoseriese',
				        'href' => '/accoseriese.php',
				    ],
				     [
				        'name' => 'featured',
				        'href' => '/featured.php',
				    ],
				     [
				        'name' => 'hot deals',
				        'href' => '/hot_deals.php',	
				    ],
				 
				];


				?>
				<div class="containerDZ">	
					<nav class="navbarDZ navbar-expand-lg"">
						<ul class="navbar-nav mr-auto">
                	<?php
                		foreach ($menu as $i => $menuItem) {
                    		$attrs = [];
                    		if (array_key_exists('attrs', $menuItem)) {
                    		    $attrs = $menuItem['attrs'];
                    		}                                    
                    		$podmenu = [];
                    		if (isset($menuItem['podmenu'])) {
                    		    $podmenu = $menuItem['podmenu'];
                    		}
                    ?>
                    <li class="nav-item Home <?php if ($podmenu) { echo 'dropdown'; } ?>">
                        <a class="nav-link Home <?php if ($podmenu) {echo 'dropdown-toggle'; } ?>"
                        	
                        	href="<?= $menuItem['href'] ?? ''; ?>"
                        
                        	<?php 
                        	if ($podmenu) { echo 'id="dropdown'.$i.'" data-toggle="dropdown"';} 
                        	?>
                        >
                            <?php echo $menuItem['name']; ?>                           
                        </a>
                        <?php if ($podmenu){ ?>
                            <div class="dropdown-menu" aria-labelledby="<?php echo 'dropdown'.$i; ?>">
                                	<?php 
                                		foreach ($podmenu as $punkt) : 
                                	?>

                                <a class="dropdown-item" href="<?php echo $punkt['href']; ?>">
                            <?php echo $punkt['name'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php } ?>
                    </li>
                										<?php } ?>
            			</ul>				  	
	
					</nav>

				</div>

    			<?php 
    			echo "<br>*7.Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: for (…){ // здесь пусто}<br><br>";

    				for ($c = 0; $c < 10; print $c++) {
    				}

    			echo "<br>*8.Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К»<br><br>";	
				    foreach ($regions as $region=>$cities) {	
				    echo $region.':'.'<br>';
				    $CityK = [];
				    foreach ($cities as $i => $city) {
				        if (mb_substr($city, 0, 1) == 'К') {
				            $CityK[] = $city;
				        }
				    }
				    if (count($CityK)) {
				        echo implode(',', $CityK).'.'.PHP_EOL;
				    } else {
				        echo 'нет городов на букву К'.PHP_EOL;
				    }
				    echo '<br>';
					}	
				echo "<br>*9.Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах)<br><br>";

				function changeURL($string)
					{
					    return probelTocherta(translit($string, 'rus'));
					}

				echo(changeURL("Пожалуйста, посмотрите домашнее по заданному уроку"));


				    		
				?>
		</span>
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