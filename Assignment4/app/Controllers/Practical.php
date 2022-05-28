<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Practical extends BaseController
{
    public function disp()
    {
        return view('A1');
    }
    
    public function num()
    {
        return view('A2');
    }
    
}
