<?php
namespace App\Provider\View;

class ViewProvider
{

    public function provideView( $className)
    {
        return new $className();
    }
}