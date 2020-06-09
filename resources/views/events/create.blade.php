@extends('events.layout')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('events.index') }}"> Back</a>
            </div>
        </div> 
    </div>

        <div class="justify-content-center row">
            <div class="text-center">
                <label class="font-weight-bold h2">Add New Product</label>
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
             <div class="justify-content-center">
                <div class="card col-md-12">
                    <form action="{{ route('events.store') }}" method="POST" class="justify-content-center">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 text-md-right text-danger">Event's name:</label>                     
                            
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Kevin's part" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">                            
                                <label class="col-md-4 text-md-right text-danger">Choose an event:</label>                
                            <div class="form-group dropdown col-md-6">
                                    <p class="">
                                        <select class="btn btn-danger dropdown-toggle btn-block" name="anEvent" required>
                                            <option selected>Home party</option>
                                            <option >Pool party </option>
                                            <option >Fest </option>
                                        </select>
                                    </p>
                            </div>
                        </div>

                        <div class="form-group row">                              
                                <label class="col-md-4 text-md-right text-danger">Description:</label>
                            <div class="col-md-6">
                                <input type="text" name="description" class="form-control" placeholder="Bring alcohol and snacks" required autofocus>
                            </div>
                        </div>


                        <!--
                        
                        Intenté que la opción que seleccione por ejemplo public, sea 0 y private 1, la persona visualizará public pero el programa leerá 0, solo que no supe como hacer eso! :c

                        <div class="form-group row">                            
                                <label class="col-md-4 text-md-right text-danger">Choose an event:</label>                
                            <div class="form-group dropdown col-md-6">
                                    <p class="">
                                        <select class="btn btn-danger dropdown-toggle btn-block" name="publicEvent" required>
                                            <option selected>Public</option>
                                            <option >Private</option> 
                                         
                                        </select>
                                    </p>
                            </div>
                        </div>   -->


                        
                        <div class="form-group row">                              
                                <label class="col-md-4 text-md-right text-danger">Type event:</label>
                            <div class="col-md-6">
                                <input type="text" name="publicEvent" class="form-control" placeholder="Public (0), private (1)" required autofocus>
                            </div>
                        </div> 

                        <div class="form-group row">                              
                                <label class="col-md-4 text-md-right text-danger">Location:</label>
                            <div class="col-md-6">
                                <input type="text" name="location" class="form-control" placeholder="Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">                              
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-danger">Create</button>
                            </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
