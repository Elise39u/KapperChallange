<?php

function getAllAppointments()
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM agenda ORDER BY user_id DESC, datum";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

// Because in the agenda table we only have a user_id
function getKapperName() {
    $db = openDatabaseConnection();

    $sql = "SELECT user.name FROM user LEFT JOIN agenda ON user.id=agenda.user_id WHERE user.name= :name LIMIT 1";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $_SESSION['username']
    ));

    $db = null;

    return $query->fetchAll();
}