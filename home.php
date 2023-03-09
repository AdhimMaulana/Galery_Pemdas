<?php
//Menggunakan perulangan/array multidimensi baru ketika masuk form echo semuanya
$paraproduct = array (
    array("PakanIKanOtomatis", "beri makan ikan tanpa repot dengan pakan ikan otomatis produk dari jurusan",100000,'gambar1.png'),
    array("Website company profile", "Zaman Now masih belum punya website",45000,'gambar2.png'),
    array("Kursi Jati", "Kursi Estetik",50000,'gambar3.png'),
    array("Sabun Laundry", "Mewangikan Pakaian",55000,'gambar4.png')
    );
   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>selamat datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="text-center"> 
        <img src="technopark.jpg" class="img-fluid">
</div> <br>
<center> 
   <h3> Daftar Produk TechnoPark Galery SMKN 2 BANJARMASIN</h3>
</center>
   <br>
     <div class="container-fluid">
       <div class="row">
       
           <!-- col -->
           <?php foreach ($paraproduct as $values =>$value) {?>
    <div class="col-md">
      <div class="card" style="height: 500px;">
        <div class="card-body">
          <p><img src="<?php echo $value[3]; ?>" class="card-img-top" alt="..." width="100"></p>
              <p><?php echo $value[0]; ?></p>
              <p><?php echo $value[1]; ?></p>
              <p><?php echo $value[2]; ?></p>
        </div>
      </div>
      <div class="d-grid gap-2 col-md mx-auto mt-5">
  <a href="transaksi.php?produk=<?= $value[0]?>&harga=<?= $value[2]?>"class="btn p-2 text-white" style="background-color: #000000;" type="button">PILIH PRODUK</a>
</div>
    </div>
<?php } ?>
         <!-- end col -->
         
       </div>
     </div>

<!-- Footer -->

    <div class="col-md-15">
      <div class="card mt-5 rounded" style="background-color:gray;">
        <div class="card-body">
          <div class="text-center text-white">
            @Adhim Maulana
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>