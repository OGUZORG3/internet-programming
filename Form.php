<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Basvuru Formu</title>
</head>

<body>
	
	<div style=" width: 100%; display: flex; justify-content: center; background-color: cadetblue; margin: 0px;">
	<div style="width: 800px; background-color: #E0E0E0;
				padding: 20px;">
	<h1 style="margin: 50px;">Başvuru Formu</h1>
		<hr style="border: 3px solid">
	<form>
	<div style="margin: 70px; width: 40%; position: relative; float: left;">	
	<h2>Genel Biligiler</h2>
	<h3>Adınız:</h3>
	<input type="text">
	<h3>Soyadınız</h3>
	<input type="text">
	<h3>Cinsiyetiniz</h3>
	<select style="width: 168px;">
		<option value="Kadın">Kadın</option>
		<option value="Erkek">Erkek</option>
		</select>
	<h3>Doğum Tarihinzi</h3>
	<input type="date" style="width: 168px;">
	<h3>Doğum Yeriniz</h3>
	<select style="width: 168px;">
		<option value="Kütahya">Kütahya</option>
		<option value="Balıkesir">Balıkesir</option>
		<option value="Uşak">Uşak</option>
		<option value="Eskişehir">Eskişehir</option>
		<option value="Muğla">Muğla</option>
	</select>
	</div>
	<div style="margin: 70px; position: relative; float: right; ">	
	<h2>Diğer Biligiler</h2>
	<h3>İş Pozisyonu</h3>
	<input type="text">
	<h3>Ehliyet</h3>
	<select style="width: 168px;">
		<option value="Var">Var</option>
		<option value="Yok">Yok</option>
		</select>
	<h3>Öğrenim Durumu</h3>
	<select style="width: 168px;">
		<option value="İlk Okul">İlk Okul</option>
		<option value="Lise">Lise</option>
		<option value="Ön Lisans">Ön Lisans</option>
		<option value="Lisans">Lisans</option>
		</select>
	<h3>Medeni Hal</h3>
	<select style="width: 168px;">
		<option value="Evli">Evli</option>
		<option value="Bekar">Bekar</option>
	</select>
	<h3>Yabancı Dilleriniz</h3>
	<input type="text">
	<h3>Tecrübeleriniz</h3>
	<input type="text">
	</div>
	<div style="margin: 80px; float: left; margin-top: 0px;">	
	<h2>İletişim Bilgileri</h2>
	<h3>Cep Telefonu</h3>
	<input type="tel" placeholder="0545-123-4567">
	<h3>Ev Telefonu</h3>
	<input type="tel" placeholder="0545-123-4567">
	<h3>İş Telefonu</h3>
	<input type="tel" placeholder="0545-123-4567">
	<h3>E-mail</h3>
	<input type="email" placeholder="ornek@gmail.com">
	<h3>Adresiniz</h3>
	<textarea style="max-width: 300px;max-height: 100px;"></textarea>
		<input type="submit" style="bottom: -40%; right: 30%;  position: absolute; background-color:lightskyblue; border-radius: 35px; width: 200px; height:100px; font-size: 30px; border: none;">
	</div>
		
	</form>
	</div>	
	</div>
</body>
</html>
