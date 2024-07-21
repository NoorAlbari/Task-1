<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>


<div class="py-12">

    <x-success-status class="mb-4" :status="session('success')"/>
    <x-validation-errors class="mb-4" :errors="$errors"/>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form method="POST" action="{{ url('add-product') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Product Name')" />
                        <x-text-input type="text"  id="name"  name="name" :value="old('name')"  class="block mt-1 w-full"  required autofocus />
                    </div>
                    
                    <div>
                        <x-input-label for="description" :value="__('Product Description')" />
                        <x-text-input type="text"  id="description"  name="description" :value="old('description')"  class="block mt-1 w-full" />
                    </div>
                    <div>
                        <x-input-label for="price" :value="__('Product Price')" />
                        <x-text-input type="text"  id="price"  name="price" :value="old('price')"  class="block mt-1 w-full"  required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ms-4">
                            {{ __('Add') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
