<?php

// Get every appointment and sort the,
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

    $sql = "SELECT user.name FROM user LEFT JOIN agenda ON user.id=agenda.user_id  LIMIT 1";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

// Create a new appointment
function createAppointment($kapperid, $date, $start, $end) {
    $db = openDatabaseConnection();
    $start = date('Y-m-d H:i:s');
    $end = date('Y-m-d H:i:s');
    $sql = "INSERT INTO agenda(datum, start_tijd, eind_tijd, user_id) 
    VALUES (:datum, :starttijd, :eindtijd, :userid)";
    $query = $db->prepare($sql);
    if($query->execute(array(
        ':datum' => $date,
        ':starttijd' => $start,
        ':eindtijd' => $end,
        ':userid' => $kapperid
    ))) {
        $db = null;
        unset($_SESSION['error']);
        $_SESSION['message'][] = 'Added successful';
        return true;
    }
else {
        $_SESSION['error'][] = 'something went wrong possible 1067';
        unset($_SESSION['message']);
        return false;
    }
}

function getAppointment($id)
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM agenda WHERE id = :id";
    $query = $db->prepare($sql);
    if ($query->execute(array(
        ":id" => $id))) {
        $db = null;

        return $query->fetch();
    } else {
        $_SESSION['error'][] = 'No Records found with that id';
        unset($_SESSION['message']);
        return false;
    }
}

function editAppointment($kapper, $date, $starttime, $endtime, $id) {
    $db = openDatabaseConnection();
    $starttime = date('Y-m-d H:i:s');
    $endtime = date('Y-m-d H:i:s');
    $sql = "UPDATE agenda SET datum = :datum, start_tijd = :starttijd, eind_tijd = :eindtijd, user_id = :kappername 
    WHERE id = :id";
    $query = $db->prepare($sql);
    if($query->execute(array(
        ':datum' => $date,
        ':starttijd' => $starttime,
        ':eindtijd' => $endtime,
        ':kappername' => $kapper,
        ':id' => $id))) {
        $db = null;
        unset($_SESSION['error']);
        $_SESSION['message'][] = 'Updated successful';
        return true;
    } else {
        $_SESSION['error'][] = 'Something went wrong a 1064 Possible';
        unset($_SESSION['message']);
        return false;
    }
}

function deleteAppointment($id) {
    $db = openDatabaseConnection();

    $sql = "DELETE FROM agenda WHERE id=:id ";
    $query = $db->prepare($sql);
    if($query->execute(array(
        ':id' => $id))) {

    $db = null;

    unset($_SESSION['error']);
    $_SESSION['message'][] = 'Deleted successful';

    return true;  } else {
        $_SESSION['error'][] = 'Something went wrong a 1064 Possible';
        unset($_SESSION['message']);
        return false;
    }
}