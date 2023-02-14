<?php $a=1; ?>

@extends('layout.main')

@section('container')



        <div class="table-responsive">
                <br>
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Saldo</th>
                        <th>TTD Wali Murid</th>
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
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

@endsection
 
