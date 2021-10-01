<x-app-layout>
    <div class="max-w-6xl mx-auto bg-white-500 p-3">
<!--            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Nuevo
            </button>-->

             <button type="button" title="Create a product" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-plus-circle"></i>
            </button>

        <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
            <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Name')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Description')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Price')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Brand')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light" colspan="3">
                    {{__('Acciones')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$product->name}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$product->description}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{'$' . $product->price}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$product->brand->name}}
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <form href="{{route('product.destroy',$product->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        {{ $products->links()}}
    </div>
</x-app-layout>

