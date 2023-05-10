
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style2.css">
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
				<img src="../image/php1.png" alt="">
			</div>

		</header>
    
    <main>

        <h3>
        <?php

            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $a + $b;
            echo $c;

            ?>

        </h3>
        
        </main>


<footer>

</footer>

</div>


</body>
</html>