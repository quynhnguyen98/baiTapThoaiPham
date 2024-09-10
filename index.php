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
 //bai1. nhap so n. tinh va xuat can bac 2 cua n.
    function bai_1($a){
        if($a>=0){
            sqrt($a);
            echo $a." la can bac 2 cua ".sqrt($a);
        }else{
            echo " so nay ko phai la so duong";
        }
    }
        
    //bai_1($a=-1);

    //bai4.nhap n, ktra n la so chan hay so le.
    function bai_4($a){
        if($a%2==0)
            echo $a." la so chan";
        else
            echo $a." la so le";
    }
      
    //bai_4($a=0);

    //bai5: nhap 2 so a va b, kiem tra xem cung dau hay khac dau.
    function bai_5($a,$b){
        if($a*$b>=1)
            echo "a va b cung dau";
        else
            echo  "a va b khac dau"; 
    }
    
    //bai_5($a=7,$b=-7);

    //dùng vòng lặp for vẽ tam giác
    function bai_ve_tam_giac($a){
        for( $i=1;$i<=$a;$i++){
            for( $n=1;$n<=$i;$n++){
                echo "*";
            }
            echo "<br>";
        }
    }
    
    //bai_ve_tam_giac($a=5);

    //ve hinh vuong bang vong lap for.
    function ve_hinh_vuong($a){
        for($i = 0; $i < $a ;$i++){
            for($n = 0; $n < $a;$n++){
                echo "*";
            }
           echo "<br>";
        }
    }

    //ve_hinh_vuong($a=3);

    //bang cuu chuong
    function bang_cuu_chuong($a){
        echo "bảng cửu chương<br> ";
        if($a>=1){
            for($i=1;$i<=10;$i++){
                echo $a." x ".$i." = ".$a*$i;
                echo "<br>";
            }
        }else{
            echo "số bạn nhập không hợp lệ.";
        }       
    }

    bang_cuu_chuong($a=-5);
    
    function bai_ve_tam_giac_1($a){
        for( $i=$a;$i>=1;$i--){
            for( $n=$i;$n>=1;$n--){
                echo "*";
            }
            echo "<br>";
        }
    }
    //
    //bai_ve_tam_giac_1($a=5);
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