<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Data Penduduk</title>


<!-- Content Header (Page header) -->
<div class="content-header"></div><!-- /.container-header -->

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Data Kartu Keluarga</h3>
  </div>

<div class="card-body">
  <a href="<?php echo base_url() ?>kartu_keluarga/tambah" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
  <br><br>
  <table id="table_kk" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No. Kartu Keluarga</th>
        <th>Nama Kepala Keluarga</th>
        <th>Jumlah Anggota</th>
        <th>Jumlah Tanggungan</th>
        <th>Action</th>
      </tr>
    </thead>
    
    <tbody>
      <?php
        foreach($kk_list as $data) {
          echo"<tr>";
            echo"<td>".$data['no_kk']."</td>";
            echo"<td>".$data['nama_kepala_kk']."</td>";
            echo"<td>".$data['jumlah_anggota']."</td>";
            echo"<td>".$data['jumlah_tanggungan']."</td>";
            echo "<td> 
            <a href='".base_url()."kartu_keluarga/edit?id_kk=".$data['id_kk']."' class='btn btn-warning btn-sm'>Edit</a>
            <a onclick='return confirm(\"Apakah anda ingin menghapus data ini?\")' href='".base_url()."kartu_keluarga/delete?id_kk=".$data['id_kk']."' class='btn btn-danger btn-sm'>Delete</a>                 
            </td>";
          echo"</tr>";
        }
      ?>
    </tbody>
  </table>
</div><!-- /.card-body -->
</div>
<!-- /.card -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#table_kk").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table_kk_wrapper .col-md-6:eq(0)');
  });
</script>

<?= $this->endSection() ?>   