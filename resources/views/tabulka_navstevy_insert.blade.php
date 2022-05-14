@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-body">
                  <form action = "tabulka_navstevy_insert" method = "post">
                     <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                     <table>
                        <tr>
                           <td>Rodné číslo pacienta:</td>
                           <td><input type='number' name='rodne_cislo' /></td>
                        </tr>
                        <tr>
                           <td>Popis:</td>
                           <td><input type='text' name='popis' /></td>
                        </tr>
                        <tr>
                           <td>Datum:</td>
                           <td><input type='date' name='datum_navstevy' /></td>
                        </tr>
                        <tr>
                           <td>Čas:</td>
                           <td><input type='time' name='cas_navstevy' /></td>
                        </tr>
                        <tr>
                           <td colspan = '2'>
                              <input type = 'submit' value = "Přidat návstěvu"/>
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