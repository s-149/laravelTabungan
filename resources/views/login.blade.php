<?php  ?>

@extends('layout.main')

@section('container')

@if(session()->has('gagal'))
<h3>login gagal</h3>
@endif


    <div class="row">
        <div class="col-md-12">
            <form action="/login" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" id="email" required autofocus />
                    
                </div>

                <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password" id="password" required autofocus />
                    
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/register" class="btn btn-primary">Register</a>
                    
                </div>
            </form>
        </div>
    </div>


@endsection