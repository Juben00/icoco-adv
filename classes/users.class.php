<?php

require_once '../dbconnection.php';

class User
{
    public $id;
    public $firstname;
    public $lastname;
    public $sex;
    public $birthdate;
    public $contact;
    public $address;
    public $email;
    public $password;
    public $role;

    protected $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function signup()
    {
        try {
            $sql = 'SELECT * FROM users WHERE email = :email';
            $chkstmt = $this->db->connect()->prepare($sql);
            $chkstmt->bindParam(':email', $this->email);
            $chkstmt->execute();

            if ($chkstmt->rowCount() > 0) {
                return ['status' => 'error', 'message' => 'Account already exists'];
            } else {
                $sql = 'INSERT INTO users (first_name, last_name, sex, birthdate, contact_number, address ,email, password, role) VALUES (:first_name, :last_name, :sex, :birthdate, :contact_number, :address, :email,:password, :role)';
                $stmt = $this->db->connect()->prepare($sql);

                $stmt->bindParam(':first_name', $this->firstname);
                $stmt->bindParam(':last_name', $this->lastname);
                $stmt->bindParam(':sex', $this->sex);
                $stmt->bindParam(':birthdate', $this->birthdate);
                $stmt->bindParam(':contact_number', $this->contact);
                $stmt->bindParam(':address', $this->address);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':role', $this->role);

                // Hash the password before saving to the database
                $this->password = password_hash($this->password, PASSWORD_DEFAULT);

                $stmt->bindParam(':password', $this->password);

                if ($stmt->execute()) {
                    return ['status' => 'success', 'message' => 'Account created successfully'];
                } else {
                    return ['status' => 'error', 'message' => 'Failed to create account'];
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function login()
    {
        try {
            $sql = 'SELECT * FROM users WHERE email = :email';
            $stmt = $this->db->connect()->prepare($sql);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($this->password, $user['password'])) {

                    session_start();
                    session_regenerate_id(delete_old_session: true);
                    $_SESSION['user'] = $user;

                    return ['status' => 'success', 'message' => 'Login successful', 'user' => $user];
                } else {
                    return ['status' => 'error', 'message' => 'Invalid email or password'];
                }
            } else {
                return ['status' => 'error', 'message' => 'Invalid email or password'];
            }
        } catch (Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

}