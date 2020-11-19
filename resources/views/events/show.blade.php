<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Termin ansehen') }}
        </h2>
    </x-slot>

@extends('events.layout')
@section('content')
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 py-3">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $event->name }}" class="form-control" placeholder="Name" disabled>
                    </div>
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" disabled>{{ $event->detail }}</textarea>
                    </div>
                    <div class="form-group">
                        <strong>Datum</strong>
                        <input type="date" name="date" value="{{ $event->date }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <strong>Zeit</strong>
                        <input type="time" name="time" value="{{ $event->time }}" class="form-control" disabled>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    
@endsection
</x-app-layout>