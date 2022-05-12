@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jméno</th>
                        <th>Příjmení</th>
                        <th>Rodné číslo</th>
                        <th>Číslo pojišťovny</th>
                        <th>Samoplátce</th>
                        <th>Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pacienti as $pacient)
                    <tr>
                    <td>{{ $pacient->id_pacienta }}</td>
                    <td>{{ $pacient->jmeno }}</td>
                    <td>{{ $pacient->prijmeni }}</td>
                    <td>{{ $pacient->rodne_cislo }}</td>
                    <td>{{ $pacient->cislo_pojistovny }}</td>
                    <td>{{ $pacient->samoplatce }}</td>
                    <td><a href = 'tabulka_pacienti_delete/{{ $pacient->id_pacienta }}'>Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
