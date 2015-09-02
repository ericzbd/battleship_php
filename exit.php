<?php
session_start();
session_unset();
session_destroy();
header('Location: ' . 'https://www.youtube.com/watch?v=sfR_HWMzgyc');
?>