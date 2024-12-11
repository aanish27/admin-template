<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="layout-fixed control-sidebar-push-slide hold-transition skin-blue sidebar-collapse sidebar-mini">
    <div class="wrapper">
        <x-nav-bar/>
        <x-side-bar/>
        {{ $slot }}
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
