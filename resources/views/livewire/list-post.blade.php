<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @foreach ($posts as $post)
    <div class="bg-white my-4 p-4 shadow-xl rounded-md">
        <div class="">
            <span class="text-xl font-bold">{{$post->user->name}}</span>
            <span class="text-gray-500">{{$post->created_at->diffForHumans()}}</span>
            <span class="float-right">
            @if (auth()->user()->id==$post->user_id)
            <button wire:click="showUpdateForm({{$post->id}})" class="bg-teal-600 text-white p-1 rounded-md hover:bg-teal-400">Edit</button>
            <button 
            onCLick="return confirm('Apakah yakin?') || event.stopImmediatePropagation()" wire:click="deletePost({{$post->id}})" class="bg-red-600 text-white p-1 rounded-md hover:bg-red-400">Delete</button>

            @endif
            </span>
        </div>
        <span>{!!nl2br(e($post->body))!!}</span>
        @if ($post->id == $updateID)
    <textarea
    wire:model="updateBody"
    class="p-2 border shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm rounded-md" rows="3">{{$post->body}}</textarea>
        <button wire:click="updatePost({{$post->id}})" class="mt-2 bg-blue-600 p-2 text-white hover:bg-blue-400 rounded-md">Update</button>
        @endif
    </div>
    @endforeach
</div>
