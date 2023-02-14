<?php  ?>

@extends('layout.main')

@section('container')


    <div class="row">
        <div class="col-md-12">
            <form action="/userupdate{{ $user->id }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $user->password }}" required autofocus />
                    
                </div>

                <div>
                    <a href="/user" class="btn btn-primary" ><i class="fa fa-back"></i> Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                </div>
            </form>
        </div>
    </div>  


@endsection