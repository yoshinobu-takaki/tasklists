<!--タスク一覧表示画面-->

@extends('layouts.app')


@section('content')

<h1>タスク一覧</h1>

  @if(count($tasks)>0)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>id</th>
          <th>状態</th>
          <th>タイトル</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
        <tr>
          <td>{!! link_to_route('tasks.show',$task->id, ['id'=>$task->id]) !!}</td>
          <td>{{ $task->status }}</td>
          <td>{{ $task->content }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @endif
  
  {!! link_to_route('tasks.create','新規タスク作成',[],['class'=>'btn btn-primary']) !!}
  
  
@endsection