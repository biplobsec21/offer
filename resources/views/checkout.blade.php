@extends('new_index')
@section('header_css_js')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/css/checkout.css') }}">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

@endsection
@section('content')

<div class="checkout-page">
        <div class="checkout-page-heading">
            <div class="logo"><img height="30px" src="{{ asset('/images/logo.png') }}" /></div>
            <div class="page-title"><h1>CHECKOUT</h1></div>
            <div class="partner"></div>
        </div>
        <div class="checkout-container">
            <!-- <img src="https://countryflagsapi.com/png/807" /> -->
            <div class="checkout-info">
                <div class="info-country">
                    <h2>DELIVERY COUNTRY</h2>
                    <div class="country-input">
                        <img id="flag-img" src="https://countryflagsapi.com/png/ax" />
                        <select id="countryCode"
                            data-bind="options: countries, optionsText: 'name', optionsValue: 'code', value: countryCode, disable: isDisabled">
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BE">Belgium</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BR">Brazil</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CF">Central African Republic</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island (Australia)</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CG">Congo, the Republic of</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="SZ">Eswatini</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GU">Guam</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland, Republic of</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KR">Korea, Republic of (South Korea)</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MR">Mauritania</option>
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
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MK">North Macedonia</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestine</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthelemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="ZA">South Africa</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="GB">UK</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="US">United States</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VN">Vietnam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="EH">Western Sahara</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="promo-voucher">
                    <div class="heading">
                        <h2>PROMO / STUDENT CODE OR VOUCHERS </h2>
                        <div class="icon"><i class="bi bi-chevron-down"></i></div>
                    </div>
                    <div class="collapsible">
                        <div class="tab-selector">
                            <div data-tab="promo" class="tab selected"><i class="bi bi-tag"></i> <span>PROMO / STUDENT<br/> CODE</span></div>
                            <div data-tab="voucher" class="tab"><i class="bi bi-gift"></i> <span>VOUCHER</span></div>
                        </div>
                        <div class="tab-details" data-tab="promo">
                            <div class="action-instruction">ADD A PROMO/STUDENT CODE</div>
                            <div class="item-input">
                                <label>PROMO/STUDENT CODE</label>
                                <div class="input-container">
                                    <input type="text" />
                                    <button class="apply-button">APPLY CODE</button>
                                </div>
                            </div>
                            <div class="info">
                                <b class="info-title">NEED TO KNOW</b>
                                <ul>
                                    <li>You can only use one discount/promo code per order. This applies to our free-delivery codes, too.</li>
                                    <li>Discount/promo codes cannot be used when buying gift vouchers.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-details hide" data-tab="voucher">
                            <div class="action-instruction">ADD A VOUCHER</div>
                            <div class="item-input">
                                <label>16-DIGIT VOUCHER CODE</label>
                                <div class="input-container">
                                    <input type="text" />
                                    <button class="apply-button">APPLY CODE</button>
                                </div>
                            </div>
                            <div class="info">
                                <p>Got a gift card? Visit My Account to add it to your gift-voucher balance before you can redeem it at checkout.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email">
                    <h2 class="heading">EMAIL ADDRESS</h2>
                    <p>abtahitajwar@gmail.com</p>
                </div>
                <div class="delivery-address">
                    <h2>DELIVERY ADDRESS</h2>
                    <h3>ADD ADDRESS</h3>
                    <form>
                        <div class="input-container">
                            <label>FIRST NAME</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>LAST NAME</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>MOBILE <span class="extra-info">(For delivery updates)</span>:</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>ADDRESS :</label>
                            <input type="text" />
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container error">
                            <label>CITY :</label>
                            <input type="text" />
                            <span class="error">Oops! You need to enter your city before you can continue.</span>
                        </div>
                        <div class="input-container">
                            <label>POSTCODE :</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>COUNTRY :</label>
                            <input type="text" class="prefilled" />
                            <span class="error"></span>
                        </div>
                        <button type="submit" class="submit-button">DELIVER TO THIS ADDRESS</button>
                    </form>
                </div>
                <div class="disabled">
                    <h2>DELIVERY OPTION</h2>
                </div>
                <div class="disabled">
                    <h2>PAYMENT</h2>
                </div>
                <a href="" class="place-order-btn">PLACE ORDER</a>
                <div class="terms">
                    By placing your order you agree to our Terms & Conditions, privacy and returns policies . You also consent to some of your data being stored by ASOS, which may be used to make future shopping experiences better for you.
                </div>
            </div>
            <div class="item-info">
                <div class="info-heading">
                    <h2>2 ITEMS</h2>
                    <a href="#">Edit</a>
                </div>
                <div class="items">
                    <div class="item">
                        <img src="{{ asset('/images/1.webp') }}" height="110px" width="85px" />
                        <div class="item-details">
                            <b>$93.50</b>
                            <p>Reebok Club C Mid II sneakers in chalk</p>
                            <b>WHITE AU 13</b>
                            <p>Qty: <b>1</b></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/2.webp') }}" height="110px" width="85px" />
                        <div class="item-details">
                            <b>$130.50</b>
                            <p>Reebok Club C 85 sneakers in white</p>
                            <b>WHITE AU 13</b>
                            <p>Qty: <b>1</b></p>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <div class="subtotal"><span>Subtotal</span><span>$223.50</span></div>
                    <div class="total"><span>TOTAL TO PAY</span><span>$223.50</span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_css_js')
<script>
    // All countries api
    // https://restcountries.com/v3.1/all
    document.getElementById("countryCode").addEventListener('change', e => {
        document.getElementById("flag-img").src = `https://countryflagsapi.com/png/${e.target.value}`
    })
    document.querySelectorAll(".tab-selector > .tab").forEach(tab => {
        tab.addEventListener('click', e => {
            document.querySelectorAll(".tab-selector > .tab").forEach(tab => tab.classList.remove('selected'))
            e.target.classList.add('selected')
            console.log(e.target.dataset.tab)
            document.querySelectorAll(".tab-details").forEach(tabDetails => {
                
                if(tabDetails.dataset.tab !== e.target.dataset.tab) {
                    tabDetails.classList.add("hide")
                } else {
                    tabDetails.classList.remove("hide")
                }
            })
        })
    })
    document.querySelector(".promo-voucher > .heading").addEventListener("click", () => {
        document.querySelector(".promo-voucher").classList.toggle("collapsed")
    })
</script>
@endsection