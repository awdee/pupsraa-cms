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
                        <li class="active">
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
            </div>
            <div class="grid-45">
                <div class="page-container" style="text-align:justify;">
                    <h2 class="title-header">Latest Projects</h2>
                    <h3>Oplan Panulat</h3>
                    <hr>
                    <img src="{{ asset('img/oplan_panulat_small_black.jpg') }}">
                    <hr>
                    <p>It's time to touch lives PUPians! Please support OPLAN PANULAT, a project of the Polytechnic University 
                    of the Philippines Santa Rosa Alumni Association, Inc. (PUPSRAAI).</p>

                    <p>OPLAN PANULAT aims to help students of different public schools to have school supplies for the School 
                    Year 2014-2015. As part of the growing community of PUP Sta. Rosa, let us become instrument of change and of success.</p>

                    <p><b>OPLAN PANULAT has three stages</b></p>

                    <p>1. March 30 - Students who will be taking the PUPCET are encouraged to donate their pencils, or any other 
                    school supply (i.e., erasers, sharpeners, notebooks, etc.). They can give their donations to the marshalls-in-charge.</p>

                    <p>2. March 31- May 31 - PUPSRAAI will be contributing the same amount as to what would have been collected 
                    from the examinees. Furthermore, ANY ALUMNA OR ALUMNUS of PUP Santa Rosa is encouraged to donate, in cash, or in kind. </p>

                    <p>3. Opening of Classes - All donated and collected supplies will be distributed in selected public schools 
                    here in the City of Santa Rosa.</p>

                    <p><b>There are four modes of helping:</b></p>
                    <p>a.<u>Bank Deposit</u>
                    Account Name: Polytechnic University of the Philippines Santa Rosa Alumni Association, Inc., (PUPSRAAI)<br>
                    Account Number: 8513-0768-52<br>
                    Bank: BPI Santa Rosa Balibago</p>

                    <p>b. <u>Money Transfer (Cebuana, Western Union)</u><br>
                    Receiver's Name: Anna Mirasol S. Martin (Treasurer)<br>
                    224 Daisy St., Brgy. Aplaya City of Santa Rosa, Laguna<br>
                    09207714660</p>

                    <p>c. <u>Sending the donations thru LBC, JRS Express</u> c/o Oscar P. Velasco, New Santa Rosa Village, Tiongco Subdivision, Brgy. Tagapo City of Santa Rosa Laguna; and</p>

                    <p>d. <u>Dropping by at PUP Sta. Rosa.</u></p>
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