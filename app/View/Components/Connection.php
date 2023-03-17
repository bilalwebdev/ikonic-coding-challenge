<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Connection extends Component
{

    public $name;
    public $email;
    public $id;
    public $commonfriends;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($username, $useremail, $id, $comfriends)
    {
        $this->name = $username;
        $this->email = $useremail;
        $this->id = $id;
        $this->commonfriends = $comfriends;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.connection');
    }
}
