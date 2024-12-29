<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SideBarToggle extends Component
{
    public $sideBarOpen = true;

    public function toggleSideBar()
    {
        $this->sideBarOpen = !$this->sideBarOpen;
    }
    public function render()
    {
        return view('livewire.side-bar-toggle');
    }
}
