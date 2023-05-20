<?php
if($_POST["email"]=="b201210025@sakarya.edu.tr" && $_POST["password"]=="b201210025")
			{
        echo"Merhaba ".$_POST["email"];
        echo"<br>Girişin Onaylandı.";
		echo"<br>Girişiniz yapılıyor lütfen bekleyiniz...";
		header("refresh:2; about.html");
			}
      else{
        echo "Kullanıcı e postası ya da şifre hatalı!";
        header("refresh:2; login.html");
      }    
 ?>