<div class="offset-3 col-6 mt-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-header">
            {{ $category->name }}
        </div>
        <div class="card-body">
            {{$category->description}}
            <div class="flex items-center justify-end mt-4">

                <x-button wire:navigate href="/categories" class="ms-4">
                    {{ __('Back') }}
                </x-button>
            </div>
        </div>

    </div>
</div>
