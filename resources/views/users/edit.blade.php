@extends('layouts.app')

@section('content')
    <h3>Update your profile</h3>
    <div class="row">
        <div class="col-lg-6">
            {!! Form::model(auth()->user(),['method' => 'PUT' , 'route' => ['users.update' , auth()->user()->username ] ]) !!}
                <div class="row">
                    <div class="col-lg-6">
                        {!! Field::text('first_name') !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Field::text('last_name') !!}
                    </div>
                </div>
                    {!! Field::text('location') !!}
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Update</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop