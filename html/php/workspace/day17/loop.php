<?php

    require('./result.php');
    require('./tam_giac.php');
    require('./ban_co_vua.php');

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
            <form action="loop.php" method="post" class="">
                <h2>Vòng lặp</h2>
                 <div class="mb-3">
                    <input type="text" name="n" class="form-control" id="exampleInputEmail1" placeholder="nhập số n">
                </div>
                <!--                    
                <div class="mb-3">
                    <input type="text" name="col" class="form-control" id="exampleInputEmail1" placeholder="nhập cột">
                </div>
                <div class="mb-3">
                    <input type="text" name="row" class="form-control" id="exampleInputEmail1" placeholder="nhập hàng">
                </div> -->
               
              
                <button type="submit" name="submit" class="btn btn-primary">Tính tổng</button>
            </form>

            <div class="res">
                <p><?php echo$result;?></p>
                <p><?php echo$res;?></p>
                
            </div>
            <table>
                <?php echo$res2;?>
            </table>
            
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














































