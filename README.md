# TYBCS-Web-Development-Practical-Assignments-with-Solution
All Web Development Assignments are here with solutions.

# CodeIgniter

## Where to find CodeIgniter Assignment program?
- First goto app/Views/A1

//A1.php code 

 && app/Views/A2 

 //A2.php code

- Then goto app/Controllers/Practical.php  -- write the following code

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



- And then last goto app/config/Routes.php  -- write the following code

$routes->get('/', 'Home::index');
$routes->get('/css', 'Practical::disp');
$routes->get('/number', 'Practical::num');