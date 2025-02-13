<div class="mt-4 md">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between mt-2 font-bold">
                    <button wire:navigate href="create-category" class="btn btn-primary py-2">Add New Category</button>
                    <form wire:submit="search" class="col-3 float-right rounded-md space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <input type="text" class="form-control rounded-md" wire:model="query" placeholder="Search">

                        <button type="submit"></button>
                    </form>
                </div>
                <livewire:flashmessage />

            </div>

            <div class="card-body">

                <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ucfirst($category->name) }}</td>
                                <td>{{ Str::limit($category->description, 40, '...') }}</td>
                                <td>
                                    <button wire:navigate href="view-category/{{ $category->id }}" class="btn btn-info btn-sm">View</button>
                                    <button wire:navigate href="update-category/{{ $category->id }}" class="btn btn-primary btn-sm">Edit</button>
                                    <button wire:click="delete({{ $category->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>

            </div>
        </div>
</div>
