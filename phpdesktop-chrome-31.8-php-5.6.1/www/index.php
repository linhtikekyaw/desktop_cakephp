<?php 
/*
$con = mysqli_connect('127.0.0.1','root','naz');
$result = mysqli_query($con,'select * from users');
#! /bin/ash
echo "Content-Type: text/html";
while($row= mysqli_fetch_array($result)){
	echo $row['username'];
}
mysqli_close($con);
echo 'HELLO WORLD</br>'; 
echo '<a href="./phpMyAdmin/"/>phpMyadmin</a><br>';
*/
echo 'HELLO WORLD</br>'; 
echo '<a href="./phpMyAdmin/"/>phpMyadmin</a><br>';
echo 'HELLO WORLD</br>'; 
echo '<a href="./phpLiteAdmin_v1-9-6/phpliteadmin.php"/>mysqlite</a><br>';
echo '<a href="/cakephp/index.php"/>cakephp</a><br>';
echo '<a href="/cakephp3/index.php"/>cakephp3</a><br>';
echo '<a href="/backup/index.php"/>backup</a><br>';
echo '<a href="./cakephp/app/Config/test.php"/>mysqliteur</a><br>';
print $_SERVER['SERVER_ROOT'];
?>