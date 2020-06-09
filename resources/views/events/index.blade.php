@extends('events.layout')

@section('content')
    
<div class="container">
    

 
    

    <div class="justify-content-center row">
        <div class="text-center">
            <label class="font-weight-bold h1">Hi, {{ auth()->user()->name}}</label>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @auth

      <!--<th>welcome: {{ auth()->user()->name}}</th>-->

      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    @endauth

    <div class="row">
            <div class="justify-content-center">
                    <table class="table table-bordered table-striped ">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Tipo de evento</th>
                            <th>descripcion</th>
                            <th>public Event</th>
                            <th>Location</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->anEvent }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->publicEvent }}</td>
                            <td>{{ $event->location }}</td>
                            <td>
                                <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
</div> 
    {!! $events->links() !!}

@endsection
