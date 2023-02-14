<?php $a=1; ?>

@extends('layout.main')

@section('container')

        <div class="table-responsive">
            <div>
                <a href="/user" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                <a href="/useredit{{ $user->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i> Update</a>
                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="/userdelete{{ $user->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>name</th>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>password</th>
                        <td>:</td>
                        <td>{{ $user->password }}</td>
                    </tr>
              </table>
            </div>
        </div>

@endsection

