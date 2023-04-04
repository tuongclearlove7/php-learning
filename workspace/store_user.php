<?php
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style2.css">
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


            <p>first name :  <?php echo$first_name;?></p>
            <p>last name : <?php echo$last_name?></p>

        </main>


        <footer>

        </footer>

    </div>

   
    
</body>
</html>