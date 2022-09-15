<?php

/* Header para devolver JSON}   

    header('Content-Type: application/json');


Obtener JSON como objeto del body de un request

    $json = file_get_contents('php://input',true);

    
Convertir el body en un objeto

    $req = json_decode($json); */