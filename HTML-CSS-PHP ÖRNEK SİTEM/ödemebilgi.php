<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	    <link rel="stylesheet" type="text/css" href="odemebilgi.css">
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
 <div class="container">
        <div class="row">
            <div class="col-md-12">
                

<marquee direction=right style="background: black; color: whitesmoke; width: 1280px ;">BAER Mobilya BAER Mobilya </marquee>
 <div class="sayfa">
        <div class="ust"  >
            <div id="logo">
                <h1><a href="#">BAER MOBİLYA</a></h1>
                <p>Modada Devrim..</p>
            </div>
             <div id="menu">
                <ul>
                    <li><a href="AnaSayfa.html">Anasayfa</a></li>
                    <li><a href="Ürünler.html">Ürünler</a></li>
                    <li><a href="iletişim.html">İletişim</a></li>
                     <li><a href="sepetim.html">Sepetim</a></li>
                </ul>
            </div>
        </div>
    </div>

            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        	<div class="ödeme" style="margin-top: 150px; background:powderblue; width:750px;height: 250px;margin: auto; border: 2px solid black; ">
        		<div class="ödeme1" style="text-align: center;">
        			<h1>Ödemiz başarıyla alınmıştır.
        			</h1><br>
        			<h3>Ödeme Bilgileriniz:</h3>
        		</div>
        		<div class="ödeme2">
        			Adınız Soyadınız:, <?php echo $_GET["adsoyad"]; ?>.<br>
        			Kart Bilgilariniz:, <?php echo $_GET["kart"]; ?>.<br>
        			Ödeme Çeşidiniz:, <?php echo $_GET["yontem"]; ?>.<br>

            
        		</div>
        	</div>
        	</div>
        </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>