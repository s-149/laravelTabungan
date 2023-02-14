<?php $a=1; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/tabungankeluar" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                <a href="/tabungankeluaredit{{ $tabungankeluar->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Update</a>
                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/tabungankeluardelete{{ $tabungankeluar->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>siswa_id</th>
                        <td>:</td>
                        <td>{{ $tabungankeluar->siswa_id }}</td>
                    </tr>
                    <tr>
                        <th>tanggal_keluar</th>
                        <td>:</td>
                        <td>{{ substr($tabungankeluar->created_at, 0, 10) }}</td>
                    </tr>
                    <tr>
                        <th>keluar</th>
                        <td>:</td>
                        <td>{{ $tabungankeluar->keluar }}</td>
                    </tr>
              </table>
            </div>
        </div>

@endsection

