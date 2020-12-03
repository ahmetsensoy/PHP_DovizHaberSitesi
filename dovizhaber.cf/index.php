<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Borsa altın döviz">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mediaquery.css">
    <link rel="shortcut icon" href="img/circle-1544536_960_720.png" type="image/x-icon">
    <title>BORSA</title>
  </head>
  <body>
    <div class=" bg-dark p-5">
        <div class="row">    
  <div class="container">
    <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" style="margin-left:85% ;" id="navbarNav">
                      <ul class="navbar-nav" style="margin-right:170px">
                        <li class="nav-item active ">
                          <a class="nav-link h4" href="/index.php">ANASAYFA</a>
                        </li>
                        
                        <li class="nav-item">
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
<?php
	  $jsonVeri=file_get_contents("https://finans.truncgil.com/today.json");
	  $veri=json_decode($jsonVeri,1);
	  $veri["Güncelleme Tarihi"];
	  ?>
    <!--- DEĞERLİLER LİSTE START-->
<div class="container">
  <div class="row mt-5">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
      <table class="table">
        <thead>
          <tr>
            <th colspan="5"  class="table-info" scope="col"><center>ALTIN</center> </th>
          </tr>
        </thead>
        <tbody>
          <tr class="krem">
            <th></th>
            <th>ALIŞ</th>
            <th>SATIŞ</th>    
          </tr>
			<tr>
            <th>CUMHURİYET ALTIN</th>
            <td><?php echo $veri["Cumhuriyet Altını"]["Alış"];?></td>
            <td><?php echo $veri["Cumhuriyet Altını"]["Satış"];?></td>
            
            
          </tr>
			 <tr>
            <th>YARIM ALTIN</th>
            <td><?php echo $veri["Yarım Altın"]["Alış"];?></td>
            <td><?php echo $veri["Yarım Altın"]["Satış"];?></td>
            
          </tr>
			<tr>
            <th>ÇEYREK ALTIN</th>
            <td><?php echo $veri["Çeyrek Altın"]["Alış"];?></td>
            <td><?php echo $veri["Çeyrek Altın"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>ALTIN GR</th>
            <td><?php echo $veri["Gram Altın"]["Alış"];?></td>
            <td><?php echo $veri["Gram Altın"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>ALTIN (ONS)</th>
            <td><?php echo $veri["Ons Altın"]["Alış"];?></td>
            <td><?php echo $veri["Ons Altın"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>14 AYAR GRAM ALTIN</th>
            <td><?php echo $veri["14 Ayar Altın"]["Alış"];?></td>
            <td><?php echo $veri["14 Ayar Altın"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>18 AYAR GRAM ALTIN</th>
            <td><?php echo $veri["18 Ayar Altın"]["Alış"];?></td>
            <td><?php echo $veri["18 Ayar Altın"]["Satış"];?></td>
            
            
          </tr>
			<tr>
            <th>22 AYAR BİLESİK</th>
            <td><?php echo $veri["22 Ayar Bilezik"]["Alış"];?></td>
            <td><?php echo $veri["22 Ayar Bilezik"]["Satış"];?></td>
            
			</tr>  
          <tr>
            <th>İKİBUÇUK ALTIN</th>
            <td><?php echo $veri["İkibuçuk Altın"]["Alış"];?></td>
            <td><?php echo $veri["İkibuçuk Altın"]["Satış"];?></td>
            
            
			</tr>
			 
          <tr>
            <th>REŞAT ALTIN</th>
            <td><?php echo $veri["Reşat Altın"]["Alış"];?></td>
            <td><?php echo $veri["Reşat Altın"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>GREMSE ALTIN</th>
            <td><?php echo $veri["Gremse Altın"]["Alış"];?></td>
            <td><?php echo $veri["Gremse Altın"]["Satış"];?></td>
            
            
          </tr>
         
          <tr>
            <th>HAMİT ALTIN</th>
            <td><?php echo $veri["Hamit Altın"]["Alış"];?></td>
            <td><?php echo $veri["Hamit Altın"]["Satış"];?></td>
            
          </tr>
			 <tr>
            <th>GÜMÜŞ</th>
            <td><?php echo $veri["Gümüş"]["Alış"];?></td>
            <td><?php echo $veri["Gümüş"]["Satış"];?></td>
            
          </tr>

        </tbody>
      </table>
      <hr>
<hr style="margin-top: 100px;">
   <div class="tarih text-center" id="ts1"></div>
      <script>
        var tarih=new Date();
	var yil=tarih.getFullYear();
	var ay=tarih.getMonth();
	var gun=tarih.getDate();
	var saat=tarih.getHours();
	var dakika=tarih.getMinutes();
	var saniye=tarih.getSeconds();	
	document.write(gun+"/"+ay+"/"+yil+"   "+saat+":"+dakika+":"+saniye);
     </script>

      <hr>
      </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
      <table class="table">
        <thead>
          <tr>
            <th colspan="5" scope="col"  class="table-info"><center>MERKEZ BANKASI VERİLERİ</center> </th>
          </tr>
        </thead>
        <tbody>
          <tr class="krem">
            <th></th>
            <th>ALIŞ</th>
            <th>SATIŞ</th>
          </tr>
          <tr>
            <th>USD - ABD DOLARI</th>
            <td><?php echo $veri["ABD DOLARI"]["Alış"];?></td>
            <td><?php echo $veri["ABD DOLARI"]["Satış"];?></td>
            
            
          </tr>
			  <tr>
            <th>EUR - EURO</th>
            <td><?php echo $veri["EURO"]["Alış"];?></td>
            <td><?php echo $veri["EURO"]["Satış"];?></td>
            
            
          </tr>
			 <tr>
            <th>GBP - İNGİLİZ STERLİNİ</th>
            <td><?php echo $veri["İNGİLİZ STERLİNİ"]["Alış"];?></td>
            <td><?php echo $veri["İNGİLİZ STERLİNİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>AUD - AVUSTRALYA DOLARI</th>
            <td><?php echo $veri["AVUSTRALYA DOLARI"]["Alış"];?></td>
            <td><?php echo $veri["AVUSTRALYA DOLARI"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>DKK - DANİMARKA KRONU</th>
            <td><?php echo $veri["DANİMARKA KRONU"]["Alış"];?></td>
            <td><?php echo $veri["DANİMARKA KRONU"]["Satış"];?></td>
            
            
          </tr>
        
         
          <tr>
            <th>CHF - İSVİÇRE FRANGI</th>
            <td><?php echo $veri["İSVİÇRE FRANGI"]["Alış"];?></td>
            <td><?php echo $veri["İSVİÇRE FRANGI"]["Satış"];?></td>
            

          </tr>
          <tr>
            <th>SEK - İSVEÇ KRONU</th>
            <td><?php echo $veri["İSVEÇ KRONU"]["Alış"];?></td>
            <td><?php echo $veri["İSVEÇ KRONU"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>CAD - KANADA DOLARI</th>
            <td><?php echo $veri["KANADA DOLARI"]["Alış"];?></td>
            <td><?php echo $veri["KANADA DOLARI"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>KWD - KUVEYT DİNARI</th>
            <td><?php echo $veri["KUVEYT DİNARI"]["Alış"];?></td>
            <td><?php echo $veri["KUVEYT DİNARI"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>NOK - NORVEÇ KRONU</th>
            <td><?php echo $veri["NORVEÇ KRONU"]["Alış"];?></td>
            <td><?php echo $veri["NORVEÇ KRONU"]["Satış"];?></td>
            
          
          </tr>
          <tr>
            <th>SAR - SUUDİ ARABİSTAN RİYALİ</th>
            <td><?php echo $veri["SUUDİ ARABİSTAN RİYALİ"]["Alış"];?></td>
            <td><?php echo $veri["SUUDİ ARABİSTAN RİYALİ"]["Satış"];?></td>
            
          
          </tr>
          <tr>
            <th>JPY - JAPON YENİ</th>
            <td><?php echo $veri["JAPON YENİ"]["Alış"];?></td>
            <td><?php echo $veri["JAPON YENİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>BGN - BULGAR LEVASI</th>
            <td><?php echo $veri["BULGAR LEVASI"]["Alış"];?></td>
            <td><?php echo $veri["BULGAR LEVASI"]["Satış"];?></td>
            
          
          </tr>
          <tr>
            <th>RON - RUMEN LEYİ</th>
            <td><?php echo $veri["RUMEN LEYİ"]["Alış"];?></td>
            <td><?php echo $veri["RUMEN LEYİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>RUB - RUS RUBLESİ</th>
            <td><?php echo $veri["RUS RUBLESİ"]["Alış"];?></td>
            <td><?php echo $veri["RUS RUBLESİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>IRR - İRAN RİYALİ</th>
            <td><?php echo $veri["İRAN RİYALİ"]["Alış"];?></td>
            <td><?php echo $veri["İRAN RİYALİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>CNY - ÇİN YUANI</th>
            <td><?php echo $veri["ÇİN YUANI"]["Alış"];?></td>
            <td><?php echo $veri["ÇİN YUANI"]["Satış"];?></td>
            
          
          </tr>
          <tr>
            <th>PKR - PAKİSTAN RUPİSİ</th>
            <td><?php echo $veri["PAKİSTAN RUPİSİ"]["Alış"];?></td>
            <td><?php echo $veri["PAKİSTAN RUPİSİ"]["Satış"];?></td>
            
            
          </tr>
          <tr>
            <th>QAR - KATAR RİYALİ</th>
            <td><?php echo $veri["KATAR RİYALİ"]["Alış"];?></td>
            <td><?php echo $veri["KATAR RİYALİ"]["Satış"];?></td>
            
          
          </tr>
        </tbody>
      </table>
      <hr>

    </div>
  </div>
</div>






    <!--- DEĞERLİLER LİSTE END-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>