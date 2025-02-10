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
                        <input type="text" name="name" placeholder="name">
                        <input type="text" name="isActive" placeholder="act">
                        <input type="text" name="recruited" placeholder="rec">
                        <input type="number" name="age" placeholder="age">
                        <button>Add hozzá</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
