<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowHelp extends Component
{
    public bool $showHelp = false;

    public function toggleHelp(): void
    {
        $this->showHelp = ! $this->showHelp;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.show-help');
    }
}
