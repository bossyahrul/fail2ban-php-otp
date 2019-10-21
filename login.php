<html>
    <body>
        <?php
            require_once('php-otp/code/rfc6238.php');
            
            $secret_key = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
            print sprintf('<img src="%s"/>', TokenAuth6238::getBarCodeUrl('beny', 'beny.id', $secret_key, 'Beny%20TFA'));
        ?>
        
        <form method="post" action="validate.php">
        Username : <br>
        <input type="text" name="username"> <br>
        Password : <br>
        <input type="password" name="password"> <br>
        OTP : <br>
        <input type="text" name="c"> <br>
        <input type="submit" name="submit" value="Kirim">
        
    </body>
</html>