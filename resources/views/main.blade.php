<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/main.css">
    
</head>

<body>

    <div id="main">
        <nav>
            <a href="#" class="logo"> <img src="/front/image/letter-t-logo-template_73940-2-original-removebg-preview.png" /> </a>
            <input class="menu-btn" type="checkbox" id="menu-btn">
            <label class="menu-icon" for="menu-btn"> <span class="nav-icon"></span> </label>
            <ul class="menu">
                <li><a class="nav_link" href="#">{{ __("Home")}}</a></li>
                <li><a class="nav_link" href="{{('exp')}}">{{ __("Skills")}}</a></li>
                <li><a class="nav_link" href="{{('foot')}}">{{ __("Work")}}</a></li>
                <li><a class="nav_link" href="{{('foot')}}">{{ __("Contact")}}</a></li>
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span > </span> Lang</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="/en"><span class="flag-icon flag-icon-us"> </span>  English</a>
                                <a class="dropdown-item" href="/ru"><span class="flag-icon flag-icon-ru"> </span>  Russian</a>
                                <a class="dropdown-item" href="/kz"><span class="flag-icon flag-icon-kz"> </span>  Kazakh</a>
                            </div>
                        </li>
            </nav>
            </ul>
            
        </nav>
    </div>
    
    <div class="content">
        <div class="model"> <img src="/front/image/20200905_223448.jpg" /> </div>
        <div class="main-text">
            <h1>{{ __("Hello, I am Temirlan")}}</h1> <a href="" class="portfolio-btn">{{ __("See more")}}</a>
        </div>

            
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>