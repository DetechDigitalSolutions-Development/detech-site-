<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function shareMenuData()
    {
        view()->share('menuItems', config('menu.menuItems'));
    }
}
