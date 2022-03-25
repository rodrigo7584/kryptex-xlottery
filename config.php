<?php
    session_start();
    if (!isset($_SESSION['lang']))
        $_SESSION['lang']= "pt";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
        if ($_GET['lang'] == "pt")
            $_SESSION['lang'] = "pt";
        else if ($_GET['lang']== "en")
            $_SESSION['lang'] = "en";
        else if ($_GET['lang']== "es")
            $_SESSION['lang'] = "es";
        else
            $_SESSION['lang'] = "pt";

    require_once "idiomas/" . $_SESSION['lang'] . ".php";

    //indicador em qual pagina esta 
        $directoryURI = $_SERVER['REQUEST_URI'];
        $path = parse_url($directoryURI, PHP_URL_PATH);
        $components = explode('/', $path);
        $primeiro_campo = array_pop($components);
        $nome_a = explode('.', $primeiro_campo);
        $nome = $nome_a[0];
        $teste = "teste";
    //fim indicador
    