@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Jste přihlášen jako uživatel {{ Auth::user()->name }}!

                    <br>
                    
                    <table>                                                                         <!-- Začátek tabulky -->
                        <tr>                                                                            <!-- Začátek hlavičky tabulky -->
                            <th>ID</th>                                                                   <!-- Hlavička pro ID -->
                            <th>Název auta</th>                                                           <!-- Hlavička pro Název auta -->
                            <th>Cena</th>                                                                 <!-- Hlavička pro cena --> 
                            <th>ID obchodu</th>                                                           <!-- Hlavička pro ID_obchodu -->
                        </tr>

                        <br>
                    </table>
                    <br>

                    <?php
                    $results = DB::select('select * from users where id = ?', array(1));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
