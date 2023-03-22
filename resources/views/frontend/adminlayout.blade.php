
<link href="{{url('frontend/css/mini.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{url('frontend/js/mini.js')}}"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->






<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="{{route('welcome')}}"><i  aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="active"><a href="{{route('display')}}"><i  aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contacts</span></a></li>
                        <li><a href="{{route('imgshow')}}"><i  aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Image</span></a></li>
                        <li><a href="{{route('logout')}}"><i  aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="user-dashboard">

                    <div class="row">
                    @yield('admin-container')
                        
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    

</body>