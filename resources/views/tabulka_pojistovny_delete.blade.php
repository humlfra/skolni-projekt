@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID pojišťovny</th>
                        <th>Název pojišťovny</th>
                        <th>Číslo pojišťovny</th>
                        <th>Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pojistovny as $pojistovna)
                    <tr>
                    <td>{{ $pojistovna->id_pojistovny }}</td>
                    <td>{{ $pojistovna->nazev_pojistovny }}</td>
                    <td>{{ $pojistovna->cislo_pojistovny }}</td>
                    <td><a href = 'tabulka_pojistovny_delete/{{ $pojistovna->id_pojistovny }}'>Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
