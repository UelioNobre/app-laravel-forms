@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content-title')
<h1>Posts / Add</h1>
@endsection

@section('content')
<form method="post">
    @method('POST')
    @csrf

    <div>
        <input type="text" name="title" id="postTitle" placeholder="Title">
    </div>

    <div>
        <textarea name="content" id="postTitle" placeholder="Content"></textarea>
    </div>

    <button type="submit">Criar</button>

</form>
@endsection
