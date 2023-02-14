<?php  ?>

@extends('layout.main')

@section('container')


    <div class="row">
        <div class="col-md-12">
            <form action="/tabunganmasukupdate{{ $tabunganmasuk->id }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>siswa</label>
                    <input type="text" class="form-control" name="siswa_id" id="siswa_id" value="{{ $tabunganmasuk->siswa_id }}" required autofocus />
                </div>
                <div class="form-group">
                    <label>masuk</label>
                    <input type="text" class="form-control" name="masuk" id="masuk" value="{{ $tabunganmasuk->masuk }}" required autofocus />
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select class="form-control" name="status" id="status" required autofocus >
                        <option>{{ $tabunganmasuk->status }}</option>
                        <option>aktif</option>
                        <option>ditutup</option>
                    </select>
                </div>
                <div>
                    <a href="/tabunganmasuk" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>


@endsection