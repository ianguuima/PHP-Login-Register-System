<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 25/01/2019
 * Time: 01:54
 */

require_once "config.php";

session_destroy();
header("Location: ../index.php");
exit();