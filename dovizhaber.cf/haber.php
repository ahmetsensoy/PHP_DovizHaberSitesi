<!doctype html>
<?php
include 'baglan.php';
?>
<html lang="en"><head>
    <!-- Required meta tags -->
	 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Borsa altın döviz">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/mediaquery.css">
<link rel="shortcut icon" href="img/circle-1544536_960_720.png" type="image/x-icon">
    <title>BORSA</title>
	<style>
		img{
			
			max-height: 100%;
			max-width: 100%;
		}
	</style>
  </head>
  <body>
    <div class=" bg-dark p-5">
        <div class="row">    
  <div class="container">
    <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-trans parent ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              <div class="collapse navbar-collapse" style="margin-left:85% ;" id="navbarNav">
                      <ul class="navbar-nav" style="margin-right:170px">
                        <li class="nav-item  ">
                          <a class="nav-link h4" href="/index.php">ANASAYFA</a>
                        </li>
                        
                        <li class="nav-item active">
                          <a class="nav-link h4" href="/haber.php">HABERLER</a>
                       </li> 

                       <div class="adminn" style="margin-left:80%">
                       <li class="nav-item">
                          <a class="btn btn-info" href="/admin.php">ADMİN</a>
                        </li>
                        </div>
						  
                      </ul>
                    </div>
                  </nav>   
          </div>           
        </div>
      </div>
    </div>

<div class="container">
  <div class="row">
    <div class="col-8">
	
<!-----------------haberler------------------>
<?php 
     $sql="SELECT * FROM tblhaber";
     $sorgu=mysqli_query($baglanti,$sql);
     while( $sonuc=mysqli_fetch_assoc($sorgu) ){
     ?>
  <div class="container pt-5">
   <div class="row">
    <div class="col">
      <div class="card mb-3 p-4 border-warning" style="max-width: 720px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/<?php echo $sonuc["resimyol"]; ?>" class="card-img p-4" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $sonuc["baslik"]; ?></h5>
              <p class="card-text"><?php echo $sonuc["icerik"]; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!----------------------------------->


</div>


<!----------------------------------->
	  
<!----------------------------------->

<!----------İKİNCİ KISIM------------------------->

    <div class="col-4 pt-5">


      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">BIST 100 ENDEKSİ GÜNÜ YÜZDE 0,99 ARTIŞLA 113 BİN 611 PUANDAN TAMAMLADI</p>
        </div>
      </div>
		
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">TCMB: TÜRK ŞİRKETLERİ ÇİN'DEN İTHALATLARINI YUAN CİNSİNDEN ÖDEME YAPARAK GERÇEKLEŞTİRDİ</p>
        </div>
      </div>
		
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title">Esad ailesi yaptırım yedi, Suriyeliler TL'ye koştu</h5>
          <p class="card-text">TCMB: TÜRK ŞİRKETLERİ ÇİN'DEN İTHALATLARINI YUAN CİNSİNDEN ÖDEME YAPARAK GERÇEKLEŞTİRDİ</p>
        </div>
      </div>
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title">Bir tatile bir buçuk yıl taksit!</h5>
          <p class="card-text">Yurt içi hava yolları, seyahat acenteleri ve konaklama harcamalarında kredi kartı taksit süresi 12 aydan 18 aya çıkarıldı.</p>
        </div>
      </div>
      <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title">İşsizlik sigortası primi artırılma hazırlığında</h5>
          <p class="card-text">Çalışanların brüt ücreti üzerinden İşsizlik Sigortası Fonu için yüzde 1 oranında kesinti yapılıyor. Bu kesintinin 'geçici' olarak yüzde 2'ye çıkarılması gündemde.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">BiLGİ KARTI</div>
        <div class="card-body">
          <h5 class="card-title">Trump: Ekonomiyi bir daha kapatmayacağız</h5>
          <p class="card-text">ABD’de son dönemde salgın yeniden hız kazandı. Birçok eyalette vaka sayısı artış gösterdi. Bu durum endişe yaratsa da başkan Donald Trump, “Bir daha ekonomiyi kapatmayacağız” ifadelerini kullandı.</p>
        </div>
      </div>

    </div>
  </div>
</div>


<!----------------------------------->
<!----------------------------------->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
