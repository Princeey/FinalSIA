<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SmartphoneSales</title>

    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Container for sidebar and content */
        #main {
            display: flex;
        }

        /* Sidebar */
        #sidebar {
            flex: 1;
            background-color: #423d3d;
            color: white;
            padding: 20px;
            min-height: 100vh; /* Set minimum height to fill the entire viewport */
        }

        #sidebar #title {
            margin-bottom: 20px;
        }

        #sidebar h1 {
            margin: 0;
            font-size: 24px;
        }

        #main-nav {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        #main-nav a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s ease;
        }

        #main-nav a:hover {
            background-color: #555;
        }

        /* Content */
        #content {
            flex: 3;
            padding: 20px;
            text-align: center; /* Center-align content */
        }

        /* Active link */
        .active {
            background-color: #555;
        }

        /* Animation for welcome text */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            animation: fadeInUp 0.5s ease forwards;
        }

        /* Hover effect for welcome text */
        h2:hover {
            color: #ff6b6b;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="sidebar">
            <div id="title">
                <h1>SmartphoneSales</h1>
            </div>
            <nav id="main-nav">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/smartphone') }}" class="{{ Request::is('smartphone') ? 'active' : '' }}">Smartphones</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
            </nav>
        </div>
        <div id="content">
            @if (Request::is('/'))
                <h2>Welcome to Smartphone Sales</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKJik1CpqAi1oP5FAhFmnb9a-NVEtAoKB7pFzrGiIlFw&s" alt="Smartphone Image" style="max-width: 100%; height: auto;">
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>
