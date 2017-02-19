@extends('layouts.master')

@section('content')

    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Booking</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mg-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-booking-form">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#select-room" aria-controls="select-room" role="tab" data-toggle="tab"><span class="mg-bs-tab-num">1</span><span class="mg-bs-bar"></span>Select Room</a>
                            </li>
                            <li role="presentation">
                                <a href="#personal-info" aria-controls="personal-info" role="tab" data-toggle="tab"><span class="mg-bs-tab-num">2</span><span class="mg-bs-bar"></span>Personal Info</a>
                            </li>
                            <li role="presentation">
                                <a href="#payment" aria-controls="payment" role="tab" data-toggle="tab"><span class="mg-bs-tab-num">3</span><span class="mg-bs-bar"></span>Payment</a>
                            </li>
                            <li role="presentation">
                                <a href="#thank-you" aria-controls="thank-you" role="tab" data-toggle="tab"><span class="mg-bs-tab-num">4</span>Thank You</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="select-room">
                                <div class="mg-saerch-room">
                                    <div class="mg-book-now mt80">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h2 class="mg-bn-title">Search Rooms <span class="mg-bn-big">For rates & availability</span></h2>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="mg-bn-forms">
                                                    <form class="form-horizontal" role="form" method="GET" action="{{ route('search') }}">
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-6">
                                                                <div class="input-group date mg-check-in">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                    <input type="text" class="form-control" name="arrival_date" id="arrival_date" placeholder="Check In">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-6">
                                                                <div class="input-group date mg-check-out">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                    <input type="text" class="form-control" name="departure_date" id="departure_date" placeholder="Check Out">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <input type="number" class="form-control" name="number_of_guests" id="number_of_guests" placeholder="Guests">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button type="submit" class="btn btn-main btn-block">Check Now</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-available-rooms">
                                    <h2 class="mg-sec-left-title">Available Rooms</h2>
                                    <div class="mg-avl-rooms">
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-1.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-2.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-3.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="personal-info">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mg-book-form-personal">
                                            <h2 class="mg-sec-left-title">Personal Info</h2>
                                            <form asp-controller="Home" asp-action="PersonalInfo" method="post">
                                                <div class="row pb40">
                                                    <div class="col-md-6">
                                                        <div class="mg-book-form-input">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>Address Line 1</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>State/Region</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mg-book-form-input">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>Address Line 2</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>Zip/Post Code</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="mg-book-form-input">
                                                            <label>Country</label>
                                                            <select class="form-control">
                                                                <option value="">Select your country</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="France">France</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="" disabled="true">¦¦¦¦¦¦¦¦</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Aland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cabo Verde">Cabo Verde</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curaçao">Curaçao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kosovo">Kosovo</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestine, State of">Palestine, State of</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Réunion">Réunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Martin">Saint Martin</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Sint Maarten">Sint Maarten</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Sudan">South Sudan</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-Leste">Timor-Leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="United States">United States</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h2 class="mg-sec-left-title">Account Info</h2>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mg-book-form-input">
                                                            <label>Phone</label>
                                                            <input type="tel" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mg-book-form-input">
                                                            <label>Email Address</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                        <div class="mg-book-form-input">
                                                            <label>Re-Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="clearfix mg-terms-input">
                                                <div class="pull-right">
                                                    <label><input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a></label>
                                                </div>
                                            </div>
                                            <a href="#payment" class="btn btn-dark-main btn-next-tab pull-right">Next</a>
                                            <a href="#select-room" class="btn btn-default btn-prev-tab pull-left">Back</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mg-cart-container">
                                            <aside class="mg-widget mt50" id="mg-room-cart">
                                                <h2 class="mg-widget-title">Booking Details</h2>
                                                <div class="mg-widget-cart">
                                                    <div class="mg-cart-room">
                                                        <img src="images/room-1.png" alt="Delux Room" class="img-responsive">
                                                        <h3>Super Delux</h3>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check In:</strong>
                                                        <span>27 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check Out:</strong>
                                                        <span>28 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Adults:</strong>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Child:</strong>
                                                        <span>1</span>
                                                    </div>
                                                    <div class="mg-cart-total">
                                                        <strong>Total:</strong>
                                                        <span>$249.99</span>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="payment">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mg-book-form-billing">
                                            <h2 class="mg-sec-left-title">Billing Address</h2>
                                            <div class="row pb40">
                                                <div class="col-md-6">
                                                    <div class="mg-book-form-input">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mg-book-form-input">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mg-book-form-input">
                                                        <label>City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mg-book-form-input">
                                                        <label>State/Region</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mg-book-form-input">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mg-book-form-input">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mg-book-form-input">
                                                        <label>Zip/Post Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="mg-book-form-input">
                                                        <label>Country</label>
                                                        <select class="form-control">
                                                            <option value="">Select your country</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="France">France</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="" disabled="true">¦¦¦¦¦¦¦¦</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Aland Islands">Aland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaçao">Curaçao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kosovo">Kosovo</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestine, State of">Palestine, State of</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Réunion">Réunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Martin">Saint Martin</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Sint Maarten">Sint Maarten</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Sudan">South Sudan</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-Leste">Timor-Leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="mg-sec-left-title">Card Info</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mg-book-form-input">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mg-book-form-input">
                                                        <label>CVV</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mg-book-form-input">
                                                        <label>Expire</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control">
                                                                    <option value="">Month</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control">
                                                                    <option value="">Year</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#thank-you" class="btn btn-dark-main btn-next-tab pull-right">Pay Now</a>
                                            <a href="#personal-info" class="btn btn-default btn-prev-tab pull-left">Back</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mg-cart-container">
                                            <aside class="mg-widget mt50" id="mg-room-cart">
                                                <h2 class="mg-widget-title">Booking Details</h2>
                                                <div class="mg-widget-cart">
                                                    <div class="mg-cart-room">
                                                        <img src="images/room-1.png" alt="Delux Room" class="img-responsive">
                                                        <h3>Super Delux</h3>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check In:</strong>
                                                        <span>27 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check Out:</strong>
                                                        <span>28 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Adults:</strong>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Child:</strong>
                                                        <span>1</span>
                                                    </div>
                                                    <div class="mg-cart-address">
                                                        <strong>Your Address:</strong>
                                                        <address>
                                                            <strong>John Doe</strong><br>
                                                            Level 13, 2 Elizabeth St, Melbourne<br>
                                                            Victoria 3000 Australia
                                                        </address>
                                                    </div>
                                                    <div class="mg-cart-total">
                                                        <strong>Total:</strong>
                                                        <span>$249.99</span>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="thank-you">
                                <div class="alert alert-success alert-dismissible clearfix">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="mg-alert-icon"><i class="fa fa-check"></i></div>
                                    <h3 class="mg-alert-payment">Thank you! Your booking is confirmed. Invoice Sent in your email address</h3>
                                </div>
                                <div class="mg-cart-container mg-paid">
                                    <aside class="mg-widget mt50" id="mg-room-cart">
                                        <h2 class="mg-widget-title">Booking Details</h2>
                                        <div class="mg-widget-cart">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mg-cart-room">
                                                        <img src="images/room-1.png" alt="Delux Room" class="img-responsive">
                                                        <h3>Super Delux</h3>
                                                        <p>Verbis texit statua status suo quidque concordia. Octavio, ignavi, iudicante intereant accusamus vitiis primos ullum paranda zenonem. Censes cadere urbanitas texit dicebas maius tranquilli, foris morborum divinum que medium utilior crudelis affert, quaerendum refert sequimur atqui ullus d ornamenta consumeret ut divinum, concedo percurri elaborare.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="mg-payment-id">Your Payment ID: #105152396140</h3>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check In:</strong>
                                                        <span>27 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Check Out:</strong>
                                                        <span>28 Jan, 2015</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Adults:</strong>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="mg-widget-cart-row">
                                                        <strong>Child:</strong>
                                                        <span>1</span>
                                                    </div>
                                                    <div class="mg-cart-address">
                                                        <strong>Your Address:</strong>
                                                        <address>
                                                            <strong>John Doe</strong><br>
                                                            Level 13, 2 Elizabeth St, Melbourne<br>
                                                            Victoria 3000 Australia
                                                        </address>
                                                    </div>
                                                    <div class="mg-cart-total">
                                                        <strong>Total:</strong>
                                                        <span>$249.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection