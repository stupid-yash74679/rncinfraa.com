<?php include("header.php");?>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Contact</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Our Manufacturing Units Near You<span class="dot">.</span></h2>
            </div>

            <div class="upper-info">
                <div class="row clearfix">
                    <div class="info-block col-xl-12 col-lg-12 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h5>Ahmedabad</h5>
                            <div class="text">
                                <ul class="info">
                                    <li><a href="javascript:void(0);" onclick="gtag('event', 'send', { 'event_category': 'click on address', 'event_action': 'nothing', 'event_label': 'address' });">321, Chaudhary Estate, Masjid Gali, Piranha Road, Piplaj, Ahmedabad - 382405, Gujarat, India.</a></li>
                                    <li><a href="mailto:info@rncinfraa.com" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@rncinfraa.com' });">info@rncinfraa.com</a></li>
                                    <li><a href="tel:919979097311" onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+91 99790 97311' });">+91 99790 97311</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-box">
                <iframe class="map-iframe"
                        src="https://maps.google.com/maps?q=RNC%20infraa&output=embed"
                        style="border:0;" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="form-box">
                <div class="sec-title">
                    <h2>Write Us a Message<span class="dot">.</span></h2>
                </div>
                <div class="default-form">
                   <!--  <form method="post" action="http://layerdrops.com/linoorhtml/sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="username" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="Email Address"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="subject" value="" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Write Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button class="theme-btn btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Send message</span>
                                </button>
                            </div>
                        </div>
                    </form> -->
                    <form name="email_form2" method="post" action="inquiry-action.php" class="form-horizontal form8" novalidate="novalidate" id="contact-form">
    <ul class="clearfix contct-us-ul-lists">
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <input name="name" id="name" type="text" placeholder="Your Name:" class="form-control">
                    <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                </div>
            </div>
        </li>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">
                    <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                </div>
            </div>
        </li>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-md-12">
                        <input name="city" id="city" type="text" placeholder="Your City:" class="form-control">
                        <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                    </div>
                </div>
            </div>
        </li>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <input name="number" id="number" type="tel" placeholder="Your Phone:" maxlength="10" minlength="10" class="form-control number21">
                    <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                </div>
            </div>
        </li>
        <li class="wow fadeInUp col-sm-12 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <textarea class="form-control" name="message" id="message" placeholder="Requirement" rows="3" minlength="4" maxlength="300"></textarea>
                    <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                </div>
            </div>
        </li>
        <div class="clearfix"></div>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <input name="captcha" id="captcha" placeholder="Captcha Code:" class="form-control" type="text">
                    <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                </div>
            </div>
        </li>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <img src="captcha.php" style="float:left;margin-top: 5px;margin-bottom: 15px;" alt="">
            </div>
        </li>
        <div class="clearfix"></div>
        <li class="wow fadeInUp col-sm-6 col-xs-12">
            <div class="form-group has-feedback">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="submit" value="Submit" class="submit class-submit" style="margin-left: 0;">
                </div>
            </div>
        </li>
    </ul>
</form>
                </div>
            </div>
        </div>
    </section>

   <?php include("footer.php");?>