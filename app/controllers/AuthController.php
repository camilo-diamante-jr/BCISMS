<?php

class AuthController extends Controller
{
    private $loginModel;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->loginModel = $this->loadModel("LoginModel");
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); // Ensure session is started
        }
    }

    public function viewLogin()
    {
        $this->renderView("/auth/login");
    }


    public function loginAuthentication()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $password = htmlspecialchars(trim($_POST['password'] ?? ''));

            $result = $this->loginModel->login($email, $password);

            $response = [];

            if (isset($result['success']) && $result['success'] === true) {
                $_SESSION['user_id']  = $result['user_id'];
                $_SESSION['email']    = $result['email'];
                $_SESSION['userType'] = $result['userType'];

                $response = [
                    'status' => 'success',
                    'message' => 'Login successful',
                    'userType' => $result['userType']
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => $result['message'] ?? 'Login failed'
                ];
            }

            // Always send clean JSON
            echo json_encode($response);
            exit;
        } else {
            require '../app/views/auth/login.php';
        }
    }



    public function logout()
    {
        // Unset all session variables
        $_SESSION = [];

        // Destroy session
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }

        // Redirect to login page
        header("Location: /login");
        exit;
    }
}
