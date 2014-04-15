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
                            <a href="{{ url('donate') }}">
                            Donate
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('donate/procedure') }}">
                            Donation Procedure
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('donate/tally') }}">
                            Donation Tally Sheet
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid-65">
                <div class="page-container">
                    
                    <h2 class="title-header">Donation Procedure</h2>
                    <p>There are four modes of helping:</p>

                    <h4>a.Bank Deposit</h4>
                    <table class="table-donation">
                        <tr>
                            <td class="tb-title">
                                <b>Account Name:</b>
                            </td>
                            <td>
                                Polytechnic University of the Philippines Santa Rosa Alumni Association, Inc., (PUPSRAAI)
                            </td>
                        </tr>
                        <tr>
                            <td class="tb-title"><b>Account Number:</b></td>
                            <td>8513-0768-52</td>
                        </tr>
                        <tr>
                            <td class="tb-title"><b>Bank:</b></td>
                            <td>BPI Santa Rosa Balibago</td>
                        </tr>
                    </table>
                    <hr>
                    <h4>b. Money Transfer (Cebuana, Western Union) </h4>
                     
                    <table class="table-donation">
                        <tr>
                            <td class="tb-title">
                                <b>Receiver's Name:</b>
                            </td>
                            <td>
                                Anna Mirasol S. Martin (Treasurer)<br> 
                                224 Daisy St., Brgy. Aplaya<br> 
                                City of Santa Rosa, Laguna<br>
                                09207714660
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <h4>c. Sending the donations thru LBC, JRS Express</h4>
                    <table class="table-donation">
                        <tr>
                            <td class="tb-title">
                                <b>Receiver's Name:</b>
                            </td>
                            <td>
                                Oscar P. Velasco<br>
                                New Santa Rosa Village, Tiongco Subdivision,<br>
                                Brgy. Tagapo City of Santa Rosa Laguna<br>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <h4>d. Dropping by at PUP Sta. Rosa.</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3865.951103859473!2d121.10671900000003!3d14.314273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d9b9e98fc6a7%3A0xa36b98e3f3fb9137!2sP.U.P+Sta+Rosa!5e0!3m2!1sen!2s!4v1397119022171" width="100%"
                    height="250" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="grid-15">
            </div>
        </div>
    </div>
@include('includes.footer')
</body>
<script>
    $("document").ready(function () {
        $(".caption-text").fadeTo("fast", 0.5);
        $(".caption-black").fadeTo("fast", 0.5);
        $("#friend").hide();
        $("#alumni_course").hide();
        $("#alumni_year").hide();
    });
    $(".carousel").hover(function () {
        $(".caption-text").fadeTo("fast", 0.8);
        $(".caption-black").fadeTo("fast", 0.8);
    }, function () {
        $(".caption-text").fadeTo("fast", 0.5);
        $(".caption-black").fadeTo("fast", 0.5);
    });
    $('select[name="donator_type"]').on('change', function() {
        if($('select[name="donator_type"]').val()=="Alumni") {
            $("#alumni_course").fadeIn();
            $("#alumni_year").fadeIn();
            $("#friend").hide();
        }
        else if($('select[name="donator_type"]').val()=="Friend") {
            $("#alumni_course").hide();
            $("#alumni_year").hide();
            $("#friend").fadeIn();
        }
        else {
            $("#alumni_course").hide();
            $("#alumni_year").hide();
            $("#friend").hide();
        }
    });
</script>
</html>