@extends('layouts.default')
@section('title','注册')
@section('content')
<div class="offset-md2 col-md-8">
    <div class="card">
        <div class="card-header">
        <h5>注册</h5>
        </div>

        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="name">姓名:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">邮箱:</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码:</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">

                </div>

                <div class="form-group">
                    <label for="password_confirmation">确认密码:</label>
                    <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation')}}">


                </div>

                <button class="btn btn-primary" type="submit">注册</button>
            
            </form>
        </div>

    </div>
</div>

@stop