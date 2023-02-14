<?php $a=1; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/siswacreate" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Create</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $siswa)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                         <td>
                            <a href="/siswashow{{ $siswa->id }}" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="/siswaedit{{ $siswa->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/siswadelete{{ $siswa->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

@endsection

