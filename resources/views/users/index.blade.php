<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Użytkownicy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>imie</th>
                                <th>nazwisko</th>
                                <th>numer_telefonu</th>
                                <th>email</th>
                                <th>miasto</th>
                                <th>ulica</th>
                                <th>building_number</th>
                                <th>utworzono</th>
                                <th>edytowano</th>
                                <th>akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->street }}</td>
                                <td>{{ $user->building_number }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <form method="GET" action="/users/delete/{{ $user->id }}">
                                        @csrf
                                        <button>usuń</button>
                                    </form>
                                    {{-- <a @method(DELETE) href="/users/delete/{{ $user->id }}">usuń</a> --}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <script>
    $(function() {
        $('.delete').click(function() {
            $.ajax({
                method: "DELETE",
                url: '/users/delete',
                })
                .done(function( response ) {
                    alert( "Usunięto urzytkownika: " );
            });
        });
    });
</script> --}}
