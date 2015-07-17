<?php
require_once '../dao/LoginDetailsDAO.php';
class LoginDetails
{
    
    private $username;
    private $password;
    
    public function setUserName($username) {
        $this->username = $username;
    }
    
    public function getUserName() {
        return $this->username;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function mapIncomingParams($username,$password) {
        $this->setUserName($username);
        $this->setPassword($password);
    }
    
    public function verifyLoginDetails(){
        $loginDetailsDAO = new LoginDetailsDAO();
        $returnVerifyMessage = $loginDetailsDAO->verify($this);
        return $returnVerifyMessage;
    }
}          
?>