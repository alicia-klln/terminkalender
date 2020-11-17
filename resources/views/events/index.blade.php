@extends('events.layout')
 
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deine Übersicht') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deine Termine in der Übersicht</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}">Neuer Termin</a>
            </div>
        </div>
    </div>
    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Event-ID</th>
            <th>Name</th>
            <th>Ersteller</th>
            
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->creater }}</td>
            
            <td>{{ $event->detail }}</td>
            <td>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Ansehen</a>
    
                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Bearbeiten</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Löschen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $events->links() !!}
</x-app-layout>
@endsection