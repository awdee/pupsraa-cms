<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Polytechnic University of the Philippines Alumni Association, Inc.
    </title>
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    <!--Responsive Grid-based home content.-->
    <!--Home content goes here. Columns made with Unsemantic Grid System-->
    <div class="no-top"></div>

    <!--Default Inner Page Template-->
    <div class="wrap">
        <div class="grid-container">
            <div class="grid-20">
                <div class="nav-sidebar" style="margin-top:40px; text-align:right;">
                    <h4>Related Links</h4>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active" style="border-bottom: 1px solid #ddd;">
                            <a href="#">
                          Map
                        </a>
                        </li>
                        <li style="border-bottom: 1px solid #ddd;">
                            <a href="#">
                          Contact List
                        </a>
                        </li>
                        <li style="border-bottom: 1px solid #ddd;">
                            <a href="#">
                          History
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid-80">
                <div class="page-container">
                    <h2 class="title-header">Location</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3865.951103859473!2d121.10671900000003!3d14.314273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d9b9e98fc6a7%3A0xa36b98e3f3fb9137!2sP.U.P+Sta+Rosa!5e0!3m2!1sen!2s!4v1397119022171" width="100%"
                    height="250" frameborder="0" style="border:0"></iframe>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
</body>
<script>
    $("document").ready(function () {
        $(".caption-text").fadeTo("fast", 0.5);
        $(".caption-black").fadeTo("fast", 0.5);

    });
    $(".carousel").hover(function () {
        $(".caption-text").fadeTo("fast", 0.8);
        $(".caption-black").fadeTo("fast", 0.8);
    }, function () {
        $(".caption-text").fadeTo("fast", 0.5);
        $(".caption-black").fadeTo("fast", 0.5);
    });
</script>
</html>