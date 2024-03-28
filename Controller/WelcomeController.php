<?php

namespace Controller;

class WelcomeController extends BaseController
{


    public function welcome(){

        $this->viewProvider()->provideView(WelcomeView::class);

    }
}