@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->
    
    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th>{{ $message->id }}</th>
                        <th>{{ $message->content }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    @endif
    
@endsection