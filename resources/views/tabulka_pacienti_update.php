<!DOCTYPE html>
<html>
<head>
</head>
<body>

                <form action = "/tabulka_pacienti_edit/<?php echo $pacienti[0]->id_pacienta; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <table>
                    <tr>
                    <td>Jméno</td>
                    <td>
                    <input type = 'text' name = 'jmeno'
                    value = '<?php echo$pacienti[0]->jmeno; ?>'/> </td>
                    </tr>
                    <tr>
                    <td>Příjmení</td>
                    <td>
                    <input type = 'text' name = 'prijmeni'
                    value = '<?php echo$pacienti[0]->prijmeni; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Rodné číslo</td>
                    <td>
                    <input type = 'number' name = 'rodne_cislo'
                    value = '<?php echo$pacienti[0]->rodne_cislo; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Číslo pojišťovny</td>
                    <td>
                    <input type = 'number' name = 'cislo_pojistovny'
                    value = '<?php echo$pacienti[0]->cislo_pojistovny; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Samoplátce</td>
                    <td>
                    <input type = 'text' name = 'samoplatce'
                    value = '<?php echo$pacienti[0]->samoplatce; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Update" />
                    </td>
                    </tr>
                    </table>
                    </form>

</body>
</html>
