@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->
    
    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>
                        <th>{{ $message->title }}</th>
                        <th>{{ $message->content }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    @endif

    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('messages.create', '新規メッセージの投稿',[],['class' => 'btn btn-primary']) !!}
    
@endsection