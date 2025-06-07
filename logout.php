<?php
session_start();
session_destroy(); // Xoá toàn bộ session
header('Location: trangchu.php'); // Quay lại trang chính
exit();
