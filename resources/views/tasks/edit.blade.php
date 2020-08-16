<!--タスク編集画面-->
@extends('layouts.app')


@section('content')
    <h1>ID:{{$task->id}}のタスク編集画面</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
                <div class="form-grop">
                    {!! Form::label('content','メッセージ：') !!}
                    {!! Form::text('content',null,['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection