@extends('layouts.admin')

@section('content')

<h1>Create Users</h1>

        {!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
            <div class="form-group">
                    {!!Form::label('name','Name:')!!}
                    {!!Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                    {!!Form::label('email','Email:')!!}
                    {!!Form::text('email',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                    {!!Form::label('role_id','Role:')!!}
                    {!!Form::select('role_id',[''=>'choose octions']+$roles,null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                    {!!Form::label('is_active','Status:')!!}
                    {!!Form::select('is_active',array(1=>'Active',0=>'not active'),null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                    {!!Form::label('password','Password:')!!}
                    {!!Form::password('password',null,['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                    {!!Form::label('file','title:')!!}
                    {!!Form::file('file',null,['class'=>'form-control'])!!}
            </div>
            

                <div class ="form-group">
                    {!!Form::submit('Create Post',['class'=>'btn btn-primary'])!!}
                </div>
        {!!Form::close()!!}

   
       @include('includes.form_error')
@stop