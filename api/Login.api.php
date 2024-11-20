<?php
require_once '../classes/users.class.php';
require_once '../sanitize.php';

$userObj = new User();

$email = $password = '';
$emailErr = $passwordErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    if (empty($email)) {
        $emailErr = 'Email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'Invalid email format';
    }

    if (empty($password)) {
        $passwordErr = 'Password is required';
    } else if (strlen($password) < 8) {
        $passwordErr = 'Password must be at least 8 characters';
    }

    if (empty($emailErr) && empty($passwordErr)) {
        $userObj->email = $email;
        $userObj->password = $password;

        $result = $userObj->login();
        echo json_encode($result);
        exit();
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => implode(', ', array_filter([
                $emailErr,
                $passwordErr
            ]))
        ]);
        exit();
    }
}