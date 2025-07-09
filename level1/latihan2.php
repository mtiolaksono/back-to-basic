<html>
<head>
        <title> latihan 2 </title>
</head>
<body>
        <?php 
                for($i=0;$i<3;$i++):
        ?>
        <h3>Siswa <?= $i+1 ?></h3>
        <form method="POST" action="latihan2-proses.php">
                Nama : <input type="text" name="nama[]"/>
                Nilai UTS: <input type="number" name="nilai_uts[]"/>
                Nilai UAS: <input type="number" name="nilai_uas[]"/>

        <?php 
                endfor;
        ?>
        
        <input type="submit" value="Proses"/>
        
        </form>
</body>
</html>