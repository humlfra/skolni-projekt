<!DOCTYPE html>
<html>
<head>
</head>
<body>

                <form action = "/tabulka_pojistovny_edit/<?php echo $pojistovny[0]->id_pojistovny; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <table>
                    <tr>
                    <td>Jméno</td>
                    <td>
                    <input type = 'text' name = 'nazev_pojistovny'
                    value = '<?php echo$pojistovny[0]->nazev_pojistovny; ?>'/> </td>
                    </tr>
                    <tr>
                    <td>Číslo pojišťovny</td>
                    <td>
                    <input type = 'number' name = 'cislo_pojistovny'
                    value = '<?php echo$pojistovny[0]->cislo_pojistovny; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Změnit pojišťovnu" />
                    </td>
                    </tr>
                    </table>
                    </form>

</body>
</html>
