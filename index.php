<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap</title>
    <link rel="stylesheet" href="asset/css/style.css">

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
    function dsach_hs($a){
        $dsach_hs = array();
        for($i = 1 ; $i <= $a ; $i++){
            $dsach_hs[] = "hoc sinh ".$i ; 
        }
        foreach($dsach_hs as $key => $hoc_sinh){
            echo $key."/ ".$hoc_sinh;
            echo "<br>";
        }
        return $dsach_hs ;
    }
    //dsach_hs($a=10);

        //bai2: lấy hs n-1
    function lay_hs_ntru1($a){
        $dsach_hs = dsach_hs($a);
        if($a > 0 && $a > $a-1){
            $hocsinh = $dsach_hs[$a-1];
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
       
    //lay_hs_ntru1($a=3);
    
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
        $xuat_thong_tin_hs5 = $xuat_dsach_hs_theo_ph[4];
        echo $xuat_thong_tin_hs;
    }
    //xuat_dsach_hs_theo_ph();

    
    // b1: tìm số lớn nhất trong mảng
function tim_so_lon_nhat(){
    $tim_so_lon_nhat = array(12,8,33,4);
    $max = 0;
    if(12 >= $max)
        $max = 12;
    if(44 >= $max)
        $max = 8;
    if(33 >= $max)
        $max = 33;
    if(4 >= $max)
        $max = 4;
    echo "so lon nhat la: ".$max;
    echo "<br>";
}

//tim_so_lon_nhat();

function fix_sap_xep_tang_dan($params = array()){
    // 5-9-12-24-32-41
    $n = count($params);
    
    for($i = 0 ; $i < $n - 1 ; $i++){
        for($j = 0; $j < $n - 1 - $i; $j++){
            if($params[$j] > $params[$j+1]){
                $temp = $params[$j];
                $params[$j] = $params[$j+1];
                $params[$j+1] = $temp;
            }
        }
    }
    
    foreach($params as $so){
        echo $so."\n";
    }
}
//fix_sap_xep_tang_dan(array(8,1,6,21,7,22));
    // b2: tìm số nhỏ nhất trong mảng
function tim_so_nho_nhat(){
    $tim_so_nho_nhat = array(44,4,1,33);
    $min = 100;
    if(44 <= $min)
    $min = 44;
    if(4 <= $min)
    $min = 4;
    if(1 <= $min)
    $min = 1;
    if(33 <= $min)
    $min = 33;
    echo "so nho nhat la: ".$min;
}

//tim_so_nho_nhat();

function fix_tim_so_lon_nhat($params = array()){
    $max = $params[0];
    for($i = 0 ; $i <= count($params)-1 ; $i++){
        if($max < $params[$i])
            $max = $params[$i];
    }
    echo $max;
}

//fix_tim_so_lon_nhat(array(2,5,2,6,22,66,22,99));

    //b3: xắp xếp mảng tăng dần
function mang_tang_dan(){
    $mang_tang_dan = array(2,5,1,7,4,8,3);
    //count dùng để đếm các phần tử có tron mảng.
    for($i = 0 ; $i < count($mang_tang_dan) ; $i++){
        for($n = 0 ; $n < count($mang_tang_dan) -1 -$i ; $n++){
            if ($mang_tang_dan[$n] > $mang_tang_dan[$n+1]){
                $hoandoi = $mang_tang_dan[$n];
                $mang_tang_dan[$n] = $mang_tang_dan[$n+1];
                $mang_tang_dan[$n+1] = $hoandoi;
            }
        }
    }
    foreach($mang_tang_dan as $doi){
        echo $doi." ";
    }
}

//mang_tang_dan();

    // b4: xắp xếp mảng giảm dần
function mang_giam_dan($params = array()){
    $n = count($params);
    for($i = 0 ; $i <= $n-1 ;$i++ ){
        for($a = 0 ; $a <= $n-1 -1 ; $a++){
            if($params[$a] < $params[$a+1]){
                $temp = $params[$a+1];
                $params[$a+1] = $params[$a];
                $params[$a] = $temp;
            }
        }
    }
    foreach($params as $xapxep){
        echo $xapxep." ";
        
    }
}

function fix_sap_xep_giam_dan($params = array()){
    // 5-9-12-24-32-41
    $n = count($params);
    
    for($i = 0 ; $i < $n - 1 ; $i++){
        for($j = 0; $j < $n - 1 - $i; $j++){
            if($params[$j] < $params[$j+1]){
                $temp = $params[$j];
                $params[$j] = $params[$j+1];
                $params[$j+1] = $temp;
            }
        }
    }
    
    foreach($params as $so){
        echo $so."\n";
    }
}

//fix_sap_xep_giam_dan(array(2,5,51,9,6,100,11,21,99));
//mang_giam_dan(array(2,5,51,9,6,100,11,21,99));

function mang_nho_nhat($params = array()){
    $min = $params[0];
    $n = count($params);
    for($i = 0 ; $i <= $n-1 ; $i++ ){
      if($min > $params[$i])
        $min = $params[$i];
    }
    echo $min;
}
//mang_nho_nhat(array(21,5,7,0,66,2,55));

//hằng 
define("TEN","Quynh");
//echo "toi ten la ".TEN;
echo "<br>";
define("PI","3.14");
//echo PI ;
/*
 b1: cho array them phan tu vao array co key la gioi tinh co gia tri la nam
 array(
    'name' => 'Nguyễn Tình A',
    'class'=> 'IT',
    'position' => 'BOSS'

b2: lay gia tri cua key name
     array(
    'name' => 'Nguyễn Tình A',
    'class'=> 'IT',
    'position' => 'BOSS'

b3: thay doi gia tri key cua name la nguyen van b
name' => 'Nguyễn Tình B',

b4: xuat het thong tin cua array

b5: cho array bat ky.tinh tong array
vd: array(1,2,3);
kq = 6

b6: cho array bat ky. in ds so chan va dem co bn phan tu chan .
vd: array(1,2,3,4,5);
kq: array(2,4);

b7: in ds so le.in ds so le va dem co bn phan tu le.
vd: array(1,2,3,4,5);
kq: 1,3,5
 */

// b1: cho array them phan tu vao array co key la gioi tinh co gia tri la nam
// array(
//    'name' => 'Nguyễn Tình A',
//    'class'=> 'IT',
//    'position' => 'BOSS'
function tao_arr(){
    $tao_arr = array("gioi_tinh" => "nam ","name"=>" Nguyễn Tình A","class" => " IT","position" => "boss" );
    foreach($tao_arr as $key => $value){
        echo $key.": ".$value;
        echo "<br>";
    }
}

function fix_tao_arr(){
    $tao_arr = array("name"=>" Nguyễn Tình A","class"=>" IT",10=>"boss","boss"=>2 );
    $tao_arr["ma_lop_hoc"] = 123;
    echo $tao_arr[10];
    $tao_arr[] = 3;
    $tao_arr["boss"] = 9;
    foreach($tao_arr as $key => $value){
        echo "{$key}=>{$value}<br>";
    }

    $tao_arr_moi = $tao_arr;
    $tao_arr_moi[11] = 4;
    $tao_arr_moi["ma_lop_hoc"] = 456;
    foreach($tao_arr_moi as $key => $value){
        echo "{$key}=>{$value}<br>";
    }
}

/*
2 => nguyen tinh a
3 => it
position = boss
4 => 2
5 => 1
msv => 12345
 */

//fix_tao_arr();
//tao_arr();

    // b2: lay gia tri cua key name
    //      array(
    //     'name' => 'Nguyễn Tình A',
    //     'class'=> 'IT',
    //     'position' => 'BOSS'
function arr(){
    $arr = array("gioi_tinh" => "nam ","name"=>" Nguyễn Tình A","class" => " IT","position" => "boss" );
   echo $arr["name"];
}

//arr();

    // b3: thay doi gia tri key cua name la nguyen van b
    // name' => 'Nguyễn Tình B',
function doi_gia_tri(){
    $doi_gia_tri = array("gioi_tinh" => "nam ","name"=>" Nguyễn Tình B","class" => " IT","position" => "boss" );
    foreach($doi_gia_tri as $value){
        echo $value."<br> ";
    }
}

//doi_gia_tri();


    // b4: xuat het thong tin cua array

function xuat_het_thong_tin(){
    $xuat_het_thong_tin = array("gioi_tinh" => "nam ","name"=>" Nguyễn Tình A","class" => " IT","position" => "boss" );
    foreach($xuat_het_thong_tin as $key => $value){
        echo $key.": ".$value;
        echo "<br>";
    }
}
//xuat_het_thong_tin();

    // b5: cho array bat ky.tinh tong array
    // vd: array(1,2,3);
    // kq = 6
function tinh_tong_arr($params = array()){
    $tong = 0 ;
    foreach($params as $key =>$value){
        $tong += $key;
    }
    echo "tong cua array la: ". $tong;
}

// tinh_tong_arr(array(2,4,10));

    // b6: cho array bat ky. in ds so chan va dem co bn phan tu chan .
    // vd: array(1,2,3,4,5);
    // kq: array(2,4);
function so_chan_le_va_tinh_tong($params = array()){
    $tong_so_chan= 0 ;
    $tong_so_le = 0;
    $ds_so_le = array();
    $ds_so_chan = array();
    foreach($params as $value){
        // if($value % 2 == 0){
        //     $ds_so_chan[] = $value;
        //     $tong_so_chan += $value;//$tong_so_chan = $tong_so_chan + $value
        // }
        // else {
        //    $ds_so_le[] = $value;
        //    $tong_so_le += $value;
        //} 
        if($value % 2 != 0){
            $ds_so_le[] = $value;
            $tong_so_le += $value;
        }
        else{
            $ds_so_chan[] = $value;
            $tong_so_chan += $value;
        }
    }
    echo "ds so chan la: ".implode(" ", $ds_so_chan);
    echo "<br>";
    echo "ds so le la: ".implode(",", $ds_so_le);
    // foreach($ds_so_chan as $value){
    //     echo $value ."<br>";
    // }
    // echo $tong_so_chan."<br>";
    // foreach($ds_so_le as $value){
    //     echo $value."<br>";
    // }
    // echo $tong_so_le."<br>";    

}
//so_chan_le_va_tinh_tong(array(1,2,3,4,5,6));

    // b2: lay gia tri cua key name
    //      array(
    //     'name' => 'Nguyễn Tình A',
    //     'class'=> 'IT',
    //     'position' => 'BOSS

function lay_gia_tri(){
    $ds_phan_tu = array("name"=>" Nguyễn Tình A","class" => " IT","position" => "boss" );

    echo $ds_phan_tu["name"];
}
//lay_gia_tri();

    // b3: thay doi gia tri key cua name la nguyen van b
    // name' => 'Nguyễn Tình B',
function thay_doi_gia_tri(){
    $ds_gia_tri = array("name"=>" Nguyễn Tình A","class" => " IT","position" => "boss" );
    $ds_gia_tri["name"] = "Nguyễn Tình B";
    foreach($ds_gia_tri as $key => $value){
        echo "{$key}=>{$value}<br>";
    }
}

//mang 1 chieu
// $arr = array("A" => 1, "B" => 2, 3);
// $arr[] = "D";
// foreach($arr as $key => $value){
//     if($value == "D"){
//         unset($arr[$key]);
//         $arr["D"] = 4;
//     }
// }
// foreach($arr as $key => $value){
//     echo $key." ".$value;
// }
$arr = array(
    array(1,2,3), array(4,5,6)
);
echo $arr[0][2];
// foreach($arr[0] as $value){
//     echo $value;
// }
// foreach($arr[1] as $value){
//     echo $value;
// }
// foreach($arr[2] as $value){
//     echo $value;
// }
//$arr_1 = array(1,2,3,4,5,6,7,8,9);
// foreach($arr_1 as $key => $value){
//     echo $key;
// }

/*
b1: 1 2 3 = 6
    4 5 6 = 15
    7 8 9 = 24
tinh tong cua tung dong
xuat ra man hinh    1 2 3  
                    4 5 6 
                    7 8 9  
tim so lon nhat = 9
);
 */
?>