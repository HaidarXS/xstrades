@extends('layouts.app')

@section('content')
    <p class="text-center text-404" style="">
        <span style="font-size: 200px; color:rgb(222, 123, 74); vertical-align: middle">!</span>
        @if (session()->get('locale') == 'jp')
            <b>
                ご指定のページが見つかりません。
            </b>
        @else
            <b>404 NOT FOUND</b>
        @endif
    </p>
@endsection
