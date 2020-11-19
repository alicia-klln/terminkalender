
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Termin bearbeiten') }}
        </h2>
    </x-slot>
@extends('events.layout') 
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oh nein!</strong> Du hast wohl wichtige Eingaben vergessen.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            Bitte trage die Infos ein.
        </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 py-3">
                <form action="{{ route('events.update',$event->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $event->name }}" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $event->detail }}</textarea>
                    </div>
                    <div class="form-group">
                        <strong>Datum</strong>
                        <input type="date" name="date" value="{{ $event->date }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Zeit</strong>
                        <input type="time" name="time" value="{{ $event->time }}" class="form-control">
                    </div>                    
                    <div class="col-6 text-center">
                        <button type="submit" class="btn-lg btn-dark ">Termin speichern</button>
                        <a class="btn-lg btn-secondary" href="{{ route('events.index') }}"> Verwerfen</a>
                    </div>      
                </form>
            </div>
        </div>
        
    </div>
</x-app-layout>
@endsection