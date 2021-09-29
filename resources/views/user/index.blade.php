<x-app-layout>
    <div class="max-w-6xl mx-auto bg-indigo-500 p-3">
            <button class="bg-black-500 hover:bg-black-700 text-white font-bold py-2 px-4 rounded">
                Nuevo
            </button>
        <table>
            <thead>
            <tr>
                <th>
                    {{__('Name')}}
                </th>
                <th>
                    {{__('Email')}}
                </th>
                <th>
                    {{__('EmailVerifiedAt')}}
                </th>
                <th colspan="3">
                    {{__('Acciones')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->email_verified_at}}
                    </td>
                    <td>
                        <button class="bg-black-500 hover:bg-black-700 text-white font-bold py-2 px-4 rounded">
                            Ver
                        </button>
                    </td>
                    <td>
                        <button class="bg-black-500 hover:bg-black-700 text-white font-bold py-2 px-4 rounded">
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
        {{ $users->links()}}
    </div>
</x-app-layout>

