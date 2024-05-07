<?php

namespace Jian1098\TpConstant;

use Jian1098\TpConstant\Command\Make\Constant;

class Service extends \think\Service
{
    public function register()
    {
    }

    public function boot()
    {
        $this->commands([
            Constant::class,
        ]);
    }
}