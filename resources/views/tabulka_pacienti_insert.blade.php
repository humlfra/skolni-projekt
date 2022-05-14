@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-body">
                  <form action = "tabulka_pacienti_insert" method = "post">
                     <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                     <table>
                        <tr>
                           <td>Jméno:</td>
                           <td><input type='text' name='jmeno' /></td>
                        </tr>
                        <tr>
                           <td>Příjmení:</td>
                           <td><input type='text' name='prijmeni' /></td>
                        </tr>
                        <tr>
                           <td>Rodné číslo:</td>
                           <td><input type='number' name='rodne_cislo' /></td>
                        </tr>
                        <tr>
                           <td>Číslo pojišťovny:</td>
                           <td><input type='number' name='cislo_pojistovny' /></td>
                        </tr>
                        <tr>
                        <td>Samoplátce:</td>
                           <td><input type='text' name='samoplatce' /></td>
                        </tr>
                        <tr>
                           <td colspan = '2'>
                              <input type = 'submit' value = "Přidat pacienta"/>
                           </td>
                        </tr>
                     </table>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
