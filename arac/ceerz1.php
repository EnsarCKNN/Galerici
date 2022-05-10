
      <?php
        $username=$_POST["username"];
        $password=$_POST["password"];

        if ($username=='ensar' && $password=='sifre') {
            echo 'hosgeldiniz '.$username;
            setcookie('user',base64_encode($username));
            setcookie('pass',base64_encode($password));
        }
        else {
           echo 'yanlış bilgiler';
        }
      
      
      ?>