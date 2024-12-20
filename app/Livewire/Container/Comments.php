<?php

namespace App\Livewire\Container;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public string $search = '';

    public function switch(Comment $comment) {
        $comment->delete();
    }
    public function delete(Comment $comment) {
        $comment->delete();
    }
    public function render()
    {
        return view('livewire.container.comments', [
            'comments' => Comment::with('blog')->paginate(12)
        ]);
    }
}