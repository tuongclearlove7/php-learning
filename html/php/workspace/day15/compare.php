
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
            //import file
            include("./function.php");
            require("./function.php");
            //require("./test/test.php");

            $a = 10;
            $b = 20;

            //if else
            if($a >= $b) {

                echo "so a lon hon hoac bang so b <br>"; 

            }else{

                echo "so a nho hon so b <br>";
            }

            //isset function
            if(isset($c)){

                echo "\nso c da ton tai <br>";

            }else{
                echo "\nso c chua ton tan <br>";

            }

            //empty function
            if(empty($c)){

                echo "\nso c chua ton tai <br>";

            }else{
                echo "\nso c da ton tan <br>";

            }

            //logical operator

            $tmp = true;
            $result = !$tmp;
            var_dump($result);
            echo "$result <br>";

            //array
            $arr = ["string","1234",123,];

            var_dump($arr);

            echo "<pre>";
            print_r($arr);

        ?>

        </h3>
        
        </main>


<footer>

</footer>

</div>


</body>
</html>