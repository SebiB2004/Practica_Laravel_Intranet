@section('content')
    <h1>Lista angajatilor</h1>

    @if($angajati->count())
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Email</th>
                    <th>Poziție</th>
                    <th>Creat la</th>
                </tr>
            </thead>
            <tbody>
                @foreach($angajati as $angajat)
                    <tr>
                        <td>{{ $angajat->id }}</td>
                        <td>{{ $angajat->name }}</td>
                        <td>{{ $angajat->email }}</td>
                        <td>{{ $angajat->position }}</td>
                        <td>{{ $angajat->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nu exista angajati in baza de date.</p>
    @endif
@endsection
