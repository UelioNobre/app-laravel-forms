@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content-title')


@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<h1>Posts / Add</h1>
@endsection

@section('content')
<form method="post">
    @method('POST')
    @csrf

    <div>
        <input type="text" name="title" id="postTitle" placeholder="Title" value="{{ old('title') }}">
    </div>

    <div>
        <textarea name="content" id="postTitle" placeholder="Content">{{ old('content') }}</textarea>
    </div>

    <button type="submit">Criar</button>

</form>
@endsection
