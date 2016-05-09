
@extends('forms.master')

@section('content')
<div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                         </div>
                    <h2>Please Login</h2>
                </div>
                <!-- END Login Title -->
                <!-- Login Form -->
                <form id="form-login" action="/doLogin" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                             {{ Form::text('email', '', array('placeholder' => 'username', 'class'=>'form-control')) }}                        
                     </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            {{ Form::password('password', array('placeholder' => 'password', 'class'=>'form-control')) }}               
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me">
                                <span></span>
                            </label>
                            Remember Me?
                        </div>
                        <div class="col-xs-4 text-right">
        {{ csrf_field() }} 
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Let's Go</button>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->

</div>

@endsection
