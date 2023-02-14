<?php $a=1; $b=0; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/tabunganmasukcreate" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Create</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr> 
                        <th>No</th>
                        <th>Nama</th>
                        <th>tanggal masuk</th>
                        <th>masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabunganmasuk as $tabunganmasuk)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $tabunganmasuk->siswa->nama }}</td>
                        <td>{{ substr($tabunganmasuk->created_at, 0, 10) }}</td>
                        <td>{{ 'Rp ' . number_format($tabunganmasuk->masuk, 0,',', '.') }}</td>
                         <td>
                            <a href="/tabunganmasukshow{{ $tabunganmasuk->id }}" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="/tabunganmasukedit{{ $tabunganmasuk->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/tabunganmasukdelete{{ $tabunganmasuk->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection

