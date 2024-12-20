<?php

namespace App\Livewire\Container;

use App\Enums\BLogStatus;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Comments extends Component
{
    use WithPagination;

    public string $search = '';

    public function switch(Comment $comment) {
        $comment->update(['status' => $comment->status === BLogStatus::Draft ? BLogStatus::Published : BLogStatus::Draft]);

        session()->put('success', trans('message.update'));
        $this->dispatch('refresh-alert');
    }
    public function delete(Comment $comment) {
        $comment->delete();
        session()->put('success', trans('message.delete'));

        $this->dispatch('refresh-alert');
    }
    public function render()
    {
        return view('livewire.container.comments', [
            'comments' => Comment::search($this->m)
            ->with('blog')
            // ->query(fn(Builder $query) => $query->with('blog'))
            ->paginate(12)
        ]);
    }
}