<html>
<head>
	<title>TOKO BUKU</title>
	<style type="text/css">

body{
  font-family: Arial, Helvetica, sans-serif;
}
.footer {
    float: middle;
    color: white;
    background-color: black;
    padding: 10px;
    text-align: center;
}div{
	background: url('book.jpg');
	background-image: url('book.jpg');
	height: 700px;
	width: 100%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}
li{
  float: left;
}
li a{
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover{
 
}
  </style>
</head>
<body>
</div>
<nav>

<ul>
    
    <li style="float: right;" ><a href="">Help</a></li>
    <li style="float: right;"><a href="">Join/Log In</a></li>
    <hr size="1 px" width="100%" align="center" color="#cccccc">
  </ul>
  <ul>
    <br>
    <li><img src="judule.jpg" height="55"></li>
    <center><font size="5">
    <li><a href="index.php"><img src="logohm.jpg"></a></li>
    <li><a href="#">DAFTAR BUKU</a></li>
    <li><a href="#">DAFTAR KOMIK</a></li>
    <li><a href="#">DAFTAR NOVEL</a></li>
    <li><a href="#">CONTACT</a></li>
    </font></center>
    
  </ul>
  
</nav>
</head>

<div class="form"><hr size="1 px" width="100%" align="center" color="#cccccc">
	<h2 align="center" >FORMULIR PEMBELIAN</h2>
	<h4 align="center">lengkapi data di bawah ini</h4>
	<center> 
	<form action="data.php" method="post">
		<label>Nama Lengkap</label><br>
		<input type="text" name="nama_lengkap" required><br><br>
		
		<label>Nomer Hp</label><br>
		<input type="text" name="nomer" required><br><br>
		
		<label>Alamat Lengkap </label><br>
		<textarea cols="50" rows="5" name="alm" required></textarea><br><br>
		
		<label>Kode POS</label><br>
		<input type="text" name="kp" id="in" autofocus required><br><br>
		
		<label>Pengiriman </label><br>
		<select name="pengiriman">
			<option value="#"></option>
			<option value="jne">JNE</option>
			<option value="tiki">Tiki</option>
			<option value="wahana">Wahana</option>
			<option value="j&t">J&T Expres</option>
			<option value="pos">POS Indonesia</option>
		</select>
		<br>
		<br>
		<label>Transaksi Pembayaran</label><br>
		<select name="tp">
			<option value="#"></option>
			<option value="mb">M Banking</option>
			<option value="atm">ATM</option>
			<option value="indo">Indomart</option>
			<option value="alfa">Alfamart</option>
		</select>
			<br><br>
			<input type="submit" name="kirim" onclick="buttonku()" value="Kirim" id="btn">
		<input type="reset" name="batal" value="Batal"><br>
		</div>
		<tr>
	</tr>
	</form>
	</center>
	<script type="text/javascript">
		function buttonku(){
			alert("Apakah data yang di inputkan sudah benar?");
		}
	</script>
</div>
	<img src="bwh.jpg" width="100%" height="80">
</body>
</html>