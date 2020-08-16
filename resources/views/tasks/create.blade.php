<!--新規タスク作成画面-->
@extends('layouts.app')


@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
        {!! Form::model($task,['route'=>'tasks.store']) !!}
            
            <div class="form-group">
                {!! Form::label('status','状態') !!}
                {!! Form::text('status',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content','タイトル') !!}
                {!! Form::text('content',null,['class'=>'form-control']) !!}
            </div>
            
            {!! Form::submit('作成',['class'=>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
        </div>
 
    </div>
@endsection