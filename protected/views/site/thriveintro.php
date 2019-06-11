<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/thriveIntro.css" rel="stylesheet"/>
<input id="anPageName" name="page" type="hidden" value="thriveintro"/>
<form action="none" class="thriveintro" method="post" name="none">
    <div class="container-fluid">
        <div class="agency-thrive" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/why-rectangle-agency.png); background-position: top center;background-size: 100%;">
            <div class="row">
                <div class=" agency-intro" align="center">
                    <span class="agencyThirve-Headtext">Agency Thrive Program</span>
                </div>
            </div>
        </div>
        
        <div class="agency-intro-image" align="center">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/service-description.png" class="img-agency-intro">
        </div>
        <div class="agency-watch-video">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="btn-watch-link">
                <div class="btn-white">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/playvideo.png" class="img-play"> Watch Video
                </div>
            </a>
        </div>
        <div class="agency-intro-subtxt" align="center">
            <p>
                The Agency Thrive Program is a free training program designed by agents and developed by Engagex.  Participants will learn how to build highly-profitable agencies based on the simple principle of holding regular Policy Review meetings with their customers.
            </p>
        </div>
        
        <div class="agency-benefits">
            <div class="first-row">
                <div class="col-md-6 benefits-box" align="center">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5-part-video.PNG" class="img-benefits"><br>
                    <span>5-Part Video Series</span>
                    <p>
                        Unlimited access to video-based training that is designed for both the agent and staff members.
                    </p>
                </div>
                <div class="col-md-6 benefits-box" align="center">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/how-to-prepare-conduct.PNG" class="img-benefits"><br>
                    <span>How to Prepare, Conduct & Follow Up</span>
                    <p>
                        Learn the industry’s best practice from start to finish.
                    </p>
                </div>
            </div>
            <div class="second-row">
                <div class="col-md-6 benefits-box" align="center">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/interactive-worksheets.PNG" class="img-benefits"><br>
                    <span>Interactive Worksheets</span>
                    <p>
                        Go beyond the training and download worksheets that will help you get the most out of your Policy Review Meetings.
                    </p>
                </div>
                <div class="col-md-6 benefits-box" align="center">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ongoing-support.PNG" class="img-benefits"><br>
                    <span>How to Prepare, Conduct & Follow Up</span>
                    <p>
                        Receive weekly emails with helpful tips and tricks to keep your Policy Review Meetings constantly improving.
                    </p>
                </div>
            </div>
        </div>
        <div class="agency-contact-us">
            <div class="contact-us-subtxt">
                <p>
                    To participate in the Agency Thrive Program and have access to all our great content, simply enter your email address and receive an access code.
                </p>
            </div>
            <div class="contact-form">
                <form>
                    <input type="email" id="email" placeholder="Your email address" class="col-md-8 contact-input-email">
                    <a href="#open-contact-modal">
                        <div class="btn-orange  btn-orange2 col-md-3">
                            TALK TO A REP
                        </div>
                    </a>
                </form>
            </div>
        </div>
    </div>
</form>

<div id="open-contact-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact" width="750" height="450" frameborder="0"></iframe>
</div>