<!DOCTYPE html>

<?php
require_once('../connection/database.php');

?>
<html>
    <head>
        <meta charset="UTF-8">
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    </head>
    <body>
        
        <div class="page-header"> 
            
            <?php
            $cookie_name = "test1";
            $cookie_value;
            
        $stmt = $pdo->query('SELECT name FROM users');
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       // $cookie_name = $row['name'];
        $cookie_value = $row['name'];
        
        setcookie($cookie_name, $cookie_value, time() + 86400, "/");
        
        echo 'Cookie: '. $cookie_name. "<br>";
        echo 'Value: '. $_COOKIE[$cookie_name];
        ?>
        </div>
       
    </body>
</html>
