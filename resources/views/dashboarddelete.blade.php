


        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>


               

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Page content -->
                    <div id="page-content" style="padding-top:10px;">
                        <!-- User Profile Row -->
                        <div class="row">
                            <div class="col-md-5 col-lg-6">
                                
                                <div class="widget">
                                    <div class="widget-image widget-image-sm" style="height:85px;">
                                        <div class="widget-image-content text-center" style="background-color:rgb(110, 191, 209);">
                                            <h2 class="widget-heading text-light"><strong>NonFunctional Test Team</strong></h2>
                                        </div>
                                    </div>

                                    <div class="widget-content widget-content-mini border-bottom">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <td>ATG Fusion Mode</td>
                                            <td><strong>Fusion Out @ 09:40 17/03</strong></td>
                                   
                                        </tr>
                                        <tr>
                                            <td>Current ATG NFT Build</td>
                                            <td><strong>"INTPIPE-COMP-JOB1-2745" "10-Mar-2016 19:28 SVN Version 32046" "int" "F-1A-D5C82D31" </strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                    
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="widget">
                                                             <div class="widget-content widget-content-mini border-bottom">
                                        <span class="pull-right text-muted">{{$backlogs->count()}} items</span>
                                                                          @if (Auth::check())
                                    
                                    <a href="/editbacklog/"><button href="" class="btn btn-primary">add backlog</button></a>
@endif
                                        Current Backlog
                                    </div>
                                    <div class="widget-content widget-content-full">
                                        <table class="table table-borderless table-striped table-vcenter">
                                            <tbody>
                                                   @foreach ($backlogs as $backlog)
                                            <tr>
                                                    <td class="text-center" style="width: 100px;">
                                                                   @if(Auth::check())
                                                        <a href="/editbacklog/{{$backlog->id}}" class="text-muted">{{$backlog->priority}}</a><br>
                                                        @else
                                                        {{$backlog->priority}}<br>
                                                    @endif
                                                    <td>
                                                        <a href="javascript:void(0)">{{$backlog->name}}</a><br>
                                                            <small>{{$backlog->description}}</small></a>
                                                                                

                                                    </td>
                                                    <td class="text-center" style="width: 80px;">
                                                    </td>
                                                </tr>
                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            
            </div>
            </div>
                            
                            <div class="col-md-7 col-lg-6">
                                
                                
                                <div class="block full">
                                    @if (Auth::check())
                                    
                                    <a href="/postupdate"><button href="" class="btn btn-primary">Post Update</button></a>
@endif
                                    </<div>
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#profile-activity">Activity</a></li>
                                            
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <!-- Activity -->
                                        <div class="tab-pane active" id="profile-activity">
                                            <div class="timeline block-content-full">
                                                <ul class="timeline-list">

                                                     @foreach ($timelines as $timeline)
                                                    <li>
                                                        <div class="timeline-time">{{ $timeline->created_at->diffForHumans()}}
                                                        @if(Auth::check())
                                                                                                                    <a href="/deleteupdate/{{$timeline->id}}" ><i class="fa fa-trash-o"></i></a>

@endif
                                                        </div>
                                                        <div class="timeline-icon themed-background-info text-light-op"><a href="/postupdate/{{$timeline->id}}"><i class="fa fa-bolt"></i></a></div>
                                                        <div class="timeline-content">
                                                            <p class="push-bit" style="word-wrap: break-word;">{{$timeline->description }}</p>
                                                            
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Activity -->

                                        
                                    </div>
                                    <!-- END Tabs Content -->
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile Row -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.1.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.js"></script>
    </body>
</html>