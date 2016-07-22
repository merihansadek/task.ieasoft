<!DOCTYPE html>
<html>
    <head>
        <title>Log-In</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open(['route' => 'admins.store','method'=>'post'])!!}
                <h2> if you are Admin Log-In</h2>
                    Name:<input type="text"  name="name">
                    password:<input type="password" name="password">
                    <br><br><br>
                    <input type ="submit" value="Log-In" />
                {!!Form::close()!!}
                    <h2> if you are user visit site</h2>
                    <a href="/index">Vsit Site</a>
            </div>
        </div>
    </body>
</html>

