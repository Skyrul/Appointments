<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<section class="hero">
    <h1>Policy Review Appointment Setting
        For Insurance Agents</h1>
    <p class="white-txt center-txt">
        As an agent, you’ll write more policies and retain more business by conducting Policy Review Meetings with your customers. At Engagex, we set up those meetings for you
    </p>
    <div class="hero-btns">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
            <div class="btn-orange">
                Learn More
            </div>
        </a>
        <a href="#">
            <div class="btn-white img-btn">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/play-icon.svg">Watch Video
            </div>
        </a>
    </div>
</section>
<section class="testimonials">
    <div class="controls">
        <div class="control-left" onclick="plusResults(-1)">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow-left.svg" class="" >
            <span>Previous</span>
        </div>
        <div class="control-right" onclick="plusResults(+1)">
                <span>Next</span>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow-right.svg" class="" >
        </div>
     </div>
    <div class="testimonials-wrapper">
        <div class="single-testimonial a-slides">
            <p>Agents who conduct Policy Review Meetings write <span>72% more policies</span> than those who don't</p>
        </div>
        <div class="single-testimonial a-slides">
            <p>On average, each Policy Review Meeting produces<span> 1.7 writable </span>opportunities for an agent!</p>
        </div>
        <div class="single-testimonial a-slides">
            <p>Conducting 20 Policy Review Meetings <span>each month can produce $145k</span> in added commission.</p>
        </div>
        <div class="testimonial-cta">
            <p>How much more could you make? </p>
            <a href="#open-calculator-modal">
                <div class="btn-orange">
                    Try our instant commission calculator!
                </div>
            </a>
        </div>
    </div>
</section>
<section class="section3">
    <h2 class="center-txt">It’s a niche…and we love it! </h2>
    <p class="center-txt">No doubt about it, setting appointments for policy review meetings is an industry niche. But the hardest part about implementing a policy review system in your agency is getting your customers in front of you. We set hundreds of thousands of appointments each year for agents and our results speak for themselves.     </p>
    <div class="separator"></div>
    <div class="services">
        <div class="services-left">
            <h2>Our Appointment Setting Service</h2>
            <div class="h2-decoration"></div>
            <p>With over a decade of doing what we do, our process and technology are the best in the industry. We have packages and pricing to meet any agency’s budget and our ongoing support can’t be beat. Simply put, we make it easy, seamless, and cost effective for you to grow your agency by giving you selling opportunities with your customers.</p>
            <h3>Our Simple Appointment Setting Process:</h3>
            <ol>
                <li>Select an Engagex package</li>
                <li>Set available times in the calendar of our agent portal</li>
                <li>Upload your client list</li>
                <li>Get appointments and meet with your customers</li>
            </ol>
            <div class="services-ctas">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                    <div class="btn-orange">
                        Learn more
                    </div>
                </a>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/pricing">
                    <div class="btn-orange">
                        Pricing
                    </div>
                </a>
            </div>
        </div>
        <div class="services-right">
            <ul>
                <li>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/caller-id.svg">Caller ID Matching
                </li>
                <li>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/after-hours.svg">After Hours Calling
                </li>
                <li>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/bell.svg">Appointment Reminder Calls
                </li>
                <li>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/world.svg">English and Spanish 
                </li>
                <li>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/no-contracts.svg">No Long-term Contracts
                </li>
            </ul>
        </div>
    </div>
    <div class="separator"></div>
    <h2 class="center-txt">Discounted and Subsidized Pricing:</h2>
    <p class="center-txt">We’ve got agreements with many of the largest P&C carriers in the nation. Talk to an Engagex rep to see if you qualify for discounted or subsidized pricing!</p>
    <a href="#open-contact-modal">
        <div class="btn-orange talk-rep-cta">
            Talk to a Rep
        </div>
    </a>
</section>
<section class="appointment-setters">
    <h2 class="center-txt">Meet Our Appointment Setters</h2>
    <div class="controls">
        <div class="control-left" onclick="plusDivs(-1)">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow-left.svg" class="" >
                <span>Previous</span>
            </div>
            <div class="control-right" onclick="plusDivs(+1)">
                    <span>Next</span>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow-right.svg" class="" >
            </div>
    </div>
    <div class="setters-wrapper">
        <div class="single-setter t-slides">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/jenny.jpg">
            <div>
            <span class="setter-name">Jenny Parker</span> 
            <span class="setter-quote">The best part of my job is interacting with our agent’s customers. I do everything I can to make them feel valued and that their agent appreciates their business.</span>
            </div>
        </div>
        <div class="single-setter t-slides">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/jenny.jpg">
            <div>
            <span class="setter-name">Jenny Parker 2</span> 
            <span class="setter-quote">The best part of my job is interacting with our agent’s customers. I do everything I can to make them feel valued and that their agent appreciates their business.</span>
            </div>
        </div>
    </div>
