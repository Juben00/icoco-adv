<?php
require_once '../classes/users.class.php';
require_once '../sanitize.php';

$userObj = new User();

$firstname = $lastname = $sex = $birthdate = $contact = $address = $email = $password = $role = '';
$firstnameErr = $lastnameErr = $sexErr = $birthdateErr = $contactErr = $addressErr = $emailErr = $passwordErr = $roleErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = clean_input($_POST['firstname']);
    $lastname = clean_input($_POST['lastname']);
    $sex = clean_input($_POST['sex']);
    $birthdate = clean_input($_POST['birthdate']);
    $contact = clean_input($_POST['contact']);
    $address = clean_input($_POST['address']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
    $role = clean_input(isset($_POST['role']) ? $_POST['role'] : 'Guest');

    if (empty($firstname)) {
        $firstnameErr = 'First name is required';
    } else if (!preg_match('/^[a-zA-Z\s]+$/', $firstname)) {
        $firstnameErr = 'First name must contain letters and spaces only';
    }

    if (empty($lastname)) {
        $lastnameErr = 'Last name is required';
    } else if (!preg_match('/^[a-zA-Z\s]+$/', $lastname)) {
        $lastnameErr = 'Last name must contain letters and spaces only';
    }

    if (empty($sex)) {
        $sexErr = "sex is required";
    }

    if (empty($birthdate)) {
        $birthdateErr = 'Birthdate is required';
    }

    if (empty($contact)) {
        $contactErr = 'Contact number is required';
    } else if (!preg_match('/^[0-9]+$/', $contact)) {
        $contactErr = 'Contact number must contain numbers only';
    }

    if (empty($address)) {
        $addressErr = 'Address is required';
    }

    if (empty($email)) {
        $emailErr = 'Email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'Invalid email format';
    }

    if (empty($password)) {
        $passwordErr = 'Password is required';
    } else if (strlen($password) < 8) {
        $passwordErr = 'Password must be at least 8 characters';
    } else if (!preg_match('/[A-Z]/', $password)) {
        $passwordErr = 'Password must contain at least one uppercase letter';
    } else if (!preg_match('/[a-z]/', $password)) {
        $passwordErr = 'Password must contain at least one lowercase letter';
    } else if (!preg_match('/[0-9]/', $password)) {
        $passwordErr = 'Password must contain at least one number';
    }

    if (empty($role)) {
        $role = 'Guest';
    }

    if (empty($firstnameErr) && empty($lastnameErr) && empty($sexErr) && empty($birthdateErr) && empty($contactErr) && empty($addressErr) && empty($emailErr) && empty($passwordErr)) {
        $userObj->firstname = $firstname;
        $userObj->lastname = $lastname;
        $userObj->sex = $sex;
        $userObj->birthdate = $birthdate;
        $userObj->contact = $contact;
        $userObj->address = $address;
        $userObj->email = $email;
        $userObj->password = $password;
        $userObj->role = $role;

        $result = $userObj->signup();

        echo json_encode($result);
        exit();

    } else {
        echo json_encode([
            'status' => 'error',
            'message' => implode('<br>', array_filter([
                $firstnameErr,
                $lastnameErr,
                $sexErr,
                $birthdateErr,
                $contactErr,
                $addressErr,
                $emailErr,
                $passwordErr
            ]))
        ]);
        exit();
    }
}