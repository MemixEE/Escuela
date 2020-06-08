@extends('events.layout')

@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
        </div>
    </div>

    <div class="justify-content-center row bg-warning">
        <div class="text-center  col-md-8">
            <label class="font-weight-bold h2">Add New Product</label>
        </div>
    </div>

    

</div>

    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


    <div class="row">
         <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-success">
                   
                    <form action="{{ route('events.store') }}" method="POST" class="justify-content-center">
                        @csrf

                        <div class="form-group row">

                            <label class="col-md-4 text-md-right text-danger">Name:</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                                <p>Tipo de evento
                                    <select name="anEvent" required>
                                        <option selected>Home party</option>
                                        <option >Pool party </option>
                                        <option >Fest </option>
                                    </select>
                                </p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


<div class="container bg-warning">
    
    

                <form action="{{ route('events.store') }}" method="POST">
                    @csrf

                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nomnre:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                  <p>Tipo de evento
                          				<select name="anEvent" required>
                          					<option selected>Home party</option>
                          					<option >Pool party </option>
                          					<option >Fest </option>
                          				</select>
                          			</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Descripcion:</strong>
                                <input type="text" name="description" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Evento publico:</strong>
                                <input type="text" name="publicEvent" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ubicacion:</strong>
                                <input type="text" name="location" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary pl-5 pr-5">Create</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
