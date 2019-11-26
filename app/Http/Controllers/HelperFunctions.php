<?php
namespace App\Http\Controllers;

use App\User;

trait HelperFunctions{

    /**
     * Handles USSD Registration Request
    */
    public function ussdRegister($details, $phone)
    {
        $input = explode(",",$details);//store input values in an array
        $full_name = $input[0];//store full name
        $pin = $input[1];        
       
        $user = new User;
        $user->name = $full_name;
        $user->phone = $phone;
        // You should encrypt the pin
        $user->pin = $pin;
        $user->save();
 
        return "success";
    }
 
    /**
     * Handles Login Request
     */
    public function ussdLogin($details, $phone)
    {
        $user = User::where('phone', $phone)->first();

        if ($user->pin == $details ) {
            return "Success";           
        } else {
            return $this->ussd_stop("Login was unsuccessful!");
        }
    }
}