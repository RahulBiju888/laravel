<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freelancer - @yield('title')</title>

    <!-- FAVICON -->
    {{-- <link href="img/favicon.png" rel="shortcut icon"> --}}
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <link href="{{ url('plugins/summernote/summernote.css') }}" rel="stylesheet" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap-slider.css') }}">
    <!-- Font Awesome -->
    <link href="{{ url('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{ url('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{ url('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">
    @include('layouts.freelancer.nav')
    @yield('content')

    @include('layouts.freelancer.footer')

    <!-- JAVASCRIPTS -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ url('plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/bootstrap-slider.js') }}"></script>
    <!-- tether js -->
    <script src="{{ url('plugins/tether/js/tether.min.js') }}"></script>
    <script src="{{ url('plugins/raty/jquery.raty-fa.js') }}"></script>
    <script src="{{ url('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ url('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ url('plugins/google-map/gmap.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
    <!--Summernote js-->
    <script src="{{ url('plugins/summernote/summernote.min.js') }}"></script>

    <script>
        tinymce.init({
            selector: 'textarea#text-editor',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
</body>

</html>
