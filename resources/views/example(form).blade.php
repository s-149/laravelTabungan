<?php  ?>

@extends('layout.main')

@section('container')


<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" id="username" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="pass" type="Password" id="pass" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label> Level Akses</label>
                    <select class="form-control" name="level"  required autofocus>
                        <option> == Pilih Akses Level == </option>
                        <option value="admin">Admin</option>
                        <option value="admin1">Admin1</option>
                        <option value="pengajar">Pengajar</option>
                        <option value="siswa">Siswa</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label>Fhoto Profil</label>
                    <input type="file" name="foto" id="foto" required autofocus />
                </div>
                
                
                <div>
                    
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>  
</div> 


@endsection