<?php
session_start();
require("config/helper.php");

logout_user();
header( "Location: index.php" ); die;

// INSERT INTO user (id, first_name, last_name, email, password)
// VALUES (14, 'Veronica', 'Rosales', 'vero_rosales', 'c72b763dcac1ccfa8270d3988cd5d711');
?> 