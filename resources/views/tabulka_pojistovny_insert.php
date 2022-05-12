<html>
   <head>
      <title>Soukromá kartotéka</title>
   </head>

   <body>
      <form action = "tabulka_pojistovny_insert" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Název pojišťovny</td>
               <td><input type='text' name='nazev_pojistovny' /></td>
            </tr>
            <tr>
               <td> Číslo pojišťovny</td>
               <td><input type='text' name='cislo_pojistovny' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Přidat pojišťovnu"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>

