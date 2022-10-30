<?php

   session_start();
   $error = "";
   if (isset($_POST['username'])&& isset($_POST['password'])) {
	   $username = "ceyda";
       $password = "ceyda";
	if ($_POST['username'] == $username && $_POST['password'] == $password) {
		$error = "giriş başarılı";
		include "welcome.php";
		exit;
	}
	else {
		$error = "kullanıcı bilgileri hatalı";
	}
}

?>
<html>
   <head>
      <title>Giriş Sayfası</title>  
      <style type = "text/css">
         body {
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
   </head>
   
   <body bgcolor = "#FFFFFF">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Kullanıcı Ekranı</b></div>	
            <div style = "margin:30px">   
               <form action = "" method = "post">
                  <label>Kullanıcı Adı  :</label><input type = "text" name = "username" class = "box"/><br/><br/>
                  <label>Şifre  :</label><input type = "password" name = "password" class = "box" /><br/><br/>
                  <input type = "submit" value = "Giriş"/><br/>
               </form>        
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            </div>		
         </div>		
      </div>
   </body>
</html>