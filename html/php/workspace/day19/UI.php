<?php require("./array.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                
        <div class="form-user">
            <form action="" method="post" class="">

                <select class="form-select" aria-label="Default select example" name="choose">
                    <option selected>Open this select menu</option>
                    <option value="1">in mảng</option>
                    <option value="2">tìm kiếm phần tử</option>
                    <option value="3">tìm max</option>
                    <option value="4">tính tổng</option>
                    <option value="5">sắp xếp mảng</option>
                    <option value="6">hoc</option>

                </select>
                <button style="margin-top: 20px;" type="submit" name="submit" class="btn btn-primary">Submit</button>
                <div class="res"><p><?php echo $res; print_r($array);?></p></div>
            </form>
    
        </div>
        </main>
        <footer>

        </footer>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>