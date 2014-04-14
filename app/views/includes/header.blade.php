    <!--Responsive Header Navigation-->
    <!--Header-->
    <!--Responsive Navigation-->
    <div class="clearfix res-nav">
        <ul class="clearfix">
            <li class="hide-search">
                <a href="{{ url('/') }}">
                    Home
                    </a>
            </li>
            <li>
                <a href="{{ url('whats-up') }}">
                    What's Up?
                    </a>
            </li>
            <li>
                <a href="{{ url('donate') }}">
                    Donate
                    </a>
            </li>
            <li>
                <a href="{{ url('register') }}">
                    Register
                    </a>
            </li>
            <li>
                <a href="{{ url('contact-us') }}">
                    Contact Us
                    </a>
            </li>
        </ul>
        <a href="#" id="pull">
        </a>
    </div>
    <!--End of res nav-->
    <div id="header-container">
        <div class="logo-container">
            <img src="{{ asset('img/pup-logo.png') }}">
        </div>
        <div class="title">
            <span class="pup-title">
                Republic of the Philippines
                </span>
            <span class="santarosa-title">
                Polytechnic University of the Philippines
                </span>
            <span class="alumni-title">
                Santa Rosa Alumni Association, Inc.
                </span>
        </div>
        <div class="clearfix menu-nav">
            <ul class="clearfix">
                <li class="hide-search">
                    <a href="{{ url('/') }}">
                        Home
                        </a>
                </li>
                <li class="hide-search">
                    <a href="{{ url('whats-up') }}">
                        What's Up?
                        </a>
                </li>
                <li class="hide-search">
                    <a href="{{ url('donate') }}">
                        Donate
                        </a>
                </li>
                <li class="hide-search">
                    <a href="{{ url('register') }}">
                        Register
                        </a>
                </li>
                <li class="hide-search">
                    <a href="{{ url('contact-us') }}">
                        Contact Us
                        </a>
                </li>
                <li>
                    <input type="text" id="search-bar" placeholder="Search">

                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $("#search-bar").click(function () {
            $(".hide-search").hide();
            $("#search-bar").css("width", "300px");
        });
        $("#search-bar").blur(function () {
            $("#search-bar").css("width", "90px");

            setTimeout(function () {
                $(".hide-search").fadeTo("slow", 1);
            }, 250);
        });
    </script>