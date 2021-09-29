<x-app-layout>
    <div class="max-w-6xl mx-auto bg-indigo-500 p-2">
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

