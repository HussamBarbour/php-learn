<?php
$username = 'hussam';
$password = '123456';


if (isset($_POST['username'])){
    if ( $username == $_POST['username'] && $password == $_POST['password']){
        echo 'User Loged in';
    } else {
        echo 'Error';
    }
}
