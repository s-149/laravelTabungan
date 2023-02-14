<?php  ?>

@extends('layout.main')

@section('container')


    <div class="row">
        <div class="col-md-12">
            <form action="/siswastore" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>nis</label>
                    <input type="text" class="form-control" name="nis" id="nis" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" required autofocus />
                    
                </div>

                <div>
                    <a href="/siswa" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                    
                </div>
            </form>
        </div>
    </div> 


@endsection