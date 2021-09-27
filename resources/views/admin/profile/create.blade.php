{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Myプロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>Myプロフィール</h2>
      <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
        
         @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach 
          </ul> 
        @endif
          
        <div class="form-group row"> 
          <label class="col-md-2">氏名</label>
            <div class="col-md-10"> 
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>
        
        <div class="form-group row">
          <label for="radio01" class="col-md-2">性別</label>
              <div class="col-md-10">
              
                <div class="form-check form-check-inline"> 
                  <input class="form-check-input" type="radio" id="inlineRadio01" name="gender" value="1"> 
                  <label class="form-check-label" for="inlineRadio01">男性</label>
                </div>
                <div class="form-check form-check-inline"> 
                  <input class="form-check-input" type="radio" id="inlineRadio02" name="gender" value="2" checked="checked">
                  <label class="form-check-label" for="inlineRadio02">女性</label> 
                </div>
              </div>  
        </div>
                
        <div class="form-group row">
           <label class="col-md-2">趣味</label>
              <div class="col-md-10"> 
                <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}"> 
              </div>
        </div>
        
            <div class="form-group row"> 
              <label class="col-md-2">自己紹介欄</label>
              <div class="col-md-10"> <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}"> 
            </div>
            {{ csrf_field() }} <input type="submit" class="btn btn-primary" value="更新"> </form>
      </div>
    </div>
  </div> @endsection