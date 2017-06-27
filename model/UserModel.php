<?php

function checkUser($name, $adres, $zipcode, $city, $phone, $mobile, $email, $password) {
    $db = openDatabaseConnection();
    $password = hash('sha256', $password);

    // We ask teh database to see if there are records
    $sql = "SELECT * FROM user WHERE name = :name AND password = :password";
    $query = $db->prepare($sql);
    $parameters = array(':name' => $name, ':password' => $password);
    $query->execute($parameters);

    // Check if the user already exists
    $count = $query->rowCount();
    if ($count == 0) {
        makeUser($name, $adres, $zipcode, $city, $phone, $mobile, $email, $password);
    } elseif ($count == 1) {
        $_SESSION['username'] = $name;
    } else {
        $_SESSION['username'] = $name;
    }
    $db = null;
}

function makeUser($name, $adres, $zipcode, $city, $phone, $mobile, $email, $password) {
    $db = openDatabaseConnection();
    $sql = "INSERT INTO user(name, adres, postcode, plaats, telefoon, mobiel, email, password, role_id) 
    VALUES (:name, :adres, :zipcode, :city, :phone, :mobile, :email, :password, :role_id)";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':adres' => $adres,
        ':zipcode' => $zipcode,
        ':city' => $city,
        ':phone' => $phone,
        ':mobile' => $mobile,
        ':email' => $email,
        ':password' => $password,
        ':role_id' => '1'));
    $db = null;
    $_SESSION['username'] = $name;
    return true;
}

function CheckRole() {
    $db = openDatabaseConnection();

    $sql = "SELECT role_id FROM user LEFT JOIN role ON user.role_id=role.id WHERE user.name= :name";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $_SESSION['username']
    ));

    // SELECT * FROM table1 LEFT JOIN Tabel2 on tabel1.onderwerp=tabel2.onderwerp

    $db = null;

    return $query->fetchAll();
}
