<?php
session_start();
session_destroy();
header("Location:../../login.php?msg=");
//now login part completed