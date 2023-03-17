<?php

namespace App\View\Components;

use App\Models\UserConnections;
use Illuminate\View\Component;

class Request extends Component
{

    public $mode;
    public $name;
    public $email;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode, $username = null, $useremail = null, $id = null)
    {
        $this->mode = $mode;
        $this->name = $username;
        $this->email = $useremail;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function render()
    {
        return view('components.request');
    }
}
