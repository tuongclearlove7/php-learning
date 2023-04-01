<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP learning</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<div class="container">

		<header>
			<div class="logo">
				<h1>
					php learning
				</h1>
			</div>
			
			<div class="banner">
				<img src="./image/php1.png" alt="">
			</div>

		</header>

		<main>

			<?php
				$message =  "<h2>Thông tin học viên</h2>";
				$name = "Trần Thế Tường";
				$birthday = "16/1/2002";
				$class = "PH48";
				$m1 = 1;//he so 1
				$m2 = 2;
				$m3 = 3;
				$m4 = 4;
				$m5 = 5;
				$img = "./image/user2.png";
				$ave = ($m1*2+$m2*2+$m3*3+$m4*4+$m5*5)/12;
				$result = "mon 1 : $m1 , mon 2 : $m2, mon 3 : $m3, mon 4 : $m4, mon 5 : $m5, diem tb : $ave";
				$a = 2002;
				$b = 2003;	
					
				if(isset($_GET['name']) && isset($_GET['birthday']) && isset($_GET['class'])){
					$name = $_GET['name'];
					$birthday = $_GET['birthday'];
					$class = $_GET['class'];
						
				}		

				if(isset($_GET['a']) && isset($_GET['b'])){
					$a = $_GET['a'];
					$b = $_GET['b'];
				}
			?>

			<h2><?php echo $message;// in message?></h2>

			<div class="img">
				<img src="<?php echo $img;// in image?>" alt="">
				
			</div>

			<div class="infomation">
			    <a href="?name=Tường Trần&birthday=<?php echo $birthday?>&class=PH38">bấm vào để lấy tên</a>
				<p>Name : <?php echo $name; ?></p>
				<p>Birthday : <?php echo $birthday; ?></p>
				<p>Class : <?php echo $class; ?></p>
			</div>

			<div class="point">
				<h3>result : <?php echo $result; ?></h3>
			</div>

			<div class="var">
				
				<h2>
					<a href="?<?php   $c = $a; $a = $b; $b = $c; echo "a=$a&b=$b";?>">bấm vào để lấy kết quả</a>
					<p>a = <?php echo $a;?></p>
					<p>b = <?php echo $b;?></p>
				</h2>
				
			</div>

		</main>
		
		<footer>

		</footer>
	

	</div>
	
</body>
</html>
