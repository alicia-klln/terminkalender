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
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $event->name }}" class="form-control" placeholder="Name" disabled>
                </div>
                <div class="form-group">
                    <strong>Detail</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" disabled>{{ $event->detail }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Start- & Enddatum</strong>
                    <input type="date" name="datestart" value="{{ $event->datestart }}" class="form-control" disabled>
                    <input type="date" name="dateend" value="{{ $event->dateend }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <strong>Start- & Endzeit</strong>
                    <input type="time" name="timestart" value="{{ $event->timestart }}" class="form-control" disabled>
                    <input type="time" name="timeend" value="{{ $event->timeend }}" class="form-control" disabled>
                </div>                      
            </div>
        </div>
    </div>
@endsection
</x-app-layout>