@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hire a stormtrooper</h4>
                    <p class="card-text">Who can aim.</p>
                    <form action="{{ route('stormtroopers.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="name" value="{{old('name')}}">
                        <input type="text" name="isActive" placeholder="act">
                        <input type="text" name="recruited" placeholder="rec">
                        <input class="@error('age') form-control @enderror" type="number" @error('age') style="border-color: red" @enderror name="age" placeholder="age" value="{{old('age', 15)}}">
                        @error('age') {{$message}} @enderror
                        <button>Add hozzá</button>
                    </form>

                    <p>
                        @if ($errors->any())
                            <p>There are some errors:</p>
                            <ul>
                                @foreach ($errors->all() as $item)
                                <li>{{$item}}</li>
                                @endforeach

                            </ul>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
