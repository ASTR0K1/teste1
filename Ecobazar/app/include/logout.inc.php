<?php

session_start();
session_unset();
session_destroy();

header("location: ../../public/ecobazar.php?logged+out");
die();