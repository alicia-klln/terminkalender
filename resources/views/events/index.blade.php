<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deine Termine') }}
        </h2>
    </x-slot>

@extends('events.layout')
@section('content')

    
    <div class="container-fluid mt-3" id="index">
        <div class="row justify-content-center">
            <div class="col-8 table-responsive">
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>Dein Termin wurde erstellt.</p>
                    </div>
                @endif
                @if ($message = Session::get('failed'))
                    <div class="alert alert-danger">
                        <p>Dein Termin wurde gelöscht.</p>
                    </div>
                @endif

                <table class="table border">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Uhrzeit</th>
                            <th scope="col" width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        @if (Auth::user()->name == $event->user_name)
                        <tr>
                            <td style="width: 150px">{{ $event->name }}</td>
                            <td style="width: 300px">{{ $event->detail }}</td>
                            <td>{{ $event->datestart }} - {{ $event->dateend }}</td>
                            <td>{{ $event->timestart }} Uhr - {{ $event->timeend }} Uhr</td>
                            <td class="text-center">
                                <a class="btn btn-outline-dark" href="{{ route('events.show',$event->id) }}" style=" margin: 2px">Ansehen</a>
                                <a class="btn btn-outline-dark" href="{{ route('events.edit',$event->id) }}" style="margin: 2px">Bearbeiten</a>
                                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-dark" style="margin: 2px">Löschen</button>
                                </form>
                            </td>
                        </tr> 
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-dark btn-lg create" href="#/create">Neuer Termin</a>
            </div>
        </div>
    </div>
    {!! $events->links() !!}
@endsection    
</x-app-layout>
<script>
    $(document).ready(function(){
        $(".create").click(function() {
            $("#index").animate( {opacity:"0", filter:"alpha(opacity=0)"}, 100, function() {
                $("#index").load("/events/create", function() {
                    $("#index").animate( {opacity:"1", filter:"alpha(opacity=100)"}, 100)
                });
            });
        });
    });
</script>