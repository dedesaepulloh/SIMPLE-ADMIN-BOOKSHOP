<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book Store</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    #create{
      margin: 10px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/com.demos.member.olshop.png" alt="Dede Saepulloh" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Book Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dede Saepulloh</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item">
                <a href="../../pages/php/dataUser.php" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                  <p>Data User</p>
                </a>
          </li>
              <li class="nav-item">
                <a href="../../pages/php/dataBuku.php" class="nav-link active">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/php/dataKategori.php" class="nav-link">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon"></i>
                  <p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                <i class="nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <button type="button" class="btn btn-info" id="create" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Tambah</button>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tbarang" class="table table-bordered table-hover">
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Harga</th>
                  <th>Cover</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include "koneksi.php";
                    $i= 0;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_buku");
                    while($data=mysqli_fetch_array($tampil)){
                        $i++;
                ?>
                <tr>
                    <td align="center"><?php echo "$i" ?></td>
                    <td><?php echo "$data[judul]"; ?></td>
                    <td><?php echo "$data[pengarang]"; ?></td>
                    <td><?php echo "$data[penerbit]"; ?></td>
                    <td><?php echo "$data[harga]"; ?></td>
                    <td align="center"><a href="upload/<?php echo"$data[cover]"; ?>"><?="<img src='upload/".$data['cover']."'style='width:50px; height:49px;'>"?></a></td>
                    <td class="project-actions text-center">
                          <a class="btn btn-info btn-sm" href="edit_buku.php?id_buku=<?php echo "$data[id_buku]"; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete_buku.php?id_buku=<?php echo "$data[id_buku]"; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                </tr>
                <?php }?>
                
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <strong>Copyright &copy; 2019 <a href="#">Dede Saepulloh</a>.</strong>
    All rights reserved.
    </div>
  </footer>
        
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Buku</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="insert_buku.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for=>Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <?php 
                          include "koneksi.php";
                          $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                          while($data=mysqli_fetch_array($tampil)){
                      ?>
                          <option value="<?php echo "$data[id_kategori]"; ?>">
                              <?php echo "$data[nama_kategori]"; ?>
                          </option>
                      <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" placeholder="Pengarang">
                  </div>
                  <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="harga">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="keterangan">
                  </div>
                  <div class="form-group">
                    <label>Cover</label>
                    <input type="file" class="form-control" name="cover">
                  </div>
                  
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#tbarang").DataTable();
  });
</script>
</body>
</html>
<?php } ?>