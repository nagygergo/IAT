<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include_once 'Classes/ExcelFileWriter.php';

if(isset($_POST)) {
    switch ($_POST["origin"]) {
        case "index": {
            if (isset($_SESSION)) {
                session_unset();
                session_destroy();
            }
            session_start();
            include_once("resources/adatok.php");

        }
            break;
        case "adatok": {
            session_start();
            if($_SESSION["origin"]=="adatok"){
                include_once("index.php");
                session_unset();
                session_destroy();
            } else {
                $filehandler = fopen("resources/adatok.json", "r");
                $nulltable = (array)json_decode(fread($filehandler, filesize("resources/adatok.json")));
                $_SESSION = array_merge($_SESSION, $nulltable);
                foreach (array_keys($_POST) as $key) {
                    $_SESSION[$key] = $_POST[$key];
                }
                $lang = $_SESSION["kor"] < 26 ? "hu-T" : "hu-M";
                include_once("resources/" . $lang . "/preIAT.php");
            }
        }
            break;
        case "preIAT": {
            session_start();
            if($_SESSION["origin"]=="preIAT"){
                include_once("index.php");
                session_unset();
                session_destroy();
            } else {
                $_SESSION["origin"]="preIAT";
                $lang = $_SESSION["kor"] < 26 ? "hu-T" : "hu-M";
                include_once("resources/IAT.php");
            }
        } break;
        case "IAT": {
            session_start();
            if($_SESSION["IATrounds"]=="IAT") {
                include_once("index.php");
                session_unset();
                session_destroy();
            } else {
                $_SESSION["origin"]="IAT";
                $_SESSION["IATrounds"] = json_decode($_POST["IATrounds"], true);
                $lang = $_SESSION["kor"] < 26 ? "hu-T" : "hu-M";
                include_once("resources/" . $lang . "/explicit.php");
            }
        }
            break;

        case "explicit": {
            session_start();
            if($_SESSION["origin"]=="explicit"){
                include_once("index.php");
                session_unset();
                session_destroy();
            }else {
                $_SESSION = array_merge($_SESSION, $_POST);
                $writer = new ExcelFileWriter();
                $writer->setFileName('output/output.xlsx');
                $writer->writeToFile($_SESSION);

                $lang = $_SESSION["kor"] < 26 ? "hu-T" : "hu-M";
                include_once("resources/" . $lang . "/end.php");
                session_unset();
                session_destroy();
            }
        }break;
        default: {
            session_start();
            session_unset();
            session_destroy();
            include_once("index.php");
        }
    }
}
