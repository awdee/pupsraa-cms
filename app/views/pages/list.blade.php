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
                            <a href="{{ url('contact-us') }}">
                          Map
                        </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('contact-us/list') }}">
                          Contact List
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid-80">
                <div class="page-container">
                    <h2 class="title-header">Contact Details of Officers</h2>
                    <table>
                        <tr>
                            <td colspan="2">
                                <b>President</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="officer-thumb"><img src="{{ asset('img/news-thumbnail.jpg') }}" ></td>
                            <td>Oscar P. Velasco
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09214236368
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: oscarvelasco002@gmail.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/oscar.velasco.505">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Vice President for Internal Affairs</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Jesellie P. Pastolero
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile:
                                <br><span class="glyphicon glyphicon-envelope"></span> Email:
                                <br>
                                <a target="_tab" href="https://www.facebook.com/jesellie.pastolero">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Vice President for External Affairs</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Rome John P. Balnaja
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09493555696
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: zedric01@gmail.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/zedric01">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Secretary</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Kerstin Mae N. Ortega
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09063253690
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: tin_rach_07@yahoo.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/maya.kristi.923">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Treasurer</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Aimee S. Martin
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09207714660
                                <br><span class="glyphicon glyphicon-envelope"></span> Email:
                                <br>
                                <a target="_tab" href="https://www.facebook.com/aimee.s.martin.1">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Auditor</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Anthony T. Claros
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09125816522
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: anthopen23@yahoo.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/anthony.claros.739">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Business Manager</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Bryan Fritz R. Montemayor
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09163941329
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: Silentassassin_bryan@yahoo.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/KhimRhitz">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Business Manager</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Anthony D. Decena
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09262163178
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: decenna@dnb.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/anthony.decena.52">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Public Information Officer</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Michael M. Cocon, Jr.
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09487025657
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: michaelcocon@rocketmail.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/michael.cocon.5">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Board Member</b>
                            </td>
                        </tr>
                        <tr>    
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Christopher C. Almodovar
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09193332875
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: cris.almodovar29@gmail.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/christopher.almodovar.29">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Board Member</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                James Kent C. Torres
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09162923914
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: jameskenttorres@gmail.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/kent.torres.167">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Board Member</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Shelica V. Tan
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09094725693
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: sharefile28@yahoo.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/iammisstan">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Board Member</b>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/news-thumbnail.jpg') }}" class="officer-thumb"></td>
                            <td>
                                Lou Kert S. Buzmion
                                <br><span class="glyphicon glyphicon-phone"></span> Mobile: 09277518894
                                <br><span class="glyphicon glyphicon-envelope"></span> Email: leukertosis_14@yahoo.com
                                <br>
                                <a target="_tab" href="https://www.facebook.com/leukertosis14">
                                    <img src="{{ asset('img/twelveskip/32x32/32-facebook.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-googleplus.png') }}" class="social-32">
                                </a>
                                <a target="_tab" href="#">
                                    <img src="{{ asset('img/twelveskip/32x32/32-linkedin.png') }}" class="social-32">
                                </a>
                            </td>
                        </tr>
                    </table>
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