<?php

namespace App\Provider\Controller;

use App\Provider\View\ViewProvider;
use Controller\BaseController;


class ControllerProvider
{
 public function provide($className):BaseController
 {
     return new $className(new ViewProvider());

 }
}