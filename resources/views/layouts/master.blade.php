<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>

    <!-- le css imports -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.1.1/gh-fork-ribbon.min.css" />

    <!-- le inline styles -->
    <style>
        .grid-controls {
            text-align: center;
            margin: 20px auto;
        }
        .grid {
            margin: auto;
            border-spacing: 0;
            border: solid 2px #111;
        }
        .tile {
            background-color: #2e3338;
            display: inline-block;
            width: 15px;
            height: 15px;
            cursor: pointer;
            margin: 0;
            padding: 0;
            border: solid 1px #111;
            -webkit-transition: background-color 0.15s ease-out;
            -moz-transition: background-color 0.15s ease-out;
            -o-transition: background-color 0.15s ease-out;
            transition: background-color 0.15s ease-out;
        }
        .tile:hover {
            background-color: #484D52;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    @yield('content')
</div>
<script src="static/main.js"></script>
</body>
</html>