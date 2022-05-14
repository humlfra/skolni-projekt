@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>ID návštěvy</th>
                        <th>Rodné číslo pacienta</th>
                        <th>Datum navštěvy</th>
                        <th>Čas navštěvy</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($navstevy as $navsteva)
                    <tr>
                    <tr>
                    <td>{{ $navsteva->id_navstevy }}</td>
                    <td>{{ $navsteva->rodne_cislo }}</td>
                    <td>{{ $navsteva->datum_navstevy }}</td>
                    <td>{{ $navsteva->cas_navstevy }}</td>
                    <td><a href = 'tabulka_navstevy_delete/{{ $navsteva->id_navstevy }}'>Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
