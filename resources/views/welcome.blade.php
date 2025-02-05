@extends('layouts.app')

@section('content')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate officia reiciendis, perspiciatis autem nam et
        atque dolore, consequatur praesentium ut, error dolor quia tenetur facilis quis placeat adipisci suscipit quaerat?
    </p>
@endsection

@section('yoda')
    @foreach ($stormtroopers as $trooper)
        <p>{{ $trooper->name }}</p>
    @endforeach
@endsection
    