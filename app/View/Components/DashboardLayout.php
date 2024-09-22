<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): view
    {
        return view('layouts.dashboard');
    }
}