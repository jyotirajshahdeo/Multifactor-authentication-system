<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pin'] === '1234') {
        header('Location: color_verification.html');
        exit();
    } else {
        echo "Incorrect PIN.";
    }
}
?>