<?php
//Pemanggilan 
$user = $_POST['username'];

//Jika username dan password benar atau salah(Menggunakan IF ELSE percabangan)

if ($user =='userlsp'  && $_POST['pass'] =='smkn2bjm' ) 

{
   echo "";
   header("location: home.php");
}
else {
   echo "Gagal Login";
   header("location: index.php");
} 
$user2 = $_POST['username'];

//Jika username dan password benar atau salah(Menggunakan IF ELSE percabangan)

if ($user2 =='adhim'  && $_POST['pass'] =='maulana' ) 

{
   echo "";
   header("location: home.php");
}
else {
   echo "Gagal Login";
   header("location: index.php");
} 
?>