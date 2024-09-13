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

    //bang_cuu_chuong($a=-5);
    
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

    function bang_cuu_chuong_2_den_10($a){
       
        if($a<=10 && $a >=1){
            for($i=1;$i<=10;$i++){
                //echo "<br>";
                for($n=1;$n<=$a;$n++){
                    echo $n." X ".$i." = ".$n*$i;
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                echo "<br>";
            }
        }else{
            echo "so khong hop le.";
        
        }
    }
    
    //bang_cuu_chuong_2_den_10($a=10);

    function mang(){
        // hiển thị các phần tử từ trong mảng từ 1-20.
        // lấy phần từ có giá trị là 13.
        $mang = array();
        for($i = 1 ; $i <= 20 ; $i++){
            $mang[] = $i;
        }
        echo $mang[6];
        foreach($mang as $key => $cac_gia_tri){
            echo $key;
            echo "<br>";
        }
        $mang[] = "a";
        $mang[] = "b";
        $mang[] = "c";
        $mang[] = "d";
        $mang[] = "e";
        $mang[] = "f";
        $mang[] = "g";
        $mang[] = "h";
        $mang[] = "i";
        $mang[] = "k";
        $mang[] = "l";
        $mang[] = "m";
        echo $mang[6];
    }
    // mang();

        //bai1: nhập n xuất dsach n học sinh.
        //vd: 1/hs1, 2/hs2.
    function xuat_dsach_hs($a){
        $xuat_dsach_hs = array();
        for($i = 1 ; $i <= $a ; $i++){
            $xuat_dsach_hs[] = "hoc sinh" ; 
        }
        foreach($xuat_dsach_hs as $key => $hoc_sinh){
            echo ++$key."/ ".$hoc_sinh;
            echo "<br>";
        }
    }
    //xuat_dsach_hs($a=7);

        //bai2: lấy hs n-1
    function lay_hs_ntru1($a){
       $lay_hs_ntru1 = array($a);
        for($i = 1 ; $i <= 10 ; $i++){
            $lay_hs_ntru1[] = "hoc sinh"." ".$i;     
        }
        if($a > 0 && $a <= 10){
            $hocsinh = $lay_hs_ntru1[$a-1];
            echo $hocsinh;
        }
        else{
            echo "so ko hop le.";
        }
        // foreach($lay_hs_ntru1 as $key => $hocsinh){
        //     echo $hocsinh;
        //     echo "<br>";
        // }
       }
       
    //lay_hs_ntru1($a=6);
    
        //bai3: xuất dsach n phòng học.
        //vd: 1/ph1, 2/ph2...
    
    function xuat_dsach_nph($a){
        $xuat_dsach_nph = array();
        for($i = 1 ; $i <= $a; $i++){
            $xuat_dsach_nph[]= "ph ".$i;
        }
        foreach($xuat_dsach_nph as $key => $ph){
            echo ++$key."/ ".$ph;
            echo "<br>";
        }
    }

    //xuat_dsach_nph($a=6);
         
       //bai4: xuat dsach hs theo ph
       //vd: hs1-ph1
    function xuat_dsach_hs_theo_ph(){
        $xuat_dsach_hs_theo_ph = array();
        for($i = 1; $i <= 10 ; $i++){
            $xuat_dsach_hs_theo_ph[] =  "hs".$i." - "." ph ".$i;
        } 
        foreach($xuat_dsach_hs_theo_ph as $key => $hsph){
            echo $hsph;
            echo  "<br>";
        }
    }
    xuat_dsach_hs_theo_ph();
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