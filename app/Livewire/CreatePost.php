<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(): void {
        $this->validate();

        $this->form->save();

        $this->success = true;

    }

    public function validateTitle(): void
    {
        $this->validateOnly('form.title');
    }

    public function updatedFormTitle(): void
    {
        $this->form->title = Str::headline($this->form->title);
    }
}
