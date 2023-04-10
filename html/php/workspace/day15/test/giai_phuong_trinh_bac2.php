<?php 
                      
    if(isset($_GET["calc"])){

        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
    
        if($a == null || $b == null || $c == null){
            $message = "vui lòng nhập vào";
        }else{
            if($a == 0)
                $message = "he so a phai khac 0";
            else{
                 $message ="todo <br>";
                $delta=pow($b,2) - 4*$a*$c;
                if($delta<0){
                     $message ="todo <br>";
                    $res = 'Phương trình vô nghiệm';
                }
                else if($delta==0){
                     $message ="todo <br>";
                    $x0 = -$b/(2*$a);
                    $res = 'Phương trình có nghiệm kép x1 = x2 = '.$x0;
                }
                else{
                    $message ="todo <br>";
                    $x1 = (-$b + sqrt($delta))/(2*$a);
                    $x2 = (-$b - sqrt($delta))/(2*$a);
                    $res = "Phương trình có 2 nghiệm phân biệt <br> x1 = $x1, x2 = $x2";
                
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
                    <img src="../../image/php1.png" alt="">
                </div>

            </header>
        
        <main>

        <div class="form-user">
            <form action="giai_phuong_trinh_bac2.php" method="get">
                <h2>Giải phương trình bậc 2</h2>
                <div class="mb-3">
                    <input type="text" name="a" class="form-control" id="exampleInputEmail1" placeholder="nhập số a">
                </div>
                <div class="mb-3">
                    <input type="text" name="b" class="form-control" id="exampleInputPassword1" placeholder="nhập số b">
                </div>
                <div class="mb-3">
                    <input type="text" name="c" class="form-control" id="exampleInputPassword1" placeholder="nhập số c">
                </div>
               
                <button type="submit" name="calc" class="btn btn-primary">CALC</button>
            </form>
        </div>

        <div class="result">
            <h3>
               <?php 
                    if(isset($message))
                        echo $message;
                    if(isset($res))
                        echo $res;
               ?>
        
            </h3>
        </div>

        </main>
        
    <footer>

    </footer>

    </div>

</body>
</html>