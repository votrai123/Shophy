<?php


namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;

class ComingsoonController extends NonAuthController
{
    public function __construct()
    {
        parent::__construct();
    }
    //
    public function getComingsoon(){
        return $this->view('partials.coming-soon');
    }
}
