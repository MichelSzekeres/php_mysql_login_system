<?php
class user extends database{

    public static function login(){
        #check request method
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            #check post name matches
            $all_post_correct = isset($_POST['username']) && isset($_POST['password']);
            $all_post_correct ? true:die('Post names are not matching');
            #check database connection if not connected connect to default database
            isset(parent::$conn) ? true : parent::connect();
            #set database to use take unit from config file
            parent::select_db(user_db);
            #assign posts to variables
            $email = $_POST["username"];
            $password = $_POST["password"];
            #query to execute
            $sql = "SELECT * FROM users WHERE email = (?)";
            #prepare data to check
            $stmt = parent::$conn->prepare($sql);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            #get the result from the query
            $result = $stmt->get_result();
            if($result->num_rows == 1){
                while($row = $result->fetch_assoc()) {
                    #compare password entered and password in database
                    if(password_verify($password, $row['password'])){
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        $_SESSION['email'] = $row['email'];
                    };
                }
            }
            $stmt->close();

            //password_hash($,PASSWORD_DEFAULT);
        }

    }

    public static function logout(){
        #empty all the sessions.
        $_SESSION = array();
        #distroy the sessions and cookies. (No just session data is destroyed)
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        #distroy officialy all the sessions.
        session_destroy();
        #return the page to index of the domain.
        header("Location: ".(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://').$_SERVER['HTTP_HOST']).die();
    }
    public static function is_logged_in(){
        #change these based on inserted started sessions.
        return isset($_SESSION['username']) || isset($_SESSION['first_name']) || isset($_SESSION['last_name']) || isset($_SESSION['email']) ? true: false;
    }
}
