<?php

session_start();
if (session_destroy()) {
    echo"<script>window.location.assign('index.php')</script>";
}
?>