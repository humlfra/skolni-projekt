@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    Jste přihlášen jako uživatel {{ Auth::user()->name }}!

                    <div>Nyní můžete pracovat</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
