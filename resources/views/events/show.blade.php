@extends('events.layout')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('events.index') }}">Back</a>
            </div>
        </div> 
    </div>

    <div class="justify-content-center row">
        <div class="text-center">
            <label class="font-weight-bold h2">Show Product</label>
        </div>
    </div>



    <div class="row">
        <div class="justify-content-center">
            <div class="card col-md-12 text-center">
        
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong  class="text-danger">Name:</strong>
                        {{ $event->name }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-danger">Details:</strong>
                        {{ $event->anEvent }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-danger">Details:</strong>
                        {{ $event->description }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-danger">Details:</strong>
                        {{ $event->publicEvent }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-danger">Details:</strong>
                        {{ $event->location }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
