@extends('layouts.app')


@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa natus, voluptatem! Accusantium alias enim, error esse ex natus nemo perferendis qui quo quos reiciendis rem repellat repellendus repudiandae saepe voluptates!</p>

@endsection

@section('sidebar')

    @parent
    <p> This is appended to the sidebar </p>

@endsection