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
                <div class="main">
                    <form class="form-horizontal" method="post" action="/shops">
                        <div class="form-group">
                            <label for="postcode" class="col-lg-3 control-label">
                                Postcode
                            </label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="postcode" id="postcode">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="shop" class="col-lg-3 control-label">
                                Select Shop
                            </label>
                            <div class="col-lg-5">
                                <select class="form-control m-bot15" name="shopId">
                                    @foreach($shops as $shop)
                                        <option value="{{$shop->id}}">{{$shop->name}}<ption>
                                    @endforeach
                                </select>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    <p><a href="/postcodes">See Postcodes</a><p>
                </div>
                <div class="aside">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
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