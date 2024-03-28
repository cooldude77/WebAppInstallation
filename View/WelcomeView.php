<?php

namespace View;

use App\BaseView;

class WelcomeView extends BaseView
{

 public function renderView()
 {
     $this->render('welcome.php');
 }

}