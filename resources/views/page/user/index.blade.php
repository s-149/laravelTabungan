<?php $a=1; ?>

@extends('layout.main')

@section('container')


        <div class="table-responsive">
            <div>
                <a href="/usercreate" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Create</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{ $user->name }}</td>
                         <td>
                            <a href="/usershow{{ $user->id }}" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="/useredit{{ $user->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/userdelete{{ $user->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

@endsection

