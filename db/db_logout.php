<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logout successful!'); window.location.href='../index.php?page=login';</script>";
?>