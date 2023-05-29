<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            font-family: "Roboto";
        }
    </style>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @routes
    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
