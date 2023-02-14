<?php $a=1; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/tabungankeluarcreate" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Create</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>tanggal keluar</th>
                        <th>keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabungankeluar as $tabungankeluar)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $tabungankeluar->siswa->nama }}</td>
                        <td>{{ substr($tabungankeluar->created_at, 0, 10) }}</td>
                        <td>{{ $tabungankeluar->keluar }}</td>
                         <td>
                            <a href="/tabungankeluarshow{{ $tabungankeluar->id }}" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="/tabungankeluaredit{{ $tabungankeluar->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/tabungankeluardelete{{ $tabungankeluar->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

@endsection

