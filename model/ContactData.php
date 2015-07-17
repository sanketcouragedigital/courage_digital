<?php

require_once '../dao/ContactDataDAO.php';
require_once 'Mail.php';
class ContactData
{
	
	private $name;
	private $email;
	private $message;
	private $enquiry;
	private $phone;
	private $country;
	private $retunData;
	
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEnquiry($enquiry) {
        $this->enquiry = $enquiry;
    }
    
    public function getEnquiry() {
        return $this->enquiry;
    }
    
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    
    public function getPhone() {
        return $this->phone;
    }
    
    public function setCountry($country) {
        $this->country = $country;
    }
    
    public function getCountry() {
        return $this->country;
    }
    
    public function setMessage($message) {
        $this->message = $message;
    }
    
    public function getMessage() {
        return $this->message;
    }
    
    
	public function processContactForm()
    {
		   
		if ($this->enquiry == 'business') {
            $this->retunData = $this->saveContactDetails(); //$name,$email,$country,$phone,$message
        }
        else if($this->enquiry == 'job') {
            $this->retunData = $this->sendEmailToAdmin(); //$name,$email,$message
        }
        return $this->retunData;
	}

	public function mapIncomingParams($name,$email,$enquiry,$country,$phone,$message) {
		$this->setName($name);
        $this->setEmail($email);
        $this->setEnquiry($enquiry);
        $this->setCountry($country);
        $this->setPhone($phone);
        $this->setMessage($message);
	}
	
	public function saveContactDetails() {
            
	    $contactDataDAO = new ContactDataDAO();
        $retunDataTest = $contactDataDAO->save($this);
        return $retunDataTest;
	}
	
	public function sendEmailToAdmin() {
        $emailSender = new Mail();
        $emailSender->setTo("sanketdhotre@couragedigital.com");
        $emailSender->setFrom($this->email);
        $emailSender->setMessage($this->createEmailMessageBodyForContact());
        $emailSender->setSubject("An Email from ".$this->name.".");
        return $emailSender->sendEmail($emailSender);

	}
    
    public function getAllContacts(){
        $contactDataDAO = new ContactDataDAO();
        $retunShowData = $contactDataDAO->show();
        return $retunShowData;
    }
    
    public function deleteContacts($email){
        $contactDataDAO = new ContactDataDAO();
        $this->setEmail($email);
        $retunDeleteMessage = $contactDataDAO->delete($this);
        return $retunDeleteMessage;
    }
    
    public function createEmailMessageBodyForContact() {
        $emailMessage = "First Name: ".$this->name."\n";
        $emailMessage.= "Email: ".$this->email."\n";
        $emailMessage.= "Comments: ".$this->message;
        return $emailMessage;
    }
}          
?>