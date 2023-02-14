<?php $a=1; ?>

@extends('layout.main')

@section('container')

<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Riwayat Admin
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=admin&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="gambar/user/user.png"> <img src="img/user/user.png" width="75" height="50"></a> </td>
                        <td>2021-03-09</td>
                         <td>
                            <a href="?page=admin&aksi=detail&id=1758760661200032" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="?page=admin&aksi=ubah&id=1758760661200032" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=admin&aksi=hapus&id=1758760661200032" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

<!-- end Advanced Tables -->

@endsection

