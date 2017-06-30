<?php
require(ROOT . "model/AgendaModel.php");

function getID() {
    if (isset($_GET['id'])) {
        return $_GET['id'];
    }
}

function index() {
    render('agenda/index', array(
        'appointment' =>  getAllAppointments(),
        'kapper' => getKapperName()
    ));
}

function create() {
    render('agenda/create');
}

function createSave() {
    if (isset($_POST)) {
        $kapperid = $_POST['kapper'];
        $date = $_POST['date'];
        $start = $_POST['starttime'];
        $end = $_POST['endtime'];
        createAppointment($kapperid, $date, $start, $end);
        header("Location:" . URL . "agenda/index");
    }
}

function update() {
    $id = getID();
    render('agenda/edit', array(
        'appointments' =>  getAppointment($id)
    ));
}

function updateSave() {
    if (isset($_POST)) {
        $kapper = $_POST['kapper'];
        $date = $_POST['date'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $id = $_POST['id'];
        editAppointment($kapper, $date, $starttime, $endtime, $id);
        header("Location:" . URL . "agenda/index");
    }
}

function delete() {
    $id = getID();
    render('agenda/delete', array(
        'appointments' =>  getAppointment($id)
    ));
}

function deleteSure() {
    if (isset($_POST['yes'])) {
        $id = $_POST['id'];
        deleteAppointment($id);
    } else {
        $_SESSION['error'][] = 'You have Pressed no and been redirect';
    }
    header("Location:" . URL . "agenda/index");
}