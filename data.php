 <html>
<head>
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

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
	background: url('maka.jpg');
	background-image: url('maka.jpg');
	height: 200px;
	width: 100%;
	background-size: 1400px
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
<?php
$nama_lengkap = @$_POST['nama_lengkap'];
$nomer =@$_POST['nomer'];
$alm = @$_POST['alm'];
$kp = @$_POST['kp'];
$pengiriman = @$_POST['pengiriman'];
$cp = @$_POST['cp'];
$tp = @$_POST['tp'];
?>

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
    <hr size="1 px" width="100%" align="center" color="#cccccc">
  </ul>
  <div class="form"><hr size="1 px" width="100%" align="center" color="#cccccc">
<!--
<td colspan="2"><div style="background: #0704ab";><p align="center"><font size="18" color="white"> Data Pembeliin</font></p></div></td>-->

<p align="center"><i><b><font size="4">
Nama : <?php echo $nama_lengkap; ?><br>
Nomer HP : <?php echo $nomer; ?><br>
Alamat : <?php echo $alm; ?><br>
Kode POS : <?php echo $kp; ?><br>
Pengiriman melalui : <?php echo $pengiriman; ?><br>
Transaksi Pembayaran : <?php echo $tp; ?>

<!--
<form  name="kembali" action="index.php" method="get">
<a href="#">
<input type="button" align="center" value="Kembali" onclick="history.go(-2);" >
</a>
</form>	-->
	</font></b></i></p></td>
  </tr><tb><tb><img src="bwh.jpg" width="100%" height="80">	
</body>
</html>
