<?php
    session_start();

    if (isset($_SESSION["REMOTE_USER"], $_SESSION["REMOTE_ADDR"], $_SESSION["SERVER_NAME"])) {
        echo $_SESSION["REMOTE_USER"]."<br>";
        echo $_SESSION["REMOTE_ADDR"]."<br>";
        echo $_SESSION["SERVER_NAME"];
    }