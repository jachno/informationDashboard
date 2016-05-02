
@extends('forms.master')

@section('content')


                <!-- Login Form -->
                        {{ Form::open(array('url' => 'login')) }}
                    <div class="form-group">
                        <div class="col-xs-12">
                        {{ Form::label('email', 'Email Address') }}
                        {{ Form::text('email', '', array('placeholder' => 'awesome@awesome.com')) }}                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password') }}               
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
                        {{ Form::submit('Submit!') }}                        
                        </div>
                    </div>
          </form>
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/RcsdAh" target="_blank">AppUI 2.5</a></small>
            </footer>
            <!-- END Footer -->
        </div>


@endsection
