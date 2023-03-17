<?php

namespace App\View\Components;

use Illuminate\View\Component;

class network_connections extends Component
{
    public $users;
    public $sentreqs;
    public $receivereqs;
    public $connections;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users, $sent_requests, $receive_requests, $connections)
    {
        $this->users = $users;
        $this->sentreqs = $sent_requests;
        $this->receivereqs = $receive_requests;
        $this->connections = $connections;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.network_connections');
    }
}
