<?php include("header.php");?>
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Thankyou Catalogue</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Thankyou Catalogue</li>
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
        
        <div class="row">
            <div class="col-md-12 mytop thankyou-cat">
                <a  id="lnnk" href='pdf/<?php echo  $_REQUEST['varname']; ?>' target="_blank"   download> <h4 class="text-center thnak4">" Thank You For Inquiry We Will Reply You Within 24 Hours"</h4>
                    <div class="message" style="display:block;margin:0px 0 100px;text-align:center"><img src="images/download_gif.gif"  class="center-block">Click Here For Your  Requested Catalogue Download</div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?>
<script> 
 
  var hreff = $("#lnnk").attr('href'); 
  setTimeout(
    function() {
  window.location = hreff;
    }, 5000);
</script>