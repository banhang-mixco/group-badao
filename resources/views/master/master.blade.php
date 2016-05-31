<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Mixco|Mixco</title>
    	<link rel="icon" type="text/css" href="{{ url('public/favicon.png') }}">
    	<meta property="og:title" content="Website">
    	<meta property="og:type" content="article">
    	<meta property="og:image" content="http://mixco.com.vn//thumb/470/246Mixco.vn">
    	<meta property="og:description" content="Mixco.vn">
    	<meta property="og:url" content="http://mixco.com.vn/">
    	<meta name="keywords" content="Mixco.vn">
    	<meta name="description" content="Mixco.vn">
    	<script src="{{ url('public/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
    	<script src="{{ url('public/js/bootstrap.min.js') }}" type="text/javascript"></script>
    	{{--https://behigh.github.io/bootstrap_dropdowns_enhancement/--}}
    	<script src="{{ url('public/js/dropdowns-enhancement.js') }}" type="text/javascript"></script>
    	{{--https://www.woothemes.com/flexslider/--}}
    	<script src="{{ url('public/js/jquery.flexslider.js') }}" type="text/javascript"></script>
        {{--http://www.jqueryscript.net/zoom/Cloud-Zoom-Image-Zoom-jQuery-Plugin-2.html--}}
    	<script src="{{ url('public/js/cloud-zoom.js') }}" type="text/javascript"></script>
    	{{--http://www.jqueryscript.net/slider/Full-Screen-Slider-Plugin-Superslides.html--}}
             <script src="{{ url('public/js/jquery.superslides.js') }}" type="text/javascript"></script>
    		<script src="{{ url('public/js/jquery.formatNumber-0.1.1.js') }}" type="text/javascript"></script>
    		{{--https://notifyjs.com/--}}
    	 <script src="{{ url('public/js/notify.js') }}"></script>

    	 <script src="{{ url('public/js/notify-metro.js') }}"></script>

    	<link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">

    	<link rel="stylesheet" href="{{ url('public/css/cloud-zoom.css') }}">
           <link rel="stylesheet" href="{{ url('public/css/superslides.css') }}">
    	<link rel="stylesheet" href="{{ url('public/css/font-awesome.css') }}">
    	<link rel="stylesheet" href="{{ url('public/css/flexslider.css') }}">
    	<link rel="stylesheet" href="{{ url('public/css/general.css') }}">
    	<link rel="stylesheet" href="{{ url('public/css/header.css') }}">
    	<link rel="stylesheet" href="{{ url('public/css/footer.css') }}">

    </head>

    <body>
        <div class="search_reponsive">
            <form class="formsearch" action="javascript:void(0);" method="post">
                <input type="text" name="q" class="txtsearch_ search-input txtsearch_">
                <input class="search-btn btnsearch" type="submit" value="Tìm kiếm">
                <div class="clearfix"></div>
            </form>
        </div>

        @include('includes.header')

        @include('includes.footer')

        <script src="{{ url('public/js/owl.carousel.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/owl.theme.css') }}">

        {{--<script type="text/javascript">
            $(document).ready(function(){
                $(".search-btn").click(function(){
                    var key = $(this).parent().children("input").val();

                });
            });
        </script>--}}

        <script src="{{ url('public/js/website.js') }}" type="text/javascript"></script>
    </body>
</html>