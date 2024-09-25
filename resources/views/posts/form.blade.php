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
    <input type="text" name="postTitle" id="postTitle" placeholder="Title">
    <button type="submit">Criar</button>

</form>
@endsection
