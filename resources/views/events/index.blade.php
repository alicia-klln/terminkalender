@extends('events.layout')
 
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deine Übersicht') }}
        </h2>
    </x-slot>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>Dein Termin wurde erstellt.</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Event-ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Ersteller</th>
                            <th scope="col">Details</th>
                            <th scope="col" width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            @if ($users()->name == $creater)
                        <tr>
                            <td style="width: 100px">{{ $event->id }}</td>
                            <td style="width: 150px">{{ $event->name }}</td>
                            <td style="width: 100px">{{ $event->creater }}</td>
                            
                            <td style="width: 600px">{{ $event->detail }}</td>
                            <td class="text-center">
                                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                
                                    <button class="btn btn-info" href="{{ route('events.show',$event->id) }}" style=" margin: 2px">Ansehen</button>
                    
                                    <button class="btn btn-secondary" href="{{ route('events.edit',$event->id) }}" style="margin: 2px">Bearbeiten</button>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger" style="margin: 2px">Löschen</button>
                                </form>
                            </td>
                        </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-lg" href="{{ route('events.create') }}">Neuer Termin</button>
            </div>
        </div>
    </div>
    {!! $events->links() !!}
</x-app-layout>
@endsection