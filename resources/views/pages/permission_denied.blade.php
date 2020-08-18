@extends('layouts.app')
@section('title', 'Không truy cập')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">
            Tài khoản đăng nhập hiện tại không có quyền truy cập nền.
          </div>
        @else
          <div class="alert alert-danger text-center">
            Vui lòng đăng nhập sau
          </div>

          <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            Đăng nhập
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