</section>
<section class="portal-features">
    <h2 class="white-txt center-txt">Agent Portal Features</h2>
    <p class="white-txt center-txt">The Engagex Agent Portal is a dynamic tool that allows agents to manage every element of their appointment setting service. From quickly adjusting available meeting times to pulling comprehensive reports, everything about our portal was designed to make working with Engagex as easy and transparent as possible.</p>
    <div class="features-wrapper">
        <div>
            <div class="feature row-reverse">
                
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/checkmark.svg">
                <div>
                    <span class="feat-title right-txt">Agent Dashboard</span>
                    <span class="feat-txt right-txt">Keep track of how many appointments we’ve set and how many names are left to call.
                    </span>
                </div>
            </div>
            <div class="feature row-reverse">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/checkmark.svg">
                <div>
                    <span class="feat-title right-txt">Agency Management Tools </span>
                    <span class="feat-txt right-txt">Manage everything from calendar availability to which staff member will be meeting with your customer.
                    </span>
                </div>
            </div>
        </div>
        <img class="portal-img" src="<?php echo Yii::app()->request->baseUrl; ?>/img/laptop.png">
        <div>
            <div class="feature">
                <div>
                    <span class="feat-title">Comprehensive Reporting </span>
                    <span class="feat-txt">From a quick glance to a deep dive, our reporting tool allows for you to see every interaction we make with your clients.
                    </span>
                </div>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/checkmark.svg">
            </div>
            <div class="feature">
                <div>
                    <span class="feat-title">Easy List Upload </span>
                    <span class="feat-txt">Uploading a file has never been easier. Simply drag and drop your list of customers into the portal and we’ll handle the rest.
                    </span>
                </div>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/checkmark.svg">
            </div>
        </div>
    </div>
    <a href="#!">
        <div id="btnscheddemo" class="btn-orange">
            Schedule a Demo
        </div>
    </a>
</section>
<section class="thrive">
    <div>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo2.png" class="thrive-logo">
        <h2>Don’t have a process for Policy Reviews in your agency? 
            No Problem!</h2>
        <p>Sign up for our FREE Agency Thrive training program to watch videos and download worksheets that will help take your agency to the next level. 
        </p>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/thriveprogram">
            <div class="btn-orange">
                Learn more >
            </div>
        </a>
    </div>
    <div>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/img-thrive.png" class="<?php echo Yii::app()->request->baseUrl; ?>/img-thrive">
        <a href="#">
            <div class="btn-orange thrive-cta-video">
                Watch Video
            </div>
        </a>
    </div>
</section>
<section class="home-blog">
    <h2 class="center-txt">Recent Blog Activity</h2>
    <div class="feat-blog">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3-keys-to-insurance-success.png" class="img-index">
        <!--<div class="blog-prev-img"></div>-->
        <div class="blog-prev-txt">
            <h2>The 3 Keys to Agency Success</h2>
            <p> A lot of different people from a lot of different backgrounds become insurance agents for a lot of different reasons. Maybe your dad was an insurance agent. 
            </p>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog?page=three_keys_to_agency_success">
                <div class="btn-orange">
                    Learn more
                </div>
            </a>
        </div>
    </div>
    <div class="blog-prevs">
        <div class="blog-prev">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog?page=common_enemy_of_all_insurance_agents">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/commoditization-of-insurance.png" class="img-index-blog2">
                <div class="blog-prev-txt">
                    <h3>The Commoditization of Insurance: The Common Enemy of All Insurance Agents</h3>
                </div>
            </a>
        </div>
        <div class="blog-prev">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog?page=follow_up_after_customer_insurance_review_meetings">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/how-to-follow-up-customer-insurance.png" class="img-index-blog2">
                <div class="blog-prev-txt">
                    <h3>How to Follow Up After Customer Insurance Review Meetings</h3>
                </div>
            </a>
        </div>
        <div class="blog-prev">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/blog?page=five_steps_for_preparing_files">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5-steps-insurance-review-meeting.png" class="img-index-blog2">
                <div class="blog-prev-txt">
                    <h3>5 Steps to Take to Prepare for an Insurance Review Meeting</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<script type="text/javascript">
    // Slider for appointment setters
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("t-slides");
        if (n > x.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        x[slideIndex-1].style.display = "flex"; 
    }

    // Slider for testimonials
    var resultsIndex = 1;
    showResults(resultsIndex);

    function plusResults(n) {
        showResults(resultsIndex += n);
    }

    function showResults(n) {
        var i;
        var x = document.getElementsByClassName("a-slides");
        if (n > x.length) {resultsIndex = 1} 
        if (n < 1) {resultsIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        x[resultsIndex-1].style.display = "flex"; 
    }
</script>

<!-- Modals -->
<div id="open-calculator-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="https://calculator.engagexapp.com/instant-commission-calculator.php" width="750" height="450" frameborder="0"></iframe>
    </div>
</div>
<div id="open-contact-modal" class="modal-window">
  <div>
    <a href="#!" title="Close" class="modal-close">Close</a><br>
    <iframe src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact" width="750" height="450" frameborder="0"></iframe>
</div>
    
<?php
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/index.js?t='. time(), CClientScript::POS_END);
?>