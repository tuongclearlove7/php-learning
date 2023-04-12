<?php

    require('./people.php');
 

?>
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
                <h2>Mô tả quốc gia</h2>
                 <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="country">
                        <option selected>Nation</option>
                        <option value="1">Việt nam</option>
                        <option value="2">nhật bản</option>
                        <option value="3">hàn quốc</option>
                        <option value="4">Mỹ</option>
                        <option value="5">Trung quốc</option>
                        <option value="6">nga</option>
                    </select>
                 </div>
                          
                <button type="submit" class="btn btn-primary">chọn</button>
            </form>

        </div>
        <div class="nation-block"><?php echo $res?></div>



        </main>
        <footer>

        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>