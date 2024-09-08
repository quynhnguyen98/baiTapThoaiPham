<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <?php 
    function in_so_thu_tu($a=0){
        for($i = $a; $i<10; $i++){
            echo $i ."<br>";
          }
    }
    
    
  //  in_so_thu_tu($a=7);
  function in_so_lon_nhat($a,$b,$c){
    if($a>$b && $a>$c)
        echo $a."la so lon nhat";
   else if($b>$a && $b>$c)
        echo $b."la so lon nhat";
   else if($c>$a && $c>$b)
        echo $c."la so lon nhat";
  }
//   in_so_lon_nhat($a=7,$b=10,$c=5);
      
function in_so_lon_nhat_sua_bai($a,$b,$c){
    $max=0;
    if($a>$b && $a>$c)
        $max = $a;
   else if($b>$a && $b>$c)
        $max = $b;
   else
        $max = $c;
    echo $max." la so lon nhat";
  }
  in_so_lon_nhat_sua_bai($a=7,$b=10,$c=5);
      ?>
    <table>
        <tr>
            <th class="cong-ty">Công Ty</th>
            <th class="dia-chi">Địa chỉ</th>
            <th class="thanh-pho">Thành phố</th>
        </tr>
        <tr>
            <td>Công ty a</td>
            <td>Biên Hòa</td>
            <td>Đông Nai</td>
        </tr>
        <tr>
            <td><img src="asset/images/anhquynh.jpg" alt="anh quỳnh ghgjhgjh"></td>
            <td>chú rể mặc vét đen</td>
            <td>Nguyễn Mạnh Quỳnh</td>
        </tr>
    </table>

</body>

</html>