<?php $a=1; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/tabunganmasuk" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                <a href="/tabunganmasukedit{{ $tabunganmasuk->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Update</a>
                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/tabunganmasukdelete{{ $tabunganmasuk->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>siswa_id</th>
                        <td>:</td>
                        <td>{{ $tabunganmasuk->siswa_id }}</td>
                    </tr>
                    <tr>
                        <th>tanggal_masuk</th>
                        <td>:</td>
                        <td>{{ substr($tabunganmasuk->created_at, 0, 10) }}</td>
                    </tr>
                    <tr>
                        <th>masuk</th>
                        <td>:</td>
                        <td>{{ $tabunganmasuk->masuk }}</td>
                    </tr>
              </table>
            </div>
        </div>

@endsection

