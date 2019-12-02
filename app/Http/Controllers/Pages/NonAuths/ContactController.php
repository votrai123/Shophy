<?php


namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;

class ContactController extends NonAuthController
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    //
    public function getContact(){
        return $this->view('partials.contact');
    }
}
