<?php 

include('config.php');

$rows=file(DATA_FILE,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Tampilan Data File </title>
    </head>
    <body>
        <h2> Data Biodata</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>Foto</td>
            </tr>
            <?php 
                foreach($rows as $line):
                list($nama,$email,$foto) = explode ('|',$line);
            ?>
            <tr>
               <td> <?= htmlspecialchars($nama) ?></td>
               <td> <?= htmlspecialchars($email) ?></td>
               <td> 
                    <img src="<?= VIEW_UPLOAD.$foto ?>" alt="Foto" width="60">
               </td>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
    </body>
</html>