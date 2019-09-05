<?php


require "user.php";

if ((isset($_SESSION['username']) and isset($_SESSION['password']))
    or (isset($_POST['username']) and isset($_POST['password']))) {
    http_redirect("/home.php");
} else {
    echo "<input action='login.php'>
        <input name='username'></input><input name='password'></input></form>
        <button type='submit'></button>";
}
