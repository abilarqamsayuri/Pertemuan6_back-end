
<form name="f1" method="POST" action="form.php">
    Username : <input type="text" name="nama" /><br/><br/>
    Password &nbsp; : <input type="text" name="pass" /><br/><br/>
    <input type="submit" value="Login" />
</form> 
 
<?php 
    function otentikasi($uname, $pass){
        // user admin , password 12345*
        if ($uname == "admin" && $pass == "12345*"){
            return "<h2>Berhasil Login</h2>";
        } else {
            return "<h2>Coba Lagi</h2>";
        }
    }

    
    echo otentikasi($_POST['nama'], $_POST['pass']);
?>