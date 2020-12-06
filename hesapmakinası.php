<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Hesap Makinesi</title>
	<style type="text/css">
		body{
			margin-left:25%;
  			margin-right:50%;
  			padding:50px;
		}
		.buton{
			background-color:gray;
			width:80px;
			border:1px solid ;
			border-radius:150px;
			height:30px;
		}
		.buton:hover{
			background-color:darkcyan;
			font-family: sans-serif;
			font-weight: bold;
			font-style: italic;
		}
		.number{
			border:2px solid	;
			border-radius:4px;
		}
		fieldset{
			height: 200px;
			margin: 20px;
			padding:10%;
			border:2px solid ;
			border-radius:10px;
		}
	</style>

</head>
<body>

<fieldset style="width:170px;">
	<legend style="font-family:tahoma;"><b>Hesap Makinası</b></legend>
 <form action="" method="POST">
 	
 	<input class="number" type="number" name="sayi1" required=""><br><br>
 	<input class="number" type="number" name="sayi2" required=""><br><br>
 	<select class="number" name="islem">
 		<option value="+">Toplama</option>
 		<option value="-">Çıkartma</option>
 		<option value="*">Çarpma</option>
 		<option value="/">Bölme</option>
 		<option value="%">Yüzde</option>
 		<option value="mod">Mod</option>
 		<option value="ustal">Üst Alma</option>
 	</select><br><br>
 	<input class="buton" type="submit" value="Hesapla">
<?php 
	if ($_POST) {

	$sayi1= $_POST['sayi1'];
	$sayi2= $_POST['sayi2'];
	$islem=$_POST['islem'];
	 if ($islem=="+") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo $sayi1+$sayi2;
	 }
	 elseif ($islem=="-") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo $sayi1 - $sayi2;
	 }
	 elseif ($islem=="*") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo $sayi1 * $sayi2;
	 }
	 elseif ($islem=="/") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo $sayi1 / $sayi2;
	 }
	 elseif ($islem=="%") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo ($sayi1*$sayi2)/100;
	 }
	  elseif ($islem=="mod") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo $sayi1%$sayi2;
	 }elseif ($islem=="ustal") {
	 	echo "<br>"."<br>";
	 	echo "<font face='serif'> Sonuç :</font>";
	 	echo pow($sayi1,$sayi2);
	 }
	
}

 ?>


 </form>
 

</fieldset>
</body>
</html>