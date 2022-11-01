<?php
if (isset($_POST)) {
print_r($_POST);
$data =[
  'cep'=>$_POST['cep'],
  'ev'=>$_POST['ev'],
  'is'=>$_POST['is'],

];
$data = json_encode($data);
setcookie('user',$data, time()+3600);

if(isset($_COOKIE['user'])){
	echo"<pre>";
	print_r($_COOKIE['user']);
	echo"</pre>";
}else {
	echo"kullanıcı Bilgisi Bulunamadı.";
}
}else {
	echo "herhangi bir veri girişi olmadı.";
}
?>