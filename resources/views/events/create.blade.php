<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Neuer Termin') }}
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
            <div class="col-6">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                        
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
 
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                            </div>

                            <div class="form-group">
                                <strong>Ersteller:</strong>
                                <div class="form-check">
                                   <input type="radio" id="radio1" name="user_name" class="form-check-input bg-dark" value="{{ Auth::user()->name}}" checked>
                                    <label class="form-check-label" for="radio1">{{ Auth::user()->name}}</label> 
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <strong>Datum</strong>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Zeit</strong>
                                <input type="time" name="time" class="form-control">
                            </div>

                        <div class="col-6 text-center">
                            <button type="submit" class="btn-lg btn-dark ">Termin speichern</button>
                            <button class="btn-lg btn-outline-secondary" href="{{ route('events.index') }}"> Verwerfen</button>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
