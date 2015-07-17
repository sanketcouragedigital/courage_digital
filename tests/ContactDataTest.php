<?php
require_once('C:/wamp/www/courage_digital/ContactData.php');
    class ContactDataTest extends PHPUnit_Framework_TestCase
    {
        private $connect;
        private $fname;
        private $femail;
        private $fsendmail;
        private $fenquiry;
        private $fphone;
        private $fcountry;
            
        public function setUp(){}
        public function tearDown() {
            $connect = null;
            $fname = null;
        }
        public function testExtractIncomingParams(){
            $connect = new ContactData();
            $fname = "Prakash";
            $femail = "prakash@gmail.com";
            $fsendmail = "hi";
            $fenquiry = "job";
            $fphone = "8097375414";
            $fcountry = "Spain";
            $this->assertTrue($connect->extractIncomingParams($fname, $femail, $fenquiry, $fcountry, $fphone, $fsendmail)!==false);
        }

    }
?>
