<?php

// css ve jscript dosyalarına erişebilmek için yeniden metotlar oluşturdum
// metodu parçalamak yerine
// düzenlenenler ANA SAYFA , YÖNETİM , Güvenli Çıkış Css ve JavaScript dosyaları 

function ust_yaz(){	
echo '
	
  <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Yönetici Paneli</title>  
       <!--   CSS  -->
       <link href="../../../style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
       <link href="../../../style/css/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
       <!--   JScript  -->
       <script type="text/javascript" src="../../../style/js/jquery.js"></script>
       <script type="text/javascript" src="../../../style/js/jNice.js"></script>
       <script type="text/javascript" src="../../../style/js/JScript_My.js"></script>  
       <script type="text/javascript" src="../../../style/js/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="../../../style/js/jquery-ui.js"></script>
     </head>
     <body>
       <div class="hatali"></div>  
	   <div id="wrapper">
          <h1>
            <a href="../../anasayfa.php">
               <span>Fatura </span>
            </a>
          </h1>
          <ul id="mainNav">
        	<li><a href="../../anasayfa.php">ANA SAYFA</a></li>
        	<li><a class="active" href="../../yonetim.php" >YÖNETİM</a></li>
        	<li><a href="../../faturalar.php">FATURALAR</a></li>
        	<li class="logout"><a href="../../cikis.php">Güvenli Çıkış</a></li>
        </ul>
    ';
 }

function alt_yaz(){
  echo ' 
           <div class="clear"></div>
           <p id="footer" style="text-align:center" >
               Tüm Hakları Saklıdır.
               <a target="_blank" href="http://ismailakbudak.com" > 
                  İsmail AKBUDAK. 
                  </a>
           </p> 
        </div>
    </body>
  </html>
';
}


?>
