<?php

class Auth extends Model{

function __construct(){
    parent::__construct();
}

//Cheks whther a user exists as in login credentials
function validateLogIn($email,$password){
    if($this->db->select("Customer",array("Email"),array("Email"=>$email,"password"=>sha1($password)),1,0,0,"ss"))
        return "Customer";
    if($this->db->select("Coach",array("Email"),array("Email"=>$email,"password"=>sha1($password)),1,0,0,"ss"))
        return "Coach";
    if($this->db->select("Admin",array("Email"),array("Email"=>$email,"password"=>sha1($password)),1,0,0,"ss"))
        return "Admin";
    return NULL;
}



}





?>