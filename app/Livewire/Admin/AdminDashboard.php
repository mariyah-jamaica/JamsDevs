<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    #[layout('components.layout.dashboard')]
    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}
