<?php
require_once '../../dao/BaseDAO.php';
class LoginDetailsDAO {
    
    private $con;
    private $msg;
    
    // Attempts to initialize the database connection using the supplied info.
    public function LoginDetailsDAO() {
        $baseDAO = new BaseDAO();
        $this->con = $baseDAO->getConnection();
    }
    
    // Verify the supplied user from the database.
    public function verify($checkData) {       
        $query="SELECT * FROM adminlogin WHERE username='".$checkData->getUserName()."' and password='".$checkData->getPassword()."'";
        
        try {
        $login=mysqli_query($this->con,$query);
        $count=mysqli_num_rows($login);
            if($count==1){
                if(!isset($_SESSION)) { 
                    session_start(); 
                } 
                $_SESSION['username']= $checkData->getUserName();
                $this->msg = "LOGGED_IN";
            }
            else {
                $this->msg = "LOGIN_FAILED";
            }
        } catch(Exception $e) {
            echo 'SQL Exception: ' .$e->getMessage();
        }
        return $this->msg;
    }
}
?>