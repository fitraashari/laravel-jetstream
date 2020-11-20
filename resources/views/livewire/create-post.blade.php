<div class="p-4">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    {{-- {{$body}} --}}
    <textarea wire:model="body" 
    class="p-2 border shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm rounded-md" rows="3" placeholder="Post something...">
    </textarea>
                <div class="flex justify-end mt-2">
                    <button wire:click="createPost" class="bg-blue-600 p-2 text-white hover:bg-blue-400 rounded-md">Post</button>
                </div>
</div>
