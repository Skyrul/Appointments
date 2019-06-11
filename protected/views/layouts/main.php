<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css?t=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/override.css?t=<?php echo time(); ?>">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png" rel="shortcut icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<!-- Load libraries and custom script -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/global.js?t=<?php echo time(); ?>"></script>

</head>

<body style="margin: 0;background: rgba(255, 255, 255, 1.0);">
<section class="header">
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">
    <img class="logo-img" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png">
    </a>
    <div class="hamburger">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/hamburger.svg">
        Menu
    </div>
    <ul class="menu-ul">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/why"><li>Why Policy Reviews</li></a>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services"><li>Services</li></a>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/pricing"><li>Pricing</li></a>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/thriveintro"><li>Agency Thrive Program</li></a>
        <!-- <a href="#"><li>Contact</li></a> -->
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog"><li>Blog</li></a>
        <a href="https://portal.engagexapp.com/index.php/site/login"><li>Log In</li></a>
    </ul>
</section>

<?php echo $content; ?>


<section class="footer">
    <div class="pre-footer">
        <div>
            <h2 class="white-txt">Ready for the<br>
                next step?</h2>
                <a href="#open-contact-modal">
                    <div class="btn-orange btn-orange-md">
                        Contact Us
                    </div>
                </a>
        </div>
        <div>
                <ul style="list-style:none;">
                    <li><span class="foot-title">SERVICES</span></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">Appointment Setting</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/pricing">Pricing</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/faqs">FAQs</a></li>
                </ul>
        </div>
        <div>
                <ul style="list-style:none;">
                    <li><span class="foot-title">COMPANY</span></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/why">Why Policy Reviews</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/appointmentsetters">Our Appointment Setters</a></li>
                    <li><a href="#!" id="btnportalDemo">Agent Portal Demo</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog">Blog</a></li>
                </ul>
        </div>
        <div>
                <ul style="list-style:none;">
                    <li><span class="foot-title">RESOURCES</span></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/thriveprogram">Agency Thrive Program</a></li>
                    <li><a href="#">Free Custom Plan</a></li>
                    <li><a href="#open-commision-modal">Commission Calculator</a></li>
                    <li><a href="#open-inhousecalculator-modal">In-House Cost Calculator</a></li>
                </ul>
        </div>
        <div>
                <ul style="list-style:none;">
                    <li><span class="foot-title">CONTACT</span></li>
                    <li><a href="tel:8005158734">(800) 515-8734</a></li>
                    <li><a href="#!">511 East 1860 South<br>Provo, UT 84606</a></li>
                </ul>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright 2018 All rights reserved</p>
        <div class="some-icons">
            <a href="#">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/facebook.png">
            </a>
            <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/in.png">
                </a>
                <a href="#">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/twitter.png">
                    </a>
        </div>
    </div>
</section>
<div id="open-commision-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="https://calculator.engagexapp.com/instant-commission-calculator.php" width="750" height="450" frameborder="0"></iframe>
    </div>
</div>
<div id="open-calculator-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="https://calculator.engagexapp.com/" width="750" height="450" frameborder="0"></iframe>
    </div>
</div>
<div id="open-inhousecalculator-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="https://calculator.engagexapp.com/in-house-appointment-setting-cost-calculator.php" width="750" height="450" frameborder="0"></iframe>
    </div>
</div>
<div id="open-contact-modal" class="modal-window" id="btn-close">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact" width="750" height="450" frameborder="0"></iframe>
    </div>
</div>


<!-- Embeds -->
<!-- Calendly badge widget begin -->

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({url: 'https://calendly.com/jim-campbell/portal-demo', text: 'Schedule time with me', color: '#ffffff', branding: false});</script>
<!-- Calendly badge widget end -->
<script>
    $(document).ready(function() {
    $('#btnportalDemo').on('mousedown', function() {
        var $content = $('.calendly-popup-content');
        var intervalId = setInterval(function(){
          changeit();
        }, 1000);
        $('.calendly-badge-content').click();      
    });    
});
</script>
</body>

</html>