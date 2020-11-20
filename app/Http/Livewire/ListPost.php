<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class ListPost extends Component
{
    public $updateID='';
    public $updateBody='';
    protected $listeners = [
        'postCreated' => '$refresh'
    ];
    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.list-post',['posts'=>$posts]);
    }
    public function showUpdateForm($postId){
        $post = Post::find($postId);
        $this->updateBody = $post->body;
        $this->updateID = $postId;
    }
    public function updatePost($postId){
        $post = Post::find($postId);
        $post->body = $this->updateBody;
        $post->save();
        $this->updateID = '';
    }
    public function deletePost($postId){
        $post = Post::find($postId);
        $post->delete();
    }
}
