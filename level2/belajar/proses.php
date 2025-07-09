<?php 
include 'config.php';

$nama=$_POST['nama']??'';
$email=$_POST['email']??'';
$foto=$_FILES['foto']??null;

$errors=[];

if(trim($nama)=='') $errors[]="Nama wajib di isi.";
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) $errors[]="Email tidak valid.";
if($foto['error']!==0) $errors[]="Foto wajib di unggah.";

if(!empty($errors)){
    foreach ($errors as $item) {
        echo "<p style='color:red;'>$item</p>";
    }

    echo "<a href='form.php'>Kembali</a>";
    exit;
}

// Upload file
$ext=pathinfo($foto['name'], PATHINFO_EXTENSION);
$filename=uniqid('img_').'.'.$ext;
$target=UPLOAD_DIR.$filename;
move_uploaded_file($foto['tmp_name'],$target);

// Simpan ke file .txt
$baris="$nama|$email|$filename\n";
file_put_contents(DATA_FILE,$baris,FILE_APPEND);

// Tampilkan Kembali 
echo "<h2>Data Tersimpan</h2>";
echo "Nama : $nama<br>";
echo "Email : $email<br>";
echo "Foto: <br> <img src='uploads/$filename' width='100'>";


