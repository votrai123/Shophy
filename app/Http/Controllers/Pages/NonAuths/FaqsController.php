<?php


namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;

class FaqsController extends NonAuthController
{
    public function __construct()
    {
        parent::__construct();
    }
    //
    public function getFaqs(){
        return $this->view('partials.faqs');
    }
}
