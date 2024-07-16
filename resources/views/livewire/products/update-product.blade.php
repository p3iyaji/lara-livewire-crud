<div class="offset-3 col-6 mt-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h2 class="font-bold">Update Product</h2>
        </div>
        <div class="card-body">
            <form wire:submit="update">
                <div class="mb-3">
                    <label for="prod_name" class="form-label">Product Name</label>
                    <input type="text" wire:model="form.prod_name" class="form-control" id="prod_name">
                    @error('prod_name')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" wire:model="form.description" id="description" rows="3"></textarea>
                    @error('description')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" wire:model="form.price" class="form-control" id="price">
                    @error('price')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" wire:model="form.qty" class="form-control" id="qty">
                    @error('qty')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select wire:model="form.category_id" id="category_id" class="form-control">
                        <option value="" selected>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Product Image</label><br/>
                    @if($photo)
                        <img src="{{ $photo->temporaryUrl() }}" class="img img-circle mb-3" width="50px">
                    @endif
                    <input type="file" wire:model='form.photo' class="form-control" id="photo">
                    @error('photo')<span class="text-danger">{{ $message }}</span>@enderror
                    <div wire:loading wire:target="photo" class="text-sm text-gray-500 italic">Uploading...</div>
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
