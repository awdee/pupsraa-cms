<!--Home content goes here. Columns made with Unsemantic Grid System-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
    <title></title>
</head>

<body>
    <div class="red-strip-title">
        <div class="wrap">
            <div class="grid-container">
                <div class="grid-100">
                    <div class="grid-65">
                        <p>Projects</p>
                    </div>

                    <div class="grid-35 news-title">
                        <p>News</p>

                        <div class="arrow-down news-title"></div>
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
                    @include('includes.projects')
                    <!--Message from the President-->

                    <div class="grid-100 message">
                        @include('includes.message')
                    </div>
                </div>
                <!--Responsive News Strip, since 'News' will be hidden at arounf 760px width resolution -->

                <div class="red-strip-news">
                    <div class="wrap">
                        <div class="grid-container">
                            <div class="grid-100">
                                <p>News</p>
                            </div>
                        </div>
                    </div>
                </div><!--News-->

                <div class="grid-35">
                    @include('includes.sidebar-home')
                </div>
            </div>
        </div>
    </div>
</body>
</html>