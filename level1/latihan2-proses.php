<?php 

    $nama=$_POST['nama'];
    $nilai_uts=$_POST['nilai_uts'];
    $nilai_uas=$_POST['nilai_uas'];

    $no=1;
    $data=[];

    for($i=0; $i< count($nama); $i++){

        $nilai_akhir=($nilai_uts[$i]+$nilai_uas[$i])/2;
        $grade="";

        if($nilai_akhir>=90){
            $grade="A";
        }else if($nilai_akhir>=80){
            $grade="B";
        }else if($nilai_akhir>=70){
            $grade="C";
        }else if($nilai_akhir>=60){
            $grade="D";
        }else{
            $grade="E";
        }

        $data[]=[
            "no"=>$no,
            "nama"=>$nama[$i],
            "nilai_uts"=>$nilai_uts[$i],
            "nilai_uas"=>$nilai_uas[$i],
            "nilai_akhir"=>$nilai_akhir,
            "grade"=>$grade
        ];

        $no++;
    };

?>

<html>
    <head>
        <title> Hasil Latihan 2 </title>
</head>
<body>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Grade</th>
        </thead>
        <tbody>
            <?php 
                foreach ($data as $item) {
            ?>
                <tr>
                    <td><?= $item["no"]; ?></td>
                    <td><?= htmlspecialchars($item["nama"]); ?></td>
                    <td><?= $item["nilai_uts"]; ?></td>
                    <td><?= $item["nilai_uas"]; ?></td>
                    <td><?= $item["nilai_akhir"]; ?></td>
                    <td><?= $item["grade"]; ?></td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>