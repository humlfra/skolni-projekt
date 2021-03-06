@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Rodné číslo pacienta</th>
                        <th>Popis</th>
                        <th>Datum navštěvy</th>
                        <th>Čas navštěvy</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($navstevy as $navsteva)
                    <tr>
                    <td>{{ $navsteva->rodne_cislo }}</td>
                    <td>{{ $navsteva->popis }}</td>
                    <td>{{ $navsteva->datum_navstevy }}</td>
                    <td>{{ $navsteva->cas_navstevy }}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
