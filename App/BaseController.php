<?php

namespace Controller;

use App\BaseView;
use App\BaseViewInterface;
use App\Provider\View\ViewProvider;

class BaseController
{

    /**
     * @var ViewProvider
     */
    private $viewProvider;

    public function __construct(ViewProvider $viewProvider)
    {

        $this->viewProvider = $viewProvider;
    }

    public function provideView(BaseView $baseView)
    {
        return $this->viewProvider->provideView($baseView);

    }
    protected function getViewProvider()
    {
        return $this->viewProvider;
    }
}