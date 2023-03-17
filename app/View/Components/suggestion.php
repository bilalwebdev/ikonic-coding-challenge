<?php

namespace App\View\Components;

use Illuminate\View\Component;

class suggestion extends Component
{
    public $name;
    public $email;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $email, $id)
    {
        $this->email = $email;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.suggestion');
    }
}
