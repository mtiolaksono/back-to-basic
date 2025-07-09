<?php 
    include( 'config.php');
?>
<html>
    <head>
        <title>Upload File I</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="proses.php">
        Nama: <input type="text" name="nama"/><br>
        Email: <input type="email" name="email"/><br>
        Foto : <input type="file" name="foto"/><br><br>
        <input type="submit" value ="Save Data"/>
    </form>    
</body>