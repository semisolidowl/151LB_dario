@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>einkauf Bestätigt</h2>
                <p>Vielen dank für ihr einkauf</p>
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Weiter Schoppen</a>
                
            </div>
        </div>
    </div>
</div>
@endsection
