<?php
session_start();
session_destroy();
header('location: http://app.cabinet-drmalki.com');
exit;
?>