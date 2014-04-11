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
    @include('includes.carousel')
    <!--Responsive Grid-based home content.-->
    <!--Home content goes here. Columns made with Unsemantic Grid System-->
    <div class="red-strip-title">
        <div class="wrap">
            <div class="grid-container">
                <div class="grid-100">
                    <div class="grid-65">
                        <p>
                            Projects
                        </p>
                    </div>
                    <div class="grid-35 news-title">
                        <p>
                            News
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="grid-container">
            <div class="grid-100">
                <!--Projects-->
                <div class="grid-65">
                    @include('includes.projects-container')
                    <!--Message from the Director-->
                    <div class="grid-100 message">
                        @include('includes.message-from-director')
                    </div>
                </div>
                <!--Responsive News Strip, since 'News' will be hidden at arounf 760px width resolution -->
                <div class="red-strip-news">
                    <div class="wrap">
                        <div class="grid-container">
                            <div class="grid-100">
                                <p>
                                    News
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News-->
                <div class="grid-35">
                    @include('includes.news-sidebar')
                    @include('includes.about-sidebar')
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