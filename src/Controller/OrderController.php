<?php

namespace App\Controller;
use App\Controller\AppController;

class OrderController extends AppController
{
function order(){
if (!empty($this->params['form']))
{
if($this->User->save($this->params['form']))
{
$this->flash('Registration Successful','/Orders/placeorder');
}
else
{
$this->flash('Not succeeded','/Orders/placeorder');
}
}
}
 public function index()

    {



    }
}
?>