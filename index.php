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

    //function mang(){
        //hiển thị các phần tử từ trong mảng từ 1-20.
        //lấy phần từ có giá trị là 13.
        //$mang = array();
        // for($i = 1 ; $i <= 20 ; $i++){
        //     $mang[] = $i;
        // }
        //echo $mang[6];
        // foreach($mang as $key => $cac_gia_tri){
        //     echo $key;
        //     echo "<br>";
        // }
        // $mang[] = "a";
        // $mang[] = "b";
        // $mang[] = "c";
        // $mang[] = "d";
        // $mang[] = "e";
        // $mang[] = "f";
        // $mang[] = "g";
        // $mang[] = "h";
        // $mang[] = "i";
        // $mang[] = "k";
        // $mang[] = "l";
        // $mang[] = "m";
    //     echo $mang[6];
    // }
    // mang();

        //nhập n xuất dsach n học sinh.
        //vd: 1/hs1, 2/hs2.

        //lấy hs n-1

        //xuất dsach n phòng học.
        //vd: 1/ph1, 2/ph2...

      
                   // function xuat_dsach_hs(){
        //     $xuat_dsach_hs = array();
        //     $xuat_dsach_hs[] = "hs1";
        //     $xuat_dsach_hs[] = "hs2";
        //     $xuat_dsach_hs[] = "hs3";
        //     $xuat_dsach_hs[] = "hs4";
        //     $xuat_dsach_hs[] = "hs5";
        //     $xuat_dsach_hs[] = "hs6";
        //     $xuat_dsach_hs[] = "hs7";
        //     $xuat_dsach_hs[] = "hs8";
        //     $xuat_dsach_hs[] = "hs9";
        //     $xuat_dsach_hs[] = "hs10";
        // foreach ($xuat_dsach_hs as $key => $hs){
        //     echo ++$key.": ".$hs;
        //     echo "<br>";
        // }
        // }
        
        //xuat_dsach_hs();

         //lấy hs n-1
  
         //xuất dsach n phòng học.
        //vd: 1/ph1, 2/ph2...

        function lay_hs($a){
            $lay_hs = array();
            for($i = 1 ; $i <= $a ; $i++){
               $lay_hs[] = 1;
               echo $a-1;
               break;
            }
        }
          //lay_hs($a=6);

        //xuất dsach n phòng học.
        //vd: 1/ph1, 2/ph2...
    function xuat_ds_ph(){
        $xuat_ds_ph = array();
        $xuat_ds_ph[] = "ph1";
        $xuat_ds_ph[] = "ph2";
        $xuat_ds_ph[] = "ph3";
        $xuat_ds_ph[] = "ph4";
        $xuat_ds_ph[] = "ph5";
        $xuat_ds_ph[] = "ph6";
        $xuat_ds_ph[] = "ph7";
        $xuat_ds_ph[] = "ph8";
        foreach($xuat_ds_ph as $key => $dsach_ph){
            echo ++$key."/ ".$dsach_ph;
            echo "<br>";
        }
    }

        //xuat_ds_ph();

          //xuất dsach hs theo phòng học.
        //vd: ph1-hs1,ph2-hs2...
    function hoc_sinh(){
        $hoc_sinh = array();
        $hoc_sinh[] = "anh a";
        $hoc_sinh[] = "anh b";
        $hoc_sinh[] = "anh c";
        $hoc_sinh[] = "anh d";
        $hoc_sinh[] = "anh e";
        for($i = 1 ; $i <= 5 ; $i++){
            echo "";
             //echo "<br>";
        }
        foreach($hoc_sinh as $key => $hocsinh){
            echo "phong hoc"." ".++$key.": co  ".$hocsinh;
            echo "<br>";
        }
    }
    hoc_sinh();
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