@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Název pojišťovny</th>
                        <th>Číslo pojišťovny</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pojistovny as $pojistovna)
                    <tr>
                    <td>{{ $pojistovna->nazev_pojistovny }}</td>
                    <td>{{ $pojistovna->cislo_pojistovny }}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
