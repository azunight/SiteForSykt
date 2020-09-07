<?php
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'database');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
