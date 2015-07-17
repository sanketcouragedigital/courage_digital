<?php

require_once 'BaseDAO.php';
class ContactDataDAO {
    
    private $con;
    private $data;
    private $getContacts;
    private $deleteMessage;
    
    // Attempts to initialize the database connection using the supplied info.
    public function ContactDataDAO() {
        $baseDAO = new BaseDAO();
        $this->con = $baseDAO->getConnection();
    }
    
    //Saves the supplied user to the database.
    public function save($contact) {
        //include_once ('db_config.php');
        $sql = "INSERT INTO contact_us(name,email,country,phone,message)VALUES('".
        $contact->getName()."', '".
        $contact->getEmail()."','".
        $contact->getCountry()."','".
        $contact->getPhone()."','".
        $contact->getMessage()."')";
        
        try {
            $isInserted = mysqli_query($this->con,$sql);
            if ($isInserted) {
                $this->data = "CONTACT_SAVED";
            } else {
                $this->data = "ERROR";
            } 
        } catch(Exception $e) {
            echo 'SQL Exception: ' .$e->getMessage();
        }
        return $this->data;
    }
    
    //Shows the database users
    public function show() {
        $sql="SELECT name,email,country,phone, message FROM contact_us";
        try {
            $select=mysqli_query($this->con,$sql);
            $this->getContacts=array();
            while ($rowdata = mysqli_fetch_assoc($select)) {
                $this->getContacts[]=$rowdata;
            }
        } catch(Exception $e) {
            echo 'SQL Exception: ' .$e->getMessage();
        }
        return $this->getContacts;
    }
    
    // Deletes the supplied user from the database.
    public function delete($deleteData) {
        $query="DELETE FROM contact_us WHERE email = '".$deleteData->getEmail()."'";
        
        try{
            $delete=mysqli_query($this->con,$query);
            if($delete){
                $this->deleteMessage = array("result" => 1, "message" => "Successfully user deleted!");
            } else {
                $this->deleteMessage = array("result" => 0, "message" => "Error!");
            }
        } catch(Exception $e) {
            echo 'SQL Exception: ' .$e->getMessage();
        }
        return $this->deleteMessage;
    }
}
?>