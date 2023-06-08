    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Engineering & Management Institute of India">
    <meta name="author" content="AVM">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{  url('') }}/assets/admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>{{$page_title}} - EMII</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{  url('') }}/assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{url('')}}/assets/admin/css/style.css" rel="stylesheet" />
    <link href="{{url('')}}/assets/admin/css/dark-style.css" rel="stylesheet" />
    <link href="{{url('')}}/assets/admin/css/transparent-style.css" rel="stylesheet">
    <link href="{{url('')}}/assets/admin/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{url('')}}/assets/admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{  url('') }}/assets/admin/colors/color1.css" />

    {{-- custom.css --}}
    <link href="{{url('')}}/assets/admin/css/custom.css" rel="stylesheet" />
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script>
        var base_url = "{{ url('') }}/admin";
    </script>
    <script type="text/javascript" src="{{ url('')}}/assets/notify.min.js"></script>
  