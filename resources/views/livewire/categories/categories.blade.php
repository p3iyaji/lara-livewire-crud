<div class="mt-4 md">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Catetgories') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">

                <button wire:navigate href="#" class="btn btn-primary btn-sm float-right">Add New Category</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <button wire:navigate href="#" class="btn btn-info btn-sm">Edit</button>
                                <button wire:navigate href="#" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        <tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
