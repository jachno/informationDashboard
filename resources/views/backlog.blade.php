
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
@include('head')
</head>
    <body>
        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong>post or edit backlog item</strong>
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
                

                @if(isset($backlog))
                
                      {{Form::model($backlog,array('url' => URL::to('/formPostBacklog/' . $backlog->id, array()), 'id' =>'submit' ))}}
                        
                @else
                      {{Form::open(array('url' => URL::to('/formPostBacklog', array()), 'id' =>'submit' ))}}
                @endif

 


                                {{ Form::label('name', 'name', array('class' => 'form-control')) }}
                                {{ Form::text('name','',['class' => 'form-control']) }}
                                {{ Form::label('description','',['class' => 'form-control']) }}
                                {{ Form::text('description','',['class' => 'form-control'])}}
                                {{ Form::label('priority','',['class' => 'form-control']) }}
                                {{ Form::selectRange('priority', 1, 10,null, array( 'class' => 'form-control'))}}
                                
                                
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