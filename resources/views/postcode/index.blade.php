<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shiekh's periperi shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="periperi food">
        <meta name="author" content="Sheikh">
        <meta name="robots" content="index, follow">

        <!-- Override CSS file - add your own CSS rules -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- Custom bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->
        <div class="header">
            <div class="container">
                <h1 class="header-heading">Sheikh's periperi</h1>
            </div>
        </div>
        <div class="nav-bar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="">
                    <h2 class="sub-header">Shop A</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Shop Name</th>
                                    <th class="col-md-3">Postcode</th>
                                    <th class="col-md-4">Created AT</th>
                                    <th class="col-md-5">Modified AT</th>
                                </tr>
                            </thead>
                            @foreach($postcodes['shopAPostcodes'] as $postcode)
                                <tbody>
                                    <tr>
                                        <td>{{$postcode->id}}</td>
                                        <td>Shop A</td>
                                        <td>{{$postcode->postcode}}</td>
                                        <td>{{$postcode->created_at}}</td>
                                        <td>{{$postcode->updated_at}}</td>
                                        <td>{{ Form::open(array('url' => 'postcodes/' . $postcode->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
                                        </td>
                                    </tr>
                                </tbody> 
                            @endforeach 
                        </table>
                      </div>
                    </div>
                    <div class="">
                    <h2 class="sub-header">Shop B</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">ID</th>
                                        <th class="col-md-2">Shop Name</th>
                                        <th class="col-md-3">Postcode</th>
                                        <th class="col-md-4">Created AT</th>
                                        <th class="col-md-5">Modified AT</th>
                                    </tr>
                                </thead>
                                @foreach($postcodes['shopBPostcodes'] as $postcode)
                                    <tbody>
                                        <tr>
                                            <td>{{$postcode->id}}</td>
                                            <td>Shop B</td>
                                            <td>{{$postcode->postcode}}</td>
                                            <td>{{$postcode->created_at}}</td>
                                            <td>{{$postcode->updated_at}}</td>
                                            <td>{{ Form::open(array('url' => 'postcodes/' . $postcode->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                            {{ Form::close() }}
                                            </td>
                                        </tr>
                                    </tbody> 
                                @endforeach 
                            </table>
                        </div>
                        <p><a href="/shops">Add Postcode</a><p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                &copy; Copyright 2017
            </div>
        </div>
    </body>
</html>