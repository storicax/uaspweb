 <?php
  session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header('location: index.html');//jika belum login jangan lanjut
}
 require_once("../koneksi.php");



 $judul = $_POST['judul'];
 $content = $_POST['content'];
 $link=$_POST['link'];
 $gambar = upload();
//  if(!$gambar){
//  	return false;
//  }


$sql = "INSERT INTO post VALUES (NULL,'$judul', '$content',null,'$gambar','$link')";

if ($conn->query($sql) === TRUE) {
    header('location:../admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>