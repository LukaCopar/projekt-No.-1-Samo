<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include_once('./header.php');

if(isset($_COOKIE[$cookie_login]) > 0){
    include_once ('../LogOut.php');
setcookie($cookie_login,$cookie_value1, time() - 3600,"/");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="736730603166-s77em8je39nn9b177snjmkmdc7un2aoi.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    
    
        </head>
    <body>
        
        
        <div id="login">
        <form action="./login_check.php" method="post">
            <input type="text" name="username" placeholder="username" autofocus class="skatle"/>
            <input type="password" name="pass" placeholder="password" class="skatle" />
            <input type="submit" class="button" value="Log In"/>
            <button type="button" class="button-up" onclick="location.href='../register/register.php';">Sign Up</button>
            <?php
        if(isset($_GET['id'])>0){
             $id = $_GET['id'];
                if($id == 1){
                    echo '<div class="alert alert-warning width">wrong password!</div>';
                    }
        }

        ?>
                    

        </form>
            
            <div class="g-signin2" data-onsuccess="onSignIn" onclick="wait" data-theme="dark"></div>
               <script>

  
    
        
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId());
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

            
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        
        
        
        var url = "http://projekt1.lcopar.eu/login/google_login.php?name="+profile.getGivenName()+"&URL="+profile.getImageUrl()+"&email="+profile.getEmail()+"&id="+profile.getId()+"&fullname="+profile.getName();
  
        window.location.href = url;};
      
    </script>
            
        
        </div>
        
       
        
        
        
    </body>
</html>
