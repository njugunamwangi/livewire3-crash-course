<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowPosts extends Component
{
    #[Url(as: 'q', history: true)]
    public string $search = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::where('title', 'LIKE', '%' . $this->search. '%')->get(),
        ]);
    }
}
