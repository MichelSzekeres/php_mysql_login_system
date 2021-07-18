<?php
class user extends database{

    public static function login(){
        parent::connect();
        //print_r(parent::$conn);
    }

    public static function logout(){
        // empty all the sessions.
        $_SESSION = array();
        // distroy the sessions and cookies. (No just session data is destroyed)
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        // distroy officialy all the sessions.
        sessions_destroy();
        // return the page to index of the domain.
        header("Location: ".(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://').$_SERVER['HTTP_HOST']).die();
    }
    public static function is_logged_in(){
        // change these based on inserted started sessions.
        return isset($_SESSION['username']) || isset($_SESSION['first_name']) || isset($_SESSION['last_name']) || isset($_SESSION['email']) ? false : true;
    }
}