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

        <form action="store_user.php" method="post">

            <label for="">first name : </label>
            <input type="text" name="first_name" value = "tuong"><br>
            <label for="">last name : </label>
            <input type="text" name="last_name"  value = "tran"><br>
            <label for="">&nbsp;</label>
            <input type="submit" value="submit"><br>
        </form>

        <form action="../day15/handle.php" method="post">

            <label for="">a : </label>
            <input type="text" name="a" value = "1"><br>
            <label for="">b : </label>
            <input type="text" name="b"  value = "2"><br>
            <label for="">&nbsp;</label>
            <input type="submit" value="submit"><br>
        </form>


        <form action="store_user.php" method="get">

            <label for="">first name : </label>
            <input type="text" name="first_name" value = "tuong"><br>
            <label for="">last name : </label>
            <input type="text" name="last_name"  value = "tran"><br>
            <label for="">&nbsp;</label>
            <input type="submit" value="submit"><br>
        </form>

    </main>


    <footer>

    </footer>

</div>


</body>
</html>