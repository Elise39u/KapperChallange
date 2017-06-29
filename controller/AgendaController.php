<?php
require(ROOT . "model/AgendaModel.php");

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
        var_dump($_SESSION);
        header("Location:" . URL . "agenda/index");
    }
}