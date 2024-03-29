<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-plus" style="color:green"> </i>  Tambah User
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-plus"></i>&nbsp; Tambah User</li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
			    <!-- /.box-header -->
			    <div class="box-body">
                    <form action="<?php echo base_url('user/add');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" name="NIP" required="required" placeholder="NIP">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" name="nama" required="required" placeholder="Nama Pengguna">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="lahir" required="required" placeholder="Contoh : Kepala Biro Dokumentasi & Publikasi">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" required="required" placeholder="Contoh : 1999-05-18">
                                </div> -->
                                <div class="form-group">
                                    <label>Departemen</label>
                                    <input type="text" class="form-control" name="user" required="required" placeholder="Contoh : Departemen Hubungan Masyarakat">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="pass" required="required" placeholder="Password">
                                </div>
                                
                                <div class="form-group">
                                    <label>Divisi</label>
                                    <input type="text" class="form-control" name="alamat" required="required"></input>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                    </form>
                            <a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Kembali</a>
                        </div>
		        </div>
	        </div>
	    </div>
    </div>
</section>
</div>
