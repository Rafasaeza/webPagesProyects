<?php

function conectarDB(){
        $host = 'mysql-service';
    //$host = 'mysql-service.z2.svc.cluster.local';
    $db = mysqli_connect($host,'root','password','notas');
    //$db->set_charset('utf8')
    return $db;
}