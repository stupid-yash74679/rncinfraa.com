<!-- <form method="post" action="javascript:;" id="contact-form">
    <div class="row clearfix">
        <div class="form-group col-lg-4 col-md-4 col-sm-12">
            <div class="field-inner">
                <input type="text" name="username" value="" placeholder="Your Name" required="">
            </div>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-12">
            <div class="field-inner">
                <input type="email" name="email" value="" placeholder="Email Address"
                required="">
            </div>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-12">
            <div class="field-inner">
                <input type="text" name="phone" value="" placeholder="Phone Number" required="">
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
<form name="email_form2" method="post" action="inquiry-action.php" class="form-horizontal form4" novalidate="novalidate" id="contact-form">
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