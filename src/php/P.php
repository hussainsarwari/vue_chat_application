<?php

echo "php course";

echo "<h1>file handling</h1> <hr>";
echo "<h1>readfile() example :".readfile("file.txt") ."</h1> <hr>";
echo "<h1>fopen() example :</h1> <hr>";
$d=fopen("file.txt","r") or die("cant open");
$f=fopen("file.txt","r") ;
echo fread($d,22);
echo "<h1>fgets() example :</h1> <hr>";
fgets($f);

echo "<h1>feof check the end of file :</h1> <hr>";
fclose($d);
$file=fopen("myfile.txt","w");
fwrite($file,"php created this file");
$file=fopen("myfile.txt","r");
echo "<h1>open() user for  create file with php : </h1> <hr>";
fread($file,30);
echo "<h1>unlink() use for  delete file with php : </h1> <hr>";
unlink("myfile");
echo "<h1>mkdir() use for  create directory with php : </h1> <hr>";
mkdir("test");
echo "<h1>rkdir() use for  remove directory with php : </h1> <hr>";
// header("content-type: application/vnd.ms-word");
// header("content-Disposition:attachment; filename=one.doc")
echo $_SERVER['PHP_SELF'];
echo $_SERVER['DOCUMENT_ROOT'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['REQUEST_METHOD'];
?>
<form action="P.php" method="get">
    <input type="text" name="name">
    <input type="submit" value="sent">
</form>
<?php
if (isset($_GET['name'])) {
    # code...
    echo 'hi ', $_GET['name'];

}



?>


<form action="P.php" method="post" enctype="multipart/form-data">
    	Select image to upload:
        	<input type="file" name="fileToUpload" id="fileToUpload">
            	<input type="submit"value="Upload Image" name="submit"></form>


<?php


if (isset($_POST['submit'])) {
    # code...
    echo " temp : ". $_FILES["img"]['tmp_name']."<br>";
    echo " NAME : ". $_FILES['img']['NAME']."<br>";
    echo " type : ". $_FILES['img']['type']."<br>";
    echo " size : ". $_FILES['img']['size']."<br>";

}




// echo "<h1> php time and date </h1> ";
// echo "<h1> today is ". date("Y / D/ M")."</h1> ";
// echo "<h1> today is ". date("m.y.d")."</h1> ";
// // echo "<h1> today is ". date(|)."</h1> ";
// echo "<h1> this  month is ". date("M")."</h1>  <hr>";
// echo "<h1> the time  is ". date("H : i :s")."</h1>  <hr>";
// echo "<h1> the time  is ". date("H : i :s")."</h1>  <hr>";
// echo "<h1> the time  is ". date("h : i :s a")."</h1>  <hr>";
// echo "<h1> your time zone is :". date_default_timezone_get() ,"</h1> <hr>";
// echo "<h1>change  time zone  :". date_default_timezone_set("Asia/Kabul") ,"</h1> <hr>";
// echo "<h1> your new time zone is :". date_default_timezone_get() ,"</h1> <hr>";
// echo "<h1> the time  is ". date("h : i :s a")."</h1>  <hr>";
// echo "<h1> mktime example : ".$t = mktime(3,12,51,2,5,2000) ."= ".date("Y-m-d h:i:sa ". $t)."</h1>  <hr>";
// echo "<h1> string to time  example : 
// ". $t =strtotime("10:30pm April 15 2014") ."= ".date("Y-m-d h:i:sa".$t)."</h1>  <hr>";

// $d=strtotime("tomorrow");
// 	echo date("Y-m-d h:i:sa", $d) ."<br>";






?>