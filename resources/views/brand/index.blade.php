<x-app-layout>
    <div class="max-w-6xl mx-auto bg-indigo-500 p-3">
<!--            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Nuevo
            </button>-->
        
             <button type="button" title="Create a brand" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light" colspan="3">
                    {{__('Acciones')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$brand->name}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$brand->description}}
                    </td>
                    <td>
<!--                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Borrar
                        </button>-->
                    <form action="" method="POST">

                        <button type="button" title="edit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                        </button>

                        <button type="button" title="edit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-edit  fa-lg"></i>
                        </button>

                        @csrf
                        @method('delete')

                        <button type="submit" title="delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        {{ $brands->links()}}
    </div>
</x-app-layout>

