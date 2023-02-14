<?php $a=1; ?>

@extends('layout.main')

@section('container')



        <div class="table-responsive">
            <div>
                <a href="/rekapcetak" class="btn btn-warning" style="margin-top: 8px;" target="_blank"><i class="fa fa-print"></i> Cetak</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $siswa)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ 'Rp ' . number_format($siswa->tabunganmasuk->where('siswa_id', $siswa->id)->sum('masuk'), 0, ',', '.') }}</td>
                        <td>{{ 'Rp ' . number_format($siswa->tabungankeluar->where('siswa_id', $siswa->id)->sum('keluar'), 0, ',', '.') }}</td>
                        <td>{{ 'Rp ' . number_format($siswa->tabunganmasuk->where('siswa_id', $siswa->id)->sum('masuk') - $siswa->tabungankeluar->where('siswa_id', $siswa->id)->sum('keluar'), 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

@endsection
 
