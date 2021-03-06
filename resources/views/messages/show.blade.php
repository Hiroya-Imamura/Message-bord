@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{{ $message->id }}</th>
        </tr>
        <tr>
            <th>タイトル</th>
            <th>{{ $message->title }}</th>
        </tr>
        <tr>
            <th>メッセージ</th>
            <th>{{ $message->content }}</th>
        </tr>
    </table>
    
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('messages.edit', 'このメッセージを編集', ['message' => $message->id], ['class' => 'btn btn-dark']) !!}

    {{-- メッセージ削除フォーム --}}
    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection