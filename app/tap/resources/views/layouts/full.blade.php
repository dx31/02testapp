<html class="no-js" lang="es"><!--<![endif]--><!-- BEGIN HEAD --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>{{ config('app.name') }}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">

<link href="{!! url('css/css.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/simple-line-icons.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/bootstrap.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/themify-icons.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/uniform.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/bootstrap-switch.css') !!}" rel="stylesheet" type="text/css">
<!-- <link href="{!! url('css/bootstrap-select.min.css') !!}" rel="stylesheet" type="text/css"> -->
<link href="{!! url('css/select2.min.css') !!}" rel="stylesheet" /> 
<link href="{!! url('css/select2-bootstrap.min.css') !!}" rel="stylesheet" /> 
<link href="{!! url('css/bootstrap-spinner.css') !!}" rel="stylesheet" /> 
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{!! url('css/bootstrap-datetimepicker.min.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/fullcalendar.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/jqvmap.css') !!}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="{!! url('css/tasks.css') !!}" rel="stylesheet" type="text/css">
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="{!! url('css/components.css" id="style_components') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/plugins.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/layout.css') !!}" rel="stylesheet" type="text/css">
<link href="{!! url('css/grey.css') !!}" rel="stylesheet" type="text/css" id="style_color">
<link href="{!! url('css/custom.css') !!}" rel="stylesheet" type="text/css">

<script src="{{ url('/js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{!! url('/js/vue.js') !!}"></script>
<script type="text/javascript" src="{!! url('/js/bootstrap.min.js') !!}"></script>
<script src="{{ url('/js/moment-with-locales.min.js') }}"></script>
</head>
<body>
@yield('content')
</body>
</html>
