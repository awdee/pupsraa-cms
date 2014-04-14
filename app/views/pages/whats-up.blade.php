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
                            <a href="{{ url('whats-up') }}">
                            News
                            </a>
                        </li>
                        <li class="" style="border-bottom: 1px solid #ddd;">
                            <a href="{{ url('whats-up/projects') }}">
                            Alumni Projects
                            </a>
                        </li>
                        <li class="" style="border-bottom: 1px solid #ddd;">
                            <a href="{{ url('whats-up/events') }}">
                            Events
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid-45">
                <div class="page-container">
                    <h2 class="title-header">Latest News</h2>
                    <h3>Testimonial Program for Board Passers</h3>
                    <p>
                    </p>
                </div>
            </div>
            <div class="grid-35">
                @include('includes.news-sidebar')
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