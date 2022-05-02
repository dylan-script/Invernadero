<?php
require_once "config.php";
$sql_1 = "INSERT INTO height (height.ID_Plant, height.Value) VALUES ($_POST['planta'], $_POST['altura'])";
$result_1 = mysqli_query($db, $sql_1);
$sql_2 = "INSERT INTO diameter (diameter.ID_Plant, diameter.Value) VALUES ($_POST['planta'], $_POST['diametro'])";
$result_2 = mysqli_query($db, $sql_2);
$sql_3 = "INSERT INTO num_sheets (num_sheets.ID_Plant, num_sheets.Value) VALUES ($_POST['planta'], $_POST['hojas'])";
$result_3 = mysqli_query($db, $sql_3);
$sql_4 = "INSERT INTO aphidoidea (aphidoidea.ID_Plant, aphidoidea.Value) VALUES ($_POST['planta'], $_POST['afidos'])";
$result_4 = mysqli_query($db, $sql_4);