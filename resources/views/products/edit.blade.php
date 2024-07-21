<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product Info') }}
        </h2>
    </x-slot>


<div class="py-12">

    <x-validation-errors class="mb-4" :errors="$errors"/>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form action="{{ url('update-product/'.$product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Product Name')" />
                        <x-text-input type="text"  id="name"  name="name" :value="$product->name"  class="block mt-1 w-full"  required autofocus />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Product Description')" />
                        <x-text-input type="text"  id="description"  name="description" :value="$product->description"  class="block mt-1 w-full" />
                    </div>
                    <div>
                        <x-input-label for="price" :value="__('Product Price')" />
                        <x-text-input type="text"  id="price"  name="price" :value="$product->price"  class="block mt-1 w-full"  required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ms-4">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
