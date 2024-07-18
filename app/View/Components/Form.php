<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\Request;

class Form extends Component
{
    public $action;
    public $buttonText;

    public function __construct($action, $buttonText)
    {
        $this->action = $action;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.form');
    }
}
