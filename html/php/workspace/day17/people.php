<?php
    $res = "";

    if(isset($_POST['country'])){
        $country = $_POST['country'];
        switch($country){

            case'1':
                    $res.= "<h2>Việt Nam</h2><br><img src='../image/vietnam.png' alt='người việt nam'> <br>
                        <p>Việt Nam, quốc hiệu là Cộng hòa Xã hội chủ nghĩa Việt Nam, là một quốc gia nằm ở cực Đông của bán đảo Đông Dương thuộc khu vực Đông Nam Á, giáp với Lào, Campuchia, Trung Quốc, biển Đông và vịnh Thái Lan. Lãnh thổ Việt Nam xuất hiện con người sinh sống từ thời đại đồ đá cũ, khởi đầu với các nhà nước Văn Lang, Âu Lạc.</p>
                    ";
            break;
            case'2':
                    $res.= "<h2>Nhật Bản</h2><br><img src='../image/japan.jpg' alt='người nhật'> <br>
                    <p>Nhật Bản, trong khẩu ngữ thường được gọi tắt là Nhật, tên đầy đủ là Nhật Bản Quốc, là một quốc gia và đảo quốc có chủ quyền nằm ở khu vực Đông Á.</p>

                    ";
            break;
            case'3':
                    $res.= "<h2>Hàn Quốc</h2><br><img src='../image/korea.png' alt='người hàn quốc'> <br>
                    <p>Hàn Quốc, tên gọi đầy đủ là Đại Hàn Dân Quốc, là một quốc gia ở Đông Á; cấu thành nửa phía nam của bán đảo Triều Tiên và có chung đường biên giới trên bộ ở phía bắc với Cộng hòa Dân chủ Nhân dân Triều Tiên. Phía tây là biển Hoàng Hải, phía nam là biển Hoa Đông còn phía đông là biển Nhật Bản. Wikipedia
                    </p>
                    ";

            break;
            case'4':
                $res.= "<h2>Việt Nam</h2><br><img src='../image/vietnam.png' alt='người việt nam'> <br>

                ";

            break;
            case'5':
                $res.= "<h2>Việt Nam</h2><br><img src='../image/vietnam.png' alt='người việt nam'> <br
                
                ";
            break;
            case'6':
                $res.= "<h2>Việt Nam</h2><br><img src='../image/vietnam.png' alt='người việt nam'> <br>";

            break;
        }
    }
   

?>
