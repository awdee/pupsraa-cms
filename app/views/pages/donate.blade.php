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
                        <li class="active">
                            <a href="{{ url('donate') }}">
                            Donate
                            </a>
                        </li>
                        <li>
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
                    {{ Form::open(array('url' => 'donate/submit', 'id' => 'donation-form', 'name' => 'donation-form')) }}
                    <h2 class="title-header">Donation Form</h2>
                    <div class="alert alert-warning alert-dismissable">
                    Make sure you have your deposit slip with you before proceeding. Click <a href="{{ url('donate/procedure') }}" target="_blank">here</a> for the donation procedure.
                    </div>
                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table>
                        <tr>
                            <td colspan="2"><b>Personal Information</b>
                            </td>
                        </tr>
                        <tr class="table-section">
                            <td align="right">First Name:</td>
                            <td>
                                <input class="form-control" type="text" id="first_name" name="first_name" value="{{ Input::old('first_name') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Middle Name:</td>
                            <td>
                                <input class="form-control" type="text" id="middle_name" name="middle_name" value="{{ Input::old('middle_name') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Last Name:</td>
                            <td>
                                <input class="form-control" type="text" id="last_name" name="last_name" value="{{ Input::old('last_name') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Organization:</td>
                            <td>
                                <input class="form-control" type="text" id="organization" name="organization" value="{{ Input::old('organization') }}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Contact Information</b>
                            </td>
                        </tr>
                        <tr class="table-section">
                            <td class="form-label">Email Address:</td>
                            <td>
                                <input class="form-control" type="text" id="email_address" name="email_address" value="{{ Input::old('email_address') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Contact Number:</td>
                            <td>
                                <input class="form-control" type="text" id="contact_number" name="contact_number" value="{{ Input::old('contact_number') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Mailing Address:</td>
                            <td>
                                <input class="form-control" type="text" id="mailing_address" name="mailing_address" value="{{ Input::old('mailing_address') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">City:</td>
                            <td>
                                <input class="form-control" type="text" id="city" name="city" value="{{ Input::old('city') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">ZIP Code:</td>
                            <td>
                                <input class="form-control" type="text" id="zip_code" name="zip_code" value="{{ Input::old('zip_code') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Country:</td>
                            <td>
                                <select class="form-control" size="1" title="" name="country" value="{{ Input::old('country') }}">
                                    <option value="">Please select a country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, The Democratic Republic of The</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option selected="selected" value="Philippines">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and The Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and The South Sandwich Islands</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Donation Details</b>
                            </td>
                        </tr>
                        <tr class="table-section">
                            <td align="right">Donator Type:</td>
                            <td>
                                <select class="form-control" size="1" title="" name="donator_type">
                                    <option value="">Please choose one..</option>
                                    <option value="Alumni">Alumni</option>
                                    <option value="Friend">Friend</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="friend">
                            <td class="form-label">Friend's Name:</td>
                            <td>
                                <input class="form-control" type="text" id="friend_name" name="friend_name">
                            </td>
                        </tr>
                        <tr id="alumni_course">
                            <td class="form-label">Course:</td>
                            <td>
                                <select class="form-control" size="1" title="" name="donator_course">
                                    <option value="">Please choose one..</option>
                                    <option value="BS in Accountancy">BS in Accountancy</option>
                                    <option value="BS in Business Administration - HRDM">BS in Business Administration - HRDM</option>
                                    <option value="BS in Business Administration - Marketing Management">BS in Business Administration - Marketing Management</option>
                                    <option value="BS in Electronics & Communications Engineering">BS in Electronics & Communications Engineering</option>
                                    <option value="BS in Entrepreneurial Management">BS in Entrepreneurial Management</option>
                                    <option value="BS in Information Technology">BS in Information Technology</option>
                                    <option value="BS in Industrial Engineering">BS in Industrial Engineering</option>
                                    <option value="Bachelor in Secondary Education - Major in English">Bachelor in Secondary Education - Major in English</option>
                                    <option value="Bachelor in Secondary Education - Major in Math">Bachelor in Secondary Education - Major in Math</option>
                                    <option value="BS in Clinical Psychology">BS in Clinical Psychology</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="alumni_year">
                            <td class="form-label">Year Graduated:</td>
                            <td>
                                <input class="form-control" type="text" id="donator_year" name="donator_year">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Project:</td>
                            <td>
                                <select class="form-control" size="1" title="" name="project">
                                    <option value="">Select a project..</option>
                                    <option value="Oplan Panulat">Oplan Panulat</option>
                                </select>
                                <small><a title="Select your preferred alumni project" href="{{ url('whats-up/projects') }}" target="_top">View Alumni Projects</a></small>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Payment Option:</td>
                            <td>
                                <select class="form-control" size="1" title="" name="payment_option">
                                    <option value="">Choose one..</option>
                                    <option value="Bank Deposit">Bank Deposit</option>
                                    <option value="Money Transfer">Money Transfer</option>
                                    <option value="Courier Services">Courier Services</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Branch Name:</td>
                            <td>
                                <input class="form-control" type="text" id="branch_name" name="branch_name" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Transaction Number:</td>
                            <td>
                                <input class="form-control" type="text" id="transaction_number" name="transaction_number" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Date and Time of Deposit:</td>
                            <td>
                                <input class="form-control" type="text" id="transaction_datetime" name="transaction_datetime" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">Amount:</td>
                            <td>
                                <input class="form-control" type="text" id="amount" name="amount" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Security</b>
                            </td>
                        </tr>
                        <tr class="table-section">
                            <?php
                            use Gregwar\Captcha\CaptchaBuilder;
                            $builder = new CaptchaBuilder;
                            $builder->build(); 
                            Session::put('phrase', $builder->getPhrase());
                            ?>
                            <td class="form-label"><img src="<?php echo $builder->inline(); ?>" /></td>
                            <td>
                                <input class="form-control" type="text" id="captcha" name="captcha">
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <center>
                        <button class="sun2-flower-button reset" onclick="resetForm(); return false;">Reset Fields</button>
                        <button type="submit" class="lei-flat-button">Submit</button>
                    </center>
                    {{ Form::close() }}
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
    var resetForm = function() {
        $('#donation-form').find("input[type=text], textarea").val("");
    }
</script>
</html>