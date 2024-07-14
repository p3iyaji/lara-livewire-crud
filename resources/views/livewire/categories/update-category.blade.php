<div class="offset-3 mt-4 col-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-header">
            <h2 class="font-bold">Update Category</h2>
        </div>
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" wire:model="form.name" class="form-control" id="name">
                </div>
                @error('name')<span class="text-danger">{{$message}}</span> @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" wire:model="form.description" id="description" rows="3"></textarea>
                </div>
                @error('description')<span class="text-danger">{{$message}}</span> @enderror
                <div class="flex items-center mt-4">


                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-button wire:navigate href="/categories" class="ms-4">
                        {{ __('Back') }}
                    </x-button>
                    <x-button class="ms-1 bg-indigo-600">
                        {{ __('Save') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>

</div>
