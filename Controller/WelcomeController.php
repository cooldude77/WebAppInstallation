<?php

namespace Controller;

use View\WelcomeView;

class WelcomeController extends BaseController
{


    public function welcome(){

        $view = $this->getViewProvider()->provideView(WelcomeView::class);

    }


}