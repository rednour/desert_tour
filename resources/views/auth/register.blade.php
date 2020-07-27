@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                        {!! Form::open([ 'url' => 'register','method' => 'POST']) !!} 
                       
                        <div class="form-group row">
                            {!! Form::label('name', 'nom',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name',null,['id'=>'name','class' => "form-control", 'required' => 'required']) !!}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    </div>                      

                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('prenom', 'prenom',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                               {!! Form::text('prenom',null,['id'=>'prenom','class' => "form-control", 'required' => 'required']) !!}
                               </div>
                               <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                <small class="text-danger">{{ $errors->first('prenom') }}</small>
                                </div>                        

                            
                        </div>
                        <div class="form-group row">
                            {!! Form::label('pays', 'pays',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                               @include('layouts.countries')
                                     
                               <div class="form-group{{ $errors->has('pays') ? ' has-error' : '' }}">
                                <small class="text-danger">{{ $errors->first('pays') }}</small>
                                </div>                        

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {!! Form::label('ville', 'ville',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('ville',null,['id'=>'ville','class' => "form-control", 'required' => 'required']) !!}
                        
                                <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                                    <small class="text-danger">{{ $errors->first('ville') }}</small>
                                    </div>                                                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <small class="text-danger">{{ $errors->first('ville') }}</small>
                                        </div>                        
    

                            </div>
                        </div>


                        <div class="form-group row">
                            {!! Form::label('email', 'email',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', null, ['id'=>'email','class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                                </div>
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>                       

                            
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'password',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                        {!! Form::password('password', ['id'=>'password','class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                    
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>                    
                                    </div>
                             
                        <div class="form-group row">
                            {!! Form::label('password_confirm', 'password-confirm',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['id'=>'password_confirm','class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row " >
                            {!! Form::label('telephone', 'telephone',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                            {!! Form::text('telephone',null,['id'=>'telephone','class' => "form-control", 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row " >
                            {!! Form::label('date_naissance', 'date naissance',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                          {!! Form::date('date_birth', null, ['id'=>'date-naissaince','class' => 'form-control', 'required' => 'required']) !!}
                          </div>

                        </div>
                        <div class="form-group row">
                            {!! Form::label('masculin', 'masculin',['class'=> 'col-md-4 col-form-label text-md-right']) !!}
                             {!!form::radio('sexe','masculin',true,['id'=>'masculin']) !!}
                               {!! Form::label('feminin', 'feminin',['class'=>'col-md-4 col-form-label text-md-right']) !!}
                               {!!form::radio('sexe','feminin',true,['id'=>'feminin']) !!}
                           </div>
                        <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                        
                            {!! Form::submit('register', ['class' => 'btn btn-primary']) !!}
                        </div>
                            </div>
                            
                             
                            {!! Form::close() !!}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
