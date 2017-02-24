@extends('layouts.app')

@section('content')

<section class="flex-wrapper">
        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 " id="login">
            <div class="panel panel-default">    
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <h2 class="blue-text text-center slim">Panel administración</h2>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                
                            <div class="col-md-10 col-md-offset-1">
                                <div class="">
                                
                                <input id="email" type="email" class="form-control input-lg" name="email" placeholder="Correo" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="">
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-primary btn-lg btn-block slim">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@include('partials.bacsfooter')
</section>
@endsection
