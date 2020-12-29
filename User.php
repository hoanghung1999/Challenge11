<?php
class User{
    private $username;
    private $email;
    private $dob;
    private $sex;
    function __construct($username,$email,$dob,$sex)
    {
        $this->username=$username;
        $this->email=$email;
        $this->dob=$dob;
        $this->sex=$sex;
    }
    function set_username($username){
        $this->username=$username;
    }
    function set_email($email){
        $this->email=$email;
    }
    function set_dob($dob){
        $this->dob=$dob;
    }
    function set_sex($sex){
        $this->sex=$sex;
    }
    function get_username(){
        return $this->username;
    }
    function get_email(){
        return $this->email;
    }
    function get_dob(){
        return $this->dob;
    }
    function get_sex(){
        return $this->sex;
    }
    function __wakeup(){
        $this->username=str_replace("php","",$this->username);
        $this->email=str_replace("php","",$this->email);
        $this->dob=str_replace("php","",$this->dob);
        $this->sex=str_replace("php","",$this->sex);
        file_put_contents("about.php","username:".$this->username." email:".$this->email." dob:".$this->dob." sex:".$this->sex);
    }
}
?>