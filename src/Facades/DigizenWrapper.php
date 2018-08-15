<?php

namespace IrvisOzuna\DigizenWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class DigizenWrapper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'digizenwrapper';
    }
}
