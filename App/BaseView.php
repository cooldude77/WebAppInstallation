<?php

namespace App;

abstract class BaseView implements BaseViewInterface
{

    /**
     * @param string $filePath
     * @return void
     */
    public function render( $filePath)
    {
        require_once \ConfigPHP::templatePath.$filePath;
        exit();
    }

}