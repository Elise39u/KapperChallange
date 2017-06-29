<?php
require(ROOT . "model/AgendaModel.php");

function index() {
    render('agenda/index', array(
        'appointment' =>  getAllAppointments(),
        'kapper' => getKapperName()
    ));
}