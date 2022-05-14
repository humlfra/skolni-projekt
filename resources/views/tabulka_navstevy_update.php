<!DOCTYPE html>
<html>
<head>
</head>
<body>

                <form action = "/tabulka_navstevy_edit/<?php echo $navstevy[0]->id_navstevy; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <table>
                    <tr>
                    <td>Jméno</td>
                    <td>
                    <input type = 'text' name = 'popis'
                    value = '<?php echo$navstevy[0]->popis; ?>'/> </td>
                    </tr>
                    <tr>
                    <td>Rodné číslo pacienta</td>
                    <td>
                    <input type = 'number' name = 'rodne_cislo'
                    value = '<?php echo$navstevy[0]->rodne_cislo; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Datum:</td>
                    <td>
                    <input type='date' name='datum_navstevy' 
                    value = '<?php echo$navstevy[0]->datum_navstevy; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Čas:</td>
                    <td>
                    <input type='time' name='cas_navstevy' 
                    value = '<?php echo$navstevy[0]->cas_navstevy; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Upravit  návštěvu" />
                    </td>
                    </tr>
                    </table>
                    </form>

</body>
</html>
