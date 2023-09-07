<?php
session_start();
unset($_SESSION['email']); // key session

session_unset(); // all info in session
session_destroy(); // close any deal