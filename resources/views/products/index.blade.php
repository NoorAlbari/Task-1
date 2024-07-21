
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The list of Products') }}
            <span><a href="{{ url('add-product') }}" class="btn btn-primary">create</a></span>
        </h2>
    </x-slot>


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-status class="mb-4" :status="session('success')"/>
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Product Description</th>
                      <th>Product Price</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    @forelse($product as $products)
                    <tbody>
                    <tr>
                        <td>{{$products->id}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->description}}</td>
                        <td>{{$products->price}}</td>
                        <td>
                            <a href="{{url('/edit-product/'.$products->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{url('/delete-product/'.$products->id)}}" method="POST" class="btn btn-danger">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6">No More Records</td>
                      </tr>
                    @endforelse
                   </tbody>
               </table>
            </div>
        </div>

</div>
</x-app-layout>
