<!--Responsive Footer-->
<div id="footer-container">
    <div class="wrap">
        <div class="grid-container">
            <div class="grid-100">
                <div class="grid-20 mobile-grid-50 footer-menu">
                    <p>
                        <b>
                                What's Up
                                </b>
                    </p>
                    <ul>
                        <li>
                            <a href="{{ url('whats-up/news') }}">
                                    News
                                    </a>
                        </li>
                        <li>
                            <a href="{{ url('whats-up/projects') }}">
                                    Alumni Projects
                                    </a>
                        </li>
                        <li>
                            <a href="{{ url('whats-up/events') }}">
                                    Events
                                    </a>
                        </li>
                    </ul>
                </div>
                <div class="grid-20 mobile-grid-50 footer-menu">
                    <p>
                        <b>
                                Donate
                                </b>
                        <ul>
                            <li>
                                <a href="{{ url('donate') }}">
                                    Fill Up Form
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('donate/procedure') }}">
                                    Payment Procedure
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('donate/tally') }}">
                                    Donation Tally Sheet
                                    </a>
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="grid-20 mobile-grid-50 footer-menu">
                    <p>
                        <b>
                                Register
                                </b>
                    </p>
                    <ul>
                        <li>
                            <a href="{{ url('register/alumni') }}">
                                    As Alumni
                                    </a>
                        </li>
                        <li>
                            <a href="{{ url('register/speaker') }}">
                                    As Resource Speaker
                                    </a>
                        </li>
                    </ul>
                </div>
                <div class="grid-20 mobile-grid-50 footer-menu">
                    <p>
                        <b>
                                Contact Us
                                </b>
                    </p>
                    <ul>
                        <li>
                            <a href="{{ url('contact-us') }}">
                                    Map
                                    </a>
                        </li>
                        <li>
                            <a href="{{ url('contact-us/list') }}">
                                    Contact List
                                    </a>
                        </li>
                    </ul>
                </div>
                <div class="grid-20 mobile-grid-100 footer-menu-img">
                    <img src="{{ asset('img/pup-logo-white.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>