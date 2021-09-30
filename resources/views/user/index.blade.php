<x-app-layout>
    <div class="max-w-6xl mx-auto bg-indigo-500 p-3">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Nuevo
            </button>
        <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
            <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Name')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('Email')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    {{__('EmailVerifiedAt')}}
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light" colspan="3">
                    {{__('Acciones')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$user->name}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$user->email}}
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        {{$user->email_verified_at}}
                    </td>
                    <td>
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Ver
                        </button>
                    </td>
                    <td>
                        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Borrar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        {{ $users->links()}}
    </div>
</x-app-layout>

