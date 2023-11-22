<?php

    $gravarselect = $_GET['select'];
    setCookie(
        // nome do cookie
        "select",
        // valor do cookie
        $gravarselect,
        // tempo de expiração
        time() + 3600 * 24 * 365
    );

    header('location: filmes.php');