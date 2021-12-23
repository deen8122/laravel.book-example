<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
	

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container content" style="max-width: 900px; margin: 20px auto;">
	@yield('content')
    </body>
    
    <style>
	    .form-group label {display: block}
	    .relative.z-0 {display: none} 
	    .book-add {font-size: 12px; margin: 10px 0 20px;}
    </style>


</html>