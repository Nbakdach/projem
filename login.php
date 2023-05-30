<?php
    $kulancı=$_POST['ad'];
    $şifre=$_POST['şifre'];
    if(($kulancı=="b201210603@sakarya.edu.tr") && ($şifre=="b201210603"))
    {
  
        echo " <script>location.replace('index.html')  
        alert('hoş geldiniz b201210603')   </script>";
      
    }
    elseif ($kulancı=="b201210603@sakarya.edu.tr")
    { 
        echo " <script>location.replace('login.html')
        alert('mail adrersi bulunmaktadır yalnız şiferinizi yanlıştır')  </script>";
        
    }
    else 
    { 
        echo " <script>location.replace('login.html')
        alert('mail adresi bulunmamaktadır')  </script>";
        
    }
?>
