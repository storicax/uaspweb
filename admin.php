 <?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header('location: index.html');//jika belum login jangan lanjut
}
 require_once("koneksi.php");


$sql = "SELECT * FROM post";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>N2VL</title>
<link href="html/xeone/images/favicon.png" rel="icon">
<link rel="stylesheet" href="html/xeone/css/plugins.css">
<link rel="stylesheet" href="html/xeone/css/style.css">
<link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">
<!--PreLoader-->

<!--PreLoader Ends-->
<div class="wrapper">
<!-- header -->
<header class="site-header transparent-sidemenu">
   <nav class="navbar navbar-expand-md sidebar-nav">
      <a class="navbar-brand" href="index.html">
         <img src="d.png" alt="logo" width="200px">
         </a>
      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
            <span> </span>
            <span> </span>
            <span> </span>
         </button>
      <div class="collapse navbar-collapse" id="xenav">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link pagescroll" href="#home"></a>
            </li>
             
         
         <li class="nav-item">
               <a class="button btn-dark" href="index.html">HOME</a>
            </li>
             <li class="nav-item">
               <a  href="insert.php"><img src="https://img.icons8.com/nolan/64/000000/add.png">add</a>
            </li>
            <li class="nav-item">
               <a href="logout.php"><img src="https://img.icons8.com/nolan/64/000000/exit.png">Logout</a>
            </li>
         </ul>
      </div>
      <ul class="social-icons white">
         <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
         <li><a href="https://twitter.com/RahhmanAulia"><i class="fa fa-twitter"></i> </a> </li>
         <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
         <li><a href="https://www.instagram.com/bdrahhman/?hl=id"><i class="fa fa-instagram"></i> </a> </li>
         <li><a href="mailto:tusteng005@gmail.com"><i class="fa fa-envelope-o"></i> </a> </li>
      </ul>
   </nav>
</header>
<!-- header -->
<!--Main Slider--> 

<!--Main Slider ends -->
<!--Some Feature -->  

<!--Some Feature ends-->          
<!-- WOrk Process-->  

   <div class="container">  
 <div class="col-md-12 col-sm-12">
           <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
               <span>Download Novel</span>
               <h2 class="darkcolor">List Novel Yang Tersedia</h2>
              


<center>

<br><br><br><br>
    <table class="table">
  <tr>
    <th>judul</th>
    <th>keterangan</th>
    <th>gambar</th>
 
    <th>Download</th>
       <th>last update</th>
        <th>opsi</th>
    
  </tr> 
 
  <?php

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
   
?>
  <tr>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['content'] ?></td>
    <td><img src="img/<?= $row['gambar']?>" width="100"></td>
   
    <td>     <a href="<?= $row['link'] ?>"> <img src="https://img.icons8.com/nolan/64/000000/downloading-updates.png"> </a></td>
     <td><?= $row['waktu'] ?></td>
    <!--  <td>
            <a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
            <a onclick=\"return confirm('yakin mau di hapus?')\" href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
            
            

          </td> -->

          <td>
      <center><a href="update.php?id=<?=$row["id"]?>" class="btn btn-sm btn-info">ubah</a></button><br><br><a href="delete.php?id=<?= $row["id"]?>"class="btn btn-sm btn-danger" onclick =" return confirm ('are u sure wanna delete this post?');">hapus</a></center>
    </td>



   
  </tr>
<?php
    }
} 
$conn->close();


?>



            </div>
        </div>

      </div>
   
<!--Testimonials Ends-->
<!-- Video Click -->  

<!--Partners Ends-->
<!-- Our Blogs -->  



<!--Our Blogs Ends-->
<!-- Contact US -->  

<!--Footer ends-->   
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="html/xeone/js/jquery-3.1.1.min.js"></script>
<!--Bootstrap Core-->
<script src="html/xeone/js/popper.min.js"></script>
<script src="html/xeone/js/bootstrap.min.js"></script>
<!--to view items on reach-->
<script src="html/xeone/js/jquery.appear.js"></script>
<!--Equal-Heights-->
<script src="html/xeone/js/jquery.matchHeight-min.js"></script>
<!--Owl Slider-->
<script src="html/xeone/js/owl.carousel.min.js"></script>
<!--number counters-->
<script src="html/xeone/js/jquery-countTo.js"></script>
<!--Parallax Background-->
<script src="html/xeone/js/parallaxie.js"></script>
<!--Cubefolio Gallery-->
<script src="html/xeone/js/jquery.cubeportfolio.min.js"></script>
<!--FancyBox popup-->
<script src="html/xeone/js/jquery.fancybox.min.js"></script>          
<!-- Video Background-->
<script src="html/xeone/js/jquery.background-video.js"></script>
<!--TypeWriter-->
<script src="html/xeone/js/typewriter.js"></script> 
<!--Particles-->
<script src="html/xeone/js/particles.min.js"></script>            
<!--WOw animations-->
<script src="html/xeone/js/wow.min.js"></script>
<!--Revolution SLider-->
<script src="html/xeone/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="html/xeone/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="html/xeone/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="html/xeone/js/revolution/extensions/revolution.extension.video.min.js"></script>
<!--Google Map API-->
<script src="maps/api/map.js"></script>
<script src="html/xeone/js/functions.js"></script>	


</html>