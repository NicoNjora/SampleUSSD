<?php
namespace App\Http\Controllers;

trait UssdMenuTrait{

    public function newUserMenu(){
        $start  = "Welcome to SampleUSSD\n";
        $start .= "1. Register\n";
        $start .= "2. Get Information\n";
        $start .= "3. Exit";
        $this->ussd_proceed($start);
    }
    public function returnUserMenu(){
        $con  = "Welcome back to SampleUSSD\n";
        $con .= "1. Login\n";
        $con .= "2. Exit";
        $this->ussd_proceed($con);
    }
    public function servicesMenu(){
        $serve = "What service are you looking for?\n";
        $serve .= "1. Subscribe to updates\n";
        $serve .= "2. Information on the service\n";       
        $serve .= "3. Logout";
        $this->ussd_proceed($serve);
    }
}