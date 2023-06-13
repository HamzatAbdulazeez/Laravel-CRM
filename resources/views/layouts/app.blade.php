<html>

<head>

    <meta charset="UTF-8">
    <title> {{config('app.name')}} - Admin CRM Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A modern CRM Dashboard NOLT Finance" name="A modern CRM Dashboard NOLT Finance" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://firstpavilion.sfo3.cdn.digitaloceanspaces.com/CrmFinance/NOLT-horizontal-logo-RGB-L%20(1).png" />

    <!-- CSS -->
    <link href="{{URL::asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('dash/assets/css/app.css')}}" rel="stylesheet" type="text/css">

    @livewireStyles

</head>

<body>

    {{$slot}}

    @livewireScripts

</body>

</html>
