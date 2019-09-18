<?php
require 'utils.inc.php';

session_destroy();
header("Location:register.php");