<?php  ?>

@extends('layout.main')

@section('container')


    <div class="row">
        <div class="col-md-12">
            <form action="/tabungankeluarstore" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>siswa</label>
                    <select class="form-control" name="siswa_id" id="siswa_id" required autofocus >
                        @foreach($siswa as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>keluar</label>
                    <input type="text" class="form-control" name="keluar" id="keluar" required autofocus />
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" id="status" value="aktif" readonly required autofocus />
                </div>
                <div>
                    <a href="/tabungankeluar" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection