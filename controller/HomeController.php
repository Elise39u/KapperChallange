<?php
require(ROOT . "model/UserModel.php");

function index()
{
	render("home/index");	
}

function doLogin() {
    // Check if $_POST Not isset
    if(!$_POST) {
        die('Something is broke');
        header("Location:" . URL . "error/index");
    } // Else continu
    else {
        $name = $_POST['name'];
        $adres = $_POST['adres'];
        $zipcode = $_POST['zipcode'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        checkUser($name, $adres, $zipcode, $city, $phone, $mobile, $email, $password);
        header("Location:" . URL . "home/startPage");
    }
}

function startPage() {
    $role = CheckRole();
    foreach ($role as $role_id) {
        foreach ($role_id as $roleName) {
            // Check what role is set
            if($roleName == '1') {
                $_SESSION['role'] = 'customer';
            } elseif($roleName == '2') {
                $_SESSION['role'] = 'kapper';
            } else {
            }
        }
    }
    render("home/start");
}

function logOut(){
    session_destroy();
    index();
}