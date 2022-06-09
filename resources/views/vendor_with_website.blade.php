@extends('new_index')
@section('header_css_js')
        <link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="preconnect" />
		<link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="stylesheet" as="font" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashback')}}/bundles/static/css/base-3c7ce6f08d.css" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashback')}}/bundles/static/css/header-ea25c623bc.css" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashback')}}/css/gecko-css/level-0/fancybox/fancyboxoverridesnap-35cc54b199.css" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashback')}}/bundles/static/css/v2/merchant-8bebe5ea45.css" type="text/css" />
@endsection
@section('content')

<form method="post" action="https://www.topcashback.com/nike/" id="aspnetForm">
				
	
    <div class="gecko-main">
    
        <div class="gecko-primary">
            <div class="gecko-single-container">
                <div class="cashback-h1-outer-container">
                    <div class="cashback-h1-container jsFontSizing">
                        <h1>
                            <span data-localizer="ignore">Nike</span>
                            Cash Back Offers & Discounts
                        </h1>
                    </div>
                </div>
                <div
                    id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlMerchantHeader"
                    class="gecko-merchant-background"
                    style="background-image:url(../images/suppliers/merchant-header-backgrounds/nikemerchantheaderlarge.jpg),url(../images/suppliers/merchant-header-backgrounds/merchant-blank.jpg);"
                >
                    <div class="gecko-logo-main-full-width">
                        <img id="ctl00_GeckoTwoColPrimary_merchantPnl_imgMerchantLogo" src="{{asset('topCashback')}}/images/suppliers/large-logos/nike_lg.png" alt="Nike Logo" />
                    </div>
                </div>
                <div id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlNewMerchant" class="panel-merchant-wrap">
                    <div id="ctl00_GeckoTwoColPrimary_merchantPnl_newMerchantPanel" class="gecko-merchant-panel">
                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlNewMerchantPanel" class="merchant-panel">
                            <div class="merchant-signup-text">
                                <h2 id="ctl00_GeckoTwoColPrimary_merchantPnl_lblNewMerchantHeader" class="merchant-panel-description">Get up to 8% of your purchase back when you shop with Nike</h2>
                            </div>
                            <div class="merchant-signup-text">
                                <span id="ctl00_GeckoTwoColPrimary_merchantPnl_lblNewMerchantDescription">Sign up for free and just shop with Nike as normal. Our members earned $80,000+ at Nike in the past month.</span>
                                <span id="ctl00_GeckoTwoColPrimary_merchantPnl_lblMerchantCurrencySign"></span>
                            </div>
                        </div>
                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_tempSignUp" class="join-form">
                            <link rel="stylesheet" href="{{asset('topCashback')}}/bundles/static/css/join-form-4173c64af7.css" type="text/css" />
                            <form action="https://www.topcashback.com/action_page.php">
                                <div id="formContainer" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnJoin&#39;)">
                                    <div class="form-float-element">
                                        <input name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$emailInput" id="emailInput" type="text" autocomplete="false" onchange="inputChanged(this);" name="email" spellcheck="false" />
                                        <label for="emailInput" class="label-name">
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_EmailPlaceholder" class="content-name">Email</span>
                                        </label>
                                        <span id="typoHolder" class="typo-holder"></span>
                                    </div>
                                    <div class="form-float-element">
                                        <input name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$passwordInput" id="passwordInput" type="password" autocomplete="new-password" onchange="inputChanged(this);" name="psw" />
                                        <label for="passwordInput" class="label-name">
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_PasswordPlaceholder" class="content-name">Choose a password</span>
                                        </label>
                                        <div id="passwordEye" class="show-password" onclick="showPassword()"></div>
                                    </div>
                                
                                    <div id="passwordFeedbackContainer" class="hidden">
                                        <div id="requirementsContainer" class="requirements-container">
                                            <div class="requirement">
                                                <div class="image-container">
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-cross.svg"
                                                        id="upperLowerCross"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-cross.png&#39;;"
                                                        alt="cross"
                                                    />
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-checkmark.svg"
                                                        id="upperLowerTick"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-checkmark.png&#39;;"
                                                        alt="tick"
                                                        class="hidden"
                                                    />
                                                </div>
                                                <p id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_ctl02_upperAndLowercaseInfo">Upper and lowercase letters</p>
                                            </div>
                                            <div class="requirement">
                                                <div class="image-container">
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-cross.svg"
                                                        id="lengthCross"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-cross.png&#39;;"
                                                        alt="cross"
                                                    />
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-checkmark.svg"
                                                        id="lengthTick"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-checkmark.png&#39;;"
                                                        alt="tick"
                                                        class="hidden"
                                                    />
                                                </div>
                                                <p id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_ctl02_minimumLengthInfo">At least 8 characters</p>
                                            </div>
                                            <div class="requirement">
                                                <div class="image-container">
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-cross.svg"
                                                        id="numberCross"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-cross.png&#39;;"
                                                        alt="cross"
                                                    />
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-checkmark.svg"
                                                        id="numberTick"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-checkmark.png&#39;;"
                                                        alt="tick"
                                                        class="hidden"
                                                    />
                                                </div>
                                                <p id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_ctl02_numberInfo">At least one number</p>
                                            </div>
                                            <div class="requirement">
                                                <div class="image-container">
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-cross.svg"
                                                        id="symbolCross"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-cross.png&#39;;"
                                                        alt="cross"
                                                    />
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-checkmark.svg"
                                                        id="symbolTick"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-checkmark.png&#39;;"
                                                        alt="tick"
                                                        class="hidden"
                                                    />
                                                </div>
                                                <p id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_ctl02_symbolInfo">At least one symbol</p>
                                            </div>
                                        </div>
                                        <div id="success" class="requirements-container requirement-success hidden">
                                            <div class="requirement">
                                                <div class="image-container">
                                                    <img
                                                        src="https://d15z7dtgvh220z.cloudfront.net/images/gecko-images/join-form/password-checkmark.svg"
                                                        onerror="this.onerror = null;this.src = &#39;/images/gecko-images/join-form/password-checkmark.png&#39;;"
                                                        alt="tick"
                                                    />
                                                </div>
                                                <p id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_ctl02_successInfo">Password meets requirements</p>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$Token" id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_Token" value="f9f99e82-f6a2-4d71-9ab0-3d310d144f21" />
                                    
                                    <input
                                        type="hidden"
                                        name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$CaptchaHandler$FailedCaptchaResponseField"
                                        id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_CaptchaHandler_FailedCaptchaResponseField"
                                    />
                                    <input type="hidden" name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$CaptchaHandler$CPRField" id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_CaptchaHandler_CPRField" />
                                    
                                    <button
                                        type="submit"
                                        name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$btnJoin"
                                        value=""
                                        onclick='this.disabled = true; addSpinner(this, 0, 0); return false;WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$btnJoin", "", true, "", "", false, false))'
                                        id="btnJoin"
                                        class="signupbtn g-recaptcha"
                                    >
                                        Join Free
                                    </button>
                                    <input
                                        type="submit"
                                        name="ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$CaptchaSubmit"
                                        value="Join"
                                        onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$GeckoTwoColPrimary$merchantPnl$JoinForm$CaptchaSubmit", "", true, "", "", false, false))'
                                        id="CaptchaSubmit"
                                        class="g-recaptcha-click"
                                        style="display: none"
                                    />
                                    <div id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_TermsPanel" class="terms">
                                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_StandardTerms">
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_termsAndConditionsText1">By joining you agree to our </span>
                                            <a id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_termsLink" href="https://www.topcashback.com/terms">terms & conditions</a>
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_termsAndConditionsText2"> and </span>
                                            <a id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_privacyLink" href="https://www.topcashback.com/privacy">privacy policy</a>
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_JoinForm_termsAndConditionsText3"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                    <div id="ctl00_GeckoTwoColPrimary_merchantPnl_imagePanel">
                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_newMerchantImages" class="merchant-new-images">
                            <div class="merchant-trust-image">
                                <img src="{{asset('topCashback')}}/images/gecko-images/members-trustimage.png" id="ctl00_GeckoTwoColPrimary_merchantPnl_imgMember" class="merchant-panel-member" alt="member-image" />
                                <p><span id="ctl00_GeckoTwoColPrimary_merchantPnl_numMembers">20,000,000</span>members worldwide</p>
                            </div>
                            <div class="merchant-trust-image">
                                <img
                                    src="{{asset('topCashback')}}/images/gecko-images/trustpilot-trustimage.png"
                                    id="ctl00_GeckoTwoColPrimary_merchantPnl_imgTrustPilot"
                                    class="merchant-panel-trustpilot"
                                    alt="trust-pilot"
                                />
                                <p>Our customers love us!</p>
                            </div>
                            <div class="merchant-trust-image">
                                <img src="{{asset('topCashback')}}/images/gecko-images/ebay-trustimage.png" id="ctl00_GeckoTwoColPrimary_merchantPnl_imgEbay" class="merchant-panel-ebay" alt="ebay-image" />
                                <p>
                                    Thousands of<br />
                                    top-named brands
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="gecko-data-table-account-overview gecko-inline-block" itemscope itemtype="http://schema.org/Table">
                    <thead>
                        <tr>
                            <td>
                                <div itemprop="about">
                                    <h2 class="merchant-offers-table">
                                        <span data-localizer="ignore">
                                            <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_lblMerchantName" class="gecko-merchant-heading">Nike</span>
                                        </span>
                                        <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_lblOfferHeader"> Offers</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_lblExtrasHeader"></span>
                            </td>
                            <td>
                                <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_lblCashbackHeader">Cash Back</span>
                            </td>
                        </tr>
                    </thead>
                    <tbody itemprop="offers" itemscope="" itemtype="http://schema.org/Offer http://schema.org/OfferCatalog"></tbody>
                    <tbody itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                        <tr>
                            <td id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_tdCol" class="gecko-col-cashback">
                                <div id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_pnlTitle" class="gecko-small-text-wrap" itemprop="itemOffered">
                                    <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_lblTitle">Online Purchase*</span>
                                </div>
                                <div id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_pnlNotes" class="gecko-it-400 gecko-offer-note">
                                    <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_lblNotes" class="gecko-col-tertiary-font60">*Flash Sale Items will earn 3% Cash Back.</span>
                                </div>
                            </td>
                            <td class="gecko-col-secondary text-align-center"></td>
                            <td class="gecko-cashback-font gecko-weight-700">
                                <span id="ctl00_GeckoTwoColPrimary_merchantPnl_rMerchantOffers_ctl00_lblCashbackDesc" class="cashback-desc" itemprop="price">8%</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="gecko-deeplink-list-title">
                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_lblDealsVouchers" Class="gecko-deeplink-list-title">Special Deals & Coupons</span>
            </div>
            <div>
                <div id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl00_pnlVoucherContainer" class="gecko-voucher-content-container">
                    <div class="gecko-deeplink-box-container featured gecko-single-container deeplink-deal-box" onclick="logClick();window.open('https://www.topcashback.com/EarnCashback.aspx?mpurl=nike&amp;mpID=1011816');">
                        <div class="gecko-deeplink-main-content">
                            <div class="gecko-merchant-deeplink-logo">
                                <img id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl00_imgMerchantLogo" class="gecko-deeplink-logo" src="{{asset('topCashback')}}/images/suppliers/square-logos/nike_sq.png" />
                            </div>
                            <div class="gecko-merchant-deeplink-content">
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl00_lblCodeTitle" class="gecko-deeplink-title">Shop New Women's Sale Styles at Nike.com</span>
                                <span data-localizer="ignore"><span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl00_pnlCode" class="gecko-featured-voucher gecko-deeplink-code-container">N/A</span></span>
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl00_lblCashback" class="gecko-deeplink-title gecko-deeplink-rate-padding">8% Cash Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl01_pnlVoucherContainer" class="gecko-voucher-content-container">
                    <div class="gecko-deeplink-box-container featured gecko-single-container deeplink-deal-box" onclick="logClick();window.open('https://www.topcashback.com/EarnCashback.aspx?mpurl=nike&amp;mpID=1011816');">
                        <div class="gecko-deeplink-main-content">
                            <div class="gecko-merchant-deeplink-logo">
                                <img id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl01_imgMerchantLogo" class="gecko-deeplink-logo" src="{{asset('topCashback')}}/images/suppliers/square-logos/nike_sq.png" />
                            </div>
                            <div class="gecko-merchant-deeplink-content">
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl01_lblCodeTitle" class="gecko-deeplink-title">Save up to 40% on Select Boy's Styles!</span>
                                <span data-localizer="ignore"><span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl01_pnlCode" class="gecko-featured-voucher gecko-deeplink-code-container">N/A</span></span>
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl01_lblCashback" class="gecko-deeplink-title gecko-deeplink-rate-padding">8% Cash Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl02_pnlVoucherContainer" class="gecko-voucher-content-container">
                    <div class="gecko-deeplink-box-container featured gecko-single-container deeplink-deal-box" onclick="logClick();window.open('https://www.topcashback.com/EarnCashback.aspx?mpurl=nike&amp;mpID=1011816');">
                        <div class="gecko-deeplink-main-content">
                            <div class="gecko-merchant-deeplink-logo">
                                <img id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl02_imgMerchantLogo" class="gecko-deeplink-logo" src="{{asset('topCashback')}}/images/suppliers/square-logos/nike_sq.png" />
                            </div>
                            <div class="gecko-merchant-deeplink-content">
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl02_lblCodeTitle" class="gecko-deeplink-title">Shop Spring Essentials at Nike.com</span>
                                <span data-localizer="ignore"><span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl02_pnlCode" class="gecko-featured-voucher gecko-deeplink-code-container">N/A</span></span>
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl02_lblCashback" class="gecko-deeplink-title gecko-deeplink-rate-padding">8% Cash Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl03_pnlVoucherContainer" class="gecko-voucher-content-container">
                    <div class="gecko-deeplink-box-container featured gecko-single-container deeplink-deal-box" onclick="logClick();window.open('https://www.topcashback.com/EarnCashback.aspx?mpurl=nike&amp;mpID=1011816');">
                        <div class="gecko-deeplink-main-content">
                            <div class="gecko-merchant-deeplink-logo">
                                <img id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl03_imgMerchantLogo" class="gecko-deeplink-logo" src="{{asset('topCashback')}}/images/suppliers/square-logos/nike_sq.png" />
                            </div>
                            <div class="gecko-merchant-deeplink-content">
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl03_lblCodeTitle" class="gecko-deeplink-title">Free Shipping with $150 order.</span>
                                <span data-localizer="ignore"><span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl03_pnlCode" class="gecko-featured-voucher gecko-deeplink-code-container"></span></span>
                                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_ctl03_lblCashback" class="gecko-deeplink-title gecko-deeplink-rate-padding">8% Cash Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="ctl00_GeckoTwoColPrimary_merchantCodePnl_bacsPopup" class="bacs-popup" href="index8119.html?BACS=true&amp;mpurl=nike" target="_blank"></a>
                <a class="gecko-deeplink-dt-returning-trigger" onclick="logClick()"></a>
                <a class="returning-box"></a>
            </div>
            

            <div class="gecko-single-container">
                <div id="ctl00_GeckoTwoColPrimary_merchantInfoPnl_pnlHeader">
                    <div class="gecko-single-container-cap merchantproductoverride">
                        <span id="ctl00_GeckoTwoColPrimary_merchantInfoPnl_lblMerchantInfoTitle">Terms &amp; Conditions</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <ul class="gecko-list-info gecko-bb1">
                    <li class="gecko-toggle-two gecko-arrow-front-right merchant-terms-head" categoryid="1">
                        <div class="title plus">
                            What could stop me from getting Cash Back?
                        </div>
                        <div class="gecko-add-info gecko-mt05 gecko-add-info-not-hide">
                            <ul class="gecko-list-dot override">
                                <li>
                                    Cash Back is not available on Hurley Wetsuits, Air Jordan Retros, HyperAdapt, Adapt BB, or purchases made on employee website. Cash Back not available on purchases made through the Nike SNKRS app.
                                </li>
                                <li>Orders deemed by Nike to be used for reselling purposes.</li>
                                <li>The purchase or redemption of gift cards.</li>
                                <li>Student, Military or Birthday coupon codes will not be eligible for cash back.</li>
                                <li>Combining promotions from another site and/or using a coupon code not posted and approved by TopCashback</li>
                                <li>Returning, exchanging or cancelling part of your order.</li>
                                <li>Purchases made on other sites than Nike's US site</li>
                            </ul>
                        </div>
                    </li>
                    <li class="gecko-toggle-two gecko-arrow-front-right merchant-terms-head" categoryid="2">
                        <div class="title plus">
                            What else is essential?
                        </div>
                        <div class="gecko-add-info gecko-mt05 gecko-add-info-not-hide">
                            <ul class="gecko-list-dot override">
                                <li>Cash Back amounts are generally based on your final purchase amount and does not include taxes, shipping and the actual discount amount saved through coupons.</li>
                                <li>Cash Back rates are subject to change, both up and down.</li>
                                <li>You must start with an empty basket before clicking through to the retailer.</li>
                                <li>Purchases must be completed immediately and fully online.</li>
                            </ul>
                        </div>
                    </li>
                    <li class="gecko-toggle-two gecko-arrow-front-right merchant-terms-head" categoryid="3">
                        <div class="title plus">
                            Good to know
                        </div>
                        <div class="gecko-add-info gecko-mt05 gecko-add-info-not-hide">
                            <ul class="gecko-list-dot override">
                                <li>Flash Sale Items will earn 3% Cash Back.</li>
                                <li>Jordan Flash Sale Items will earn 1% Cash Back.</li>
                            </ul>
                        </div>
                    </li>
                    <li class="gecko-toggle-two gecko-arrow-front-right merchant-terms-head" categoryid="4">
                        <div class="title plus">
                            What to do when
                        </div>
                        <div class="gecko-add-info gecko-mt05 gecko-add-info-not-hide">
                            <ul class="gecko-list-dot override">
                                <li>A "Missing Cash Back" query must be submitted within 100 days of the transaction.</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div id="ctl00_GeckoTwoColPrimary_merchantInfoPnl_oTerms" class="merchant-terms-item-padding">
                    Please note the terms & conditions above are in addition to our general <a class="merchant-terms-link" href="https://www.topcashback.com/terms">terms & conditions</a>
                </div>
            </div>
            <input id="hMerchantName" type="hidden" name="country" value="Nike" />
        </div>
        <div class="gecko-secondary">
            <div class="gecko-single-container">
                <p class="gecko-secondary-title">
                    <b>
                        <span id="ctl00_GeckoTwoColSecondary_MerchantNavigation_Label1">Navigation</span>
                    </b>
                </p>
                <ul class="gecko-list-info gecko-list-info-nav gecko-rollover">
                    <div id="ctl00_GeckoTwoColSecondary_MerchantNavigation_pnlCashback">
                        <li id="ctl00_GeckoTwoColSecondary_MerchantNavigation_LICashback" class="gecko-active">
                            <a id="ctl00_GeckoTwoColSecondary_MerchantNavigation_hypCashback" href="index.html"><span id="ctl00_GeckoTwoColSecondary_MerchantNavigation_lblCashback">Cash Back</span></a>
                        </li>
                    </div>
                    <div id="ctl00_GeckoTwoColSecondary_MerchantNavigation_pnlReviews">
                        <li id="ctl00_GeckoTwoColSecondary_MerchantNavigation_LIReviews">
                            <a id="ctl00_GeckoTwoColSecondary_MerchantNavigation_hypReviews" href="reviews/1/index.html">
                                <span id="ctl00_GeckoTwoColSecondary_MerchantNavigation_lblReviews">Reviews</span>
                                <span id="ctl00_GeckoTwoColSecondary_MerchantNavigation_lblReviewStars" class="gecko-review-stars">
                                    <img src="{{asset('topCashback')}}/images/gecko-images/icons/star.png" alt="Gold Star" />
                                    <img src="{{asset('topCashback')}}/images/gecko-images/icons/star.png" alt="Gold Star" />
                                    <img src="{{asset('topCashback')}}/images/gecko-images/icons/star.png" alt="Gold Star" />
                                    <img src="{{asset('topCashback')}}/images/gecko-images/icons/star.png" alt="Gold Star" />
                                    <img src="{{asset('topCashback')}}/images/gecko-images/icons/stargrey.png" alt="Grey Star" />
                                </span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            <div id="ctl00_GeckoTwoColSecondary_VideoPromotion_Container">
                <div class="ajaxLoader" data-url="/Pages/Promotion/AjaxPromo.aspx?PromotionHolderId=193&amp;PageTypeId=3&amp;OverrideTemplateID=0&amp;MaxRecords=0&amp;RecordId=0&amp;CategoryId=0"></div>
            </div>
            <div id="ctl00_GeckoTwoColSecondary_DealBoxControl_pnlDealBox">
                <div class="gecko-single-container no-overflow">
                    <div>
                        <p id="dealbox-title" class="gecko-secondary-title">
                            <b>
                                <span id="ctl00_GeckoTwoColSecondary_DealBoxControl_lblTitle" class="gecko-cell-header-text">Good to know...</span>
                            </b>
                        </p>
                    </div>
                    <div id="ctl00_GeckoTwoColSecondary_DealBoxControl_ctl00_pnlDealBox">
                        <input
                            type="image"
                            name="ctl00$GeckoTwoColSecondary$DealBoxControl$ctl00$imgDealBox"
                            id="ctl00_GeckoTwoColSecondary_DealBoxControl_ctl00_imgDealBox"
                            class="dealbox-image"
                            src="{{asset('topCashback')}}/images/banners/nikeofferstile.png"
                            onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$GeckoTwoColSecondary$DealBoxControl$ctl00$imgDealBox", "", true, "", "", false, false))'
                        />
                    </div>
                </div>
            </div>
            <div id="pnlSeasonalPromotions" style="display: none;">
                <div class="gecko-single-container">
                    <div
                        class="ajaxLoader"
                        data-url="/Pages/Promotion/AjaxPromo.aspx?PromotionHolderId=154&amp;PageTypeId=3&amp;OverrideTemplateID=0&amp;MaxRecords=0&amp;RecordId=1011816&amp;CategoryId=0"
                        data-callback="showAjaxPromoPanel(&#39;#pnlSeasonalPromotions&#39;);"
                    ></div>
                </div>
            </div>
            <div id="ctl00_GeckoTwoColSecondary_merchantInfo_pnlMerchantAbout">
                <div>
                    <div class="gecko-single-container">
                        <div class="merchant-sidebar-title">
                            <p class="gecko-secondary-title">
                                <span id="ctl00_GeckoTwoColSecondary_merchantInfo_lblAboutTitle">About Nike</span>
                            </p>
                        </div>
                        <div class="merchant-sidebar-description">
                            <div id="ctl00_GeckoTwoColSecondary_merchantInfo_pnlReadmoreWrapper" class="readmore-merchant-sidebar readmore-jqueryv3-fix">
                                <span id="ctl00_GeckoTwoColSecondary_merchantInfo_lblMerchantDescription">
                                    <p>
                                        Nike.com is the ultimate online source for Nike shoes, clothing and gear. Shop Nike online for new releases and collections featuring the latest styles and Nike innovations. And check out
                                        NIKEiD, where you can customize one-of-a-kind shoes and clothing with your favorite colors, materials and performance options.
                                    </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div>
                <div class="gecko-single-container">
                    <p class="gecko-secondary-title">
                        <span>FAQs</span>
                    </p>
                    <ul class="gecko-sidebar-faq">
                        <li>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelHowDoesTCBMakeMoneyHeader" class="new-aboutbox-closed" onclick="Toggleaboutbox(this)">How does TopCashback make money?</span>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelHowDoesTCBMakeMoneyContent" class="new-aboutbox-open-content" style="display: none;">
                                We’re simply supported by sponsored ads and promotions dotted around the site, and retailers also pay us a bonus sometimes if we send a lot of shoppers their way.
                            </span>
                        </li>
                        <li>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelHowDoesTCBWorkHeader" class="new-aboutbox-closed" onclick="Toggleaboutbox(this)">How does TopCashback work?</span>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelHowDoesTCBWorkContent" class="new-aboutbox-open-content" style="display: none;">
                                When you buy something from a retailer after clicking through from TopCashback, the retailer will pay us a small amount for sending you to their website. We pass this straight back onto you as
                                cashback.
                            </span>
                        </li>
                        <li>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelWillItCostMeAnythingHeader" class="new-aboutbox-closed" onclick="Toggleaboutbox(this)">Will it cost me anything?</span>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelWillItCostMeAnythingContent" class="new-aboutbox-open-content" style="display: none;">
                                TopCashback is completely free to join and use. There are no hidden charges so you can earn money back on your shopping for free.
                            </span>
                        </li>
                        <li>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelWhenWillIGetCashbackHeader" class="new-aboutbox-closed" onclick="Toggleaboutbox(this)">When will I actually get my cashback?</span>
                            <span id="ctl00_GeckoTwoColSecondary_merchantFAQ_labelWhenWillIGetCashbackContent" class="new-aboutbox-open-content" style="display: none;">
                                Cashback normally tracks to your account within a day of you making your purchase, and then once the retailer has confirmed your purchase and passed the commission to us, we’ll mark your cashback as
                                ‘payable’ so that you can withdraw it to spend.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="gecko-primary-sub"></div>
    </div>
    <div class="clearfix"></div>
    <link rel="stylesheet" href="{{asset('topCashback')}}/bundles/static/css/footer-384d409715.css" type="text/css" />
    <div id="ctl00_ctl14_DynamicSection_DynamicPanel" class="dynamic-section"></div>
    <!-- <div class="link-section">
        <div class="footer-links-column-wrapper">
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_HereToHelpSection_lblHeader">Here to help</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypGettingStarted" class="link-item" href="https://www.topcashback.com/gettingstarted">Getting Started</a>
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypCustomerService" class="link-item" href="https://www.topcashback.com/account/enquiries/">Customer Service</a>
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypFAQs" class="link-item" href="https://www.topcashback.com/help/">FAQs</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_lblHeader">Other ways to save</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BlogLink" class="link-item" href="https://www.topcashback.com/blog/">Blog</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BrowserExtensionLink" class="link-item" href="https://www.topcashback.com/browser-extension">Browser Extension</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_MobileAppLink" class="link-item" href="https://www.topcashback.com/app">Mobile App</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_TopGiftcardsLink" class="link-item" href="https://www.topcashback.com/top-gift-cards/">Gift Cards</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_TrendingNowLink" class="link-item" href="https://www.topcashback.com/trending/">Trending Now</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BlackFridayDealsLink" class="link-item" href="https://www.topcashback.com/dyn/black-friday-deals">Black Friday Deals</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_CyberMondayDealsLink" class="link-item" href="https://www.topcashback.com/dyn/cyber-monday-deals">Cyber Monday Deals</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_GreenMondayDealsLink" class="link-item" href="https://www.topcashback.com/dyn/green-monday-deals">Green Monday Deals</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_GetToKnowUsSection_lblHeader">Get to know us</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_GetToKnowUsSection_hypAboutTopCashback" class="link-item" href="https://www.topcashback.com/about" target="_blank">About TopCashback</a>
                    <a id="ctl00_ctl14_LinkSection_GetToKnowUsSection_hypEbatesVsOurselves" class="link-item" href="https://www.topcashback.com/ebates">Rakuten Vs Ourselves</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_GetInvolvedSection_lblHeader">Get involved</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypAffiliateProgram" class="link-item" href="https://www.topcashback.com/dyn/affiliate-program">Affiliate Program</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypPressOffice" class="link-item" href="https://www.topcashback.com/press-center">Press Office</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypInTheNews" class="link-item" href="https://www.topcashback.com/blog/cat/in-the-news">In the News</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypVulnerabilityDisclosure" class="link-item" href="https://www.topcashback.com/dyn/vulnerability-disclosure-policy">Vulnerability Disclosure</a>
                </div>
            </div>
            <div class="footer-links-panel footer-links-panel-last">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_LegalStuffSection_lblHeader">Legal stuff</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_LegalStuffSection_hypPrivacy" class="link-item" href="https://www.topcashback.com/privacy">Privacy Policy</a>
                    <a id="ctl00_ctl14_LinkSection_LegalStuffSection_hypTermsAndConditions" class="link-item" href="https://www.topcashback.com/terms">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="legal-social-section">
        <div class="footer-social-legal-wrapper">
            <div class="legal-social-panel">
                <span id="ctl00_ctl14_LegalSocialSection_lblLegal">© 2005 - 2022 Top Online Partners Group Limited</span>
            </div>
            <div class="legal-social-panel global-sites">
                <span id="ctl00_ctl14_LegalSocialSection_lblGlobalSites">Global sites</span>
                <a id="ctl00_ctl14_LegalSocialSection_hypUk" title="UK" class="global-site-link" rel="noopener" href="https://www.topcashback.co.uk/" target="_blank">UK</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypChina" title="China" class="global-site-link" rel="noopener" href="https://www.topcashback.cn/" target="_blank">CN</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypJapan" title="Japan" class="global-site-link" rel="noopener" href="https://www.topcashback.jp/" target="_blank">JP</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypGermany" title="Germany" class="global-site-link" rel="noopener" href="https://www.topcashback.de/" target="_blank">DE</a>
            </div>
            <div id="LocalizerWidget" class="legal-social-panel localizer-panel footer-widget-panel" style="visibility:hidden">
                <span>Site language</span>
                <div id="tbLanguageWidget" class="footer-widget"></div>
            </div>
            <div class="legal-social-panel social-links">
                <a id="ctl00_ctl14_LegalSocialSection_FacebookLink" title="Facebook" class="footer-social-icon footer-icon-facebook" rel="noopener" href="https://www.facebook.com/topcashbackUSA" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_TwitterLink" title="Twitter" class="footer-social-icon footer-icon-twitter" rel="noopener" href="https://twitter.com/TopCashBackusa" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_LinkedinLink" title="LinkedIn" class="footer-social-icon footer-icon-linkedin" rel="noopener" href="https://www.linkedin.com/company/topcashback" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_InstagramLink" title="Instagram" class="footer-social-icon footer-icon-instagram" rel="noopener" href="https://www.instagram.com/topcashbackusa" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_PinterestLink" title="Pinterest" class="footer-social-icon footer-icon-pinterest" rel="noopener" href="https://www.pinterest.com/topcashbackUSA/" target="_blank"></a>
            </div>
        </div>
    </div> -->
    

    
</form>
@endsection
@section('footer_css_js')
<style>
    .swiper-slide-active {
        width: 66% !important;
    }

    .see_details {
        position: absolute;
        width: 105px;
        bottom: -9px;
        text-transform: none !important;
        right: 10px;
        border-radius: 30px !important;
        background: white !important;
        color: #195e73;
        padding: 6px;
        border: 1px solid #e1dede;
        -webkit-box-shadow: 0px 4px 8px #0a164626;
        box-shadow: 0px 4px 8px #0a164626
    }

    .see_details a {
        font-size: 14px;
        padding-left: 11px;
        padding-right: 11px;
        font-weight: normal;
        border-radius: 27px;
    }

    .see_details a:hover {
        background-color: #195e73;
    }

    .btn-primary:hover {
        color: #195e73;
    }
</style>
@endsection