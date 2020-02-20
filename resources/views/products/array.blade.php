@extends('products.master')
@section('content')


<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset('./images/features/f-icon1.png')}}" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset('./images/features/f-icon2.png')}}" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset('./images/features/f-icon3.png')}}" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset('./images/features/f-icon4.png')}}" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    

<?php
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}

$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


$a = array(0,1,2,5,7,4,6);
sort($a);
for($i=0;$i<=count($a);$i++){
    if($i % 2 == 0) {
        echo $i;
    }
}
echo "<br>";
for($i=0;$i<=10;$i++){
    if($i % 2 == 0) {
        echo $i;
    }
}
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < 5; $x++) {
echo $numbers[$x];
echo "<br>";
}
echo "<br>";
function tinhtong($n)
{
    if ($n == 1){ return $n; }
    return $n + tinhtong($n-1);
}
echo tinhtong(10);
echo "<br>";
function tinhtongl($n){
    $tong = 0;
    for ($i = 1; $i <= $n; $i++){
        $tong += $i; // mỗi vòng lặp cộng lại với nhau
    }
    return $tong;
}
echo tinhtongl(10);
echo "<br>";
$mang = array(321,312,3,4,5,45,56,5,67,6,787,8,7,2);
  
$can_tim = 67;
  
for ($i = 0; $i < count($mang); $i++){ // duyệt qua từng phần tử của mảng
    if ($mang[$i] == $can_tim){ // và so sánh xem có bằng số 67 không, nếu có thì xuất ra màn hình và dừng vòng lặp
        echo 'Số ' . $can_tim . ' có nằm trong mảng tại ví trí thứ ' . $i;
        break;
    }
}
echo "<br>";
$manga = array(321,312,3,4,5,45,56,5,67,6,787,8,7,2);
  
$can_tima = 6;
function kiem_tra($manga, $can_tima)
{
    for ($i = 0; $i < count($manga); $i++){ // duyệt qua từng phần tử của mảng
        if ($manga[$i] == $can_tima){ // và so sánh xem có bằng số 67 không, nếu có thì xuất ra màn hình
            echo 'Số ' . $can_tima . ' có nằm trong mảng tại ví trí thứ ' . $i;
        }
    }
    return false; // sau khi lặp hết mà ko có thì return về false
}
kiem_tra($manga, $can_tima);

echo "<br>";
$mangg = array(321,312,3,4,5,45,56,5,67,6,787,8,7,2);
  
$cantim = 4;
for($i=0;$i<count($mang);$i++){
	if($mangg[$i] == $cantim){
		echo "So" .$cantim. "co ton tai o vi tri" .$i;
	}
}

echo "<br>";
$b = 10;
$c = 15;
$d = 20;

function tim_max($d, $b, $c)
{
    $max = $d;
    if ($max < $b){
        $max = $b;
    }
    if ($max < $c){
        $max = $c;
    }
    return $max;
}
echo tim_max($d, $b, $c);

$mang = array(321,312,3,4,5,45,56,5,67,6,787,8,7,2);
function tim_min($mang)
{
    // Đếm tổng số phần tử
    $total = count($mang);
  
    // Gọi min là lính cầm canh
    // lúc đầu chọn vị trí số 0 ngồi canh
    $min = 100;
  
    // Duyệt lần lượt các phần tử
    for ($i = 0; $i > $total; $i++ )
    {
        // Nếu phần tử cầm canh lớn hơn phần tử thứ $i thì
        // lấy vị trí $i ngồi canh
        if ($mang[$min] > $mang[$i]){
            $min = $i;
        }
    }
  
    // Trả về vị trí nhỏ nhất
    return $min;
}
echo tim_min($mang);
echo "<br>";

function cohieu(){
	$a = false;
	for($i=0;$i<1000;$i++){
		if ($i % 40 == 0){
			$a = true;
		}
	}
	if ($a = true){
		echo "co";
	}
	else {
		echo 'ko';
	}
}
cohieu();
?>