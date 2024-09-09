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
     //baitap/59 1,4,5
    
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
 // in_so_lon_nhat_sua_bai($a=7,$b=10,$c=5);
 //bai1. nhap so n >= 0
        function bai_1($a){
            if($a>=0){
                sqrt($a);
                echo $a." la can bac 2 cua".sqrt($a);
            }
            else{
                echo " so nay ko phai la so duong";
            }
        }
        bai_1($a=36);
        //bai4.nhap n, ktra n la so chan hay so le.
      function bai_4($a){
        if($a%2==0)
        echo $a." la so chan";
    else{
        echo $a." la so le";
    }
      }
      bai_4($a=36);
      function bai_5($a,$b){
        if($a*$b>=1)
            echo "a va b cung dau";
      
        else{
          echo  "a va b khac dau";
      }
    }
    bai_5($a=12,$b=-7);
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