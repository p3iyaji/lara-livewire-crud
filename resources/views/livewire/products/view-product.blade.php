<div class="offset-3 col-6 mt-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-header">
            <div class="flex items-center justify-end mt-4">
                <x-button wire:navigate href="/products" class="ms-4">
                    {{ __('Back') }}
                </x-button>

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ asset('./storage/imgs/'. $product->photo) }}" width="200px" height="200px" alt="...">
                        </td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td class="font-bold">{{ $product->prod_name }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>Quantity in-stock</th>
                        <td>{{ $product->qty }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
