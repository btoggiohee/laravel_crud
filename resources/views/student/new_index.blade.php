@extends('layouts.mypage')
@section('content')
<form action="{{route('student.new_finish')}}" method="post" class="form-horizontal">
@csrf
<div class="form-group @if($errors->has('name')) has-error @endif">
    <label for="name" class="col-md-3 control-label">お名前</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="name" name="name">
    @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
    </div>
    </div>
    <div class="form-group @if($errors->has('email')) has-error @endif">
    <label for="email" class="col-md-3 control-label">メールアドレス</label>
    <div class="col-sm-9">
    <input type="email" class="form-control" id="email" name="email">
    @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
    </div>
    </div>
    <div class="form-group @if($errors->has('tel')) has-error @endif">
    <label for="tel" class="col-md-3 control-label">電話番号</label>
    <div class="col-md-9">
    <input type="tel" class="form-control" id="tel" name="tel">
    @if($errors->has('tel'))<span class="text-danger">{{ $errors->first('tel') }}</span> @endif
    </div>
    </div>
    <div class="col-md-offset-3 text-center"><button class="btn btn-primary">登録</button></div>
</form>
@endsection