
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
@include('head')
    <body>
        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong>Posting an update</strong>
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <div class="block-options pull-right">

                    </div>
                    <h2>Post new update</h2>
                </div>
                <!-- END Login Title -->
                

 
 
            @if(isset($timeline))
                
                      {{Form::model($timeline,array('url' => URL::to('/formpostupdate/' . $timeline->id, array(), true), 'id' =>'submit' ))}}
                        
                @else
                      {{Form::open(array('url' => URL::to('/formpostupdate', array(), false), 'id' =>'submit' ))}}
                @endif
                            {{ Form::label('description') }}
                                {{ Form::textarea('description',null,array('class'=>'form-control')) }}
                                    {{ Form::submit('Save', array('class' => 'btn btn-effect-ripple btn-sm btn-primary')) }}
                            {{ Form::close() }}
              
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="/js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
    </body>
    
</html>