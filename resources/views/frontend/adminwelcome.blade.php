@extends('frontend.adminlayout')
@section('admin-container')

<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <style>
        .navbar-nav {
            margin-left:800px ;
        }
    </style>
</head>
  
<body>
  
    <!-- Creating a navigation bar using the
         .navbar class of bootstrap -->
    <nav class="navbar navbar-expand-sm bg-light">
  
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                  About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  Contacts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  Settings
                </a>
            </li>
        </ul>
    </nav>
@endsection