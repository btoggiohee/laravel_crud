@extends('layouts.mypage')
@section('content')
 <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
  <h1><small>受講生一覧</small></h1>
  </div>
  <button onclick="location.href='{{route('student.new_index')}}'">新規登録</button>
  <table class="table table-striped table-hover">
  <thead>
  <tr>
  <th>No</th>
  <th>name</th>
  <th>email</th>
  <th>tel</th>
  <th>opration</th>
  </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
  <tr>
  <td>{{$student->id}}</td><td>{{$student->name}}</td><td>{{$student->email}}</td><td>{{$student->tel}}</td>
  <td>
  <a href="" class="btn btn-primary btn-sm">詳細</a>
  <a href="{{route('student.edit_index',['id'=>$student->id])}}" class="btn btn-primary btn-sm">編集</a>
  <a href="" class="btn btn-danger btn-sm">削除</a>
  </td>
  </tr>
  @endforeach
  </tbody>
  </table>
 
 <!-- page control -->
 {!! $students->render() !!}
 
@endsection