<?php $a=1; $a1=1; $b=0; $c=0; ?>

@extends('layout.main')

@section('container')


        <div class="table-responsive">
            <div>
                <a href="/siswa" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                <a href="/siswaedit{{ $siswa->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Update</a>
                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/siswadelete{{ $siswa->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>
            </div><br>
            <table border="0" class="table">
                    <tr>
                        <th width="20px">nis</th>
                        <td width="20px">:</td>
                        <td>{{ $siswa->nis }}</td>
                    </tr>
                    <tr>
                        <th>nama</th>
                        <td>:</td>
                        <td>{{ $siswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>kelas</th>
                        <td>:</td>
                        <td>{{ $siswa->kelas }}</td>
                    </tr>
                    <tr> 
                        <th>masuk</th>
                        <td>:</td>
                        <td>{{ $totaltabunganmasuk }}</td>
                    </tr>
                    <tr>
                        <th>keluar</th>
                        <td>:</td>
                        <td>{{ $totaltabungankeluar }}</td>
                    </tr>
                    <tr>
                        <th>saldo</th>
                        <td>:</td>
                        <td>{{ $totaltabunganmasuk - $totaltabungankeluar }}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                    </tr>
              </table>
              @if($totaltabunganmasuk >= 1)
            <div>
                <h3>Riwayat Transaksi Masuk :</h3>
            </div><br>
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr> 
                        <th>No</th>
                        <th>siswa id</th>
                        <th>tanggal masuk</th>
                        <th>masuk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabunganmasuk as $tabunganmasuk)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $tabunganmasuk->siswa_id }}</td>
                        <td>{{ $tabunganmasuk->created_at }}</td>
                        <td>{{ $tabunganmasuk->masuk }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Subtotal</td>
                        <td colspan="2">{{ $totaltabunganmasuk }}</td>
                    </tr>
                </tbody>
              </table>
              @endif
              @if($totaltabungankeluar >= 1)
            <div>
                <h3>Riwayat Transaksi Keluar :</h3>
            </div><br>
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr> 
                        <th>No</th>
                        <th>siswa id</th>
                        <th>tanggal keluar</th>
                        <th>keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabungankeluar as $tabungankeluar)
                    <tr>
                        <td>{{ $a1++ }}</td>
                        <td>{{ $tabungankeluar->siswa_id }}</td>
                        <td>{{ $tabungankeluar->created_at }}</td>
                        <td>{{ $tabungankeluar->keluar }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Subtotal</td>
                        <td colspan="2">{{ $totaltabungankeluar }}</td>
                    </tr>
                </tbody>
              </table>
              @endif
            </div>
        </div>

@endsection

