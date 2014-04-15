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
                <div class="nav-sidebar">
                    <h4>Related Links</h4>

                    <ul class="nav nav-pills nav-stacked rel-links">
                        <li>
                            <a href="{{ url('whats-up') }}">
                            News
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('whats-up/projects') }}">
                            Alumni Projects
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('whats-up/events') }}">
                            Events
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid-45">
                <div class="page-container" style="text-align:justify;">
                    <h2 class="title-header">Upcoming Events</h2>
                    
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