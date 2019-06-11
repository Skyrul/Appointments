<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/why.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<input id="anPageName" name="page" type="hidden" value="why"/>
        <form action="none" class="why" method="post" name="none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="why-policyreviews" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/Group_11.png)">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="policyreview-Headtext">Why Policy Reviews</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <p>
                                        As an insurance agent, there are generally three objectives that you have for your agency: growing revenue, building agency value, and increasing profitability.<br>
                                    </p>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                             <div class="row">
                                <div class="col-md-5">
                                    <p>
                                        The very best way to achieve these objectives are to focus on strengthening your relationship with your current customers. By doing so, you will:<br>
                                    
                                    - Increase policy holder RETENTION<br>
                                    - Identify CROSS-SELL opportunities<br>
                                    - Earn credibility to ask for REFERRALS
                                    </p>
                                 </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="benefits-reviews" id="retention-div">
                            <div class="row">
                                <div class="col-md-3 retention" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/benefits-headbg.png); background-size: 80%;background-repeat: no-repeat; background-position-y: bottom;padding-bottom: 1.2%;" id="link-retention">
                                    <span  onclick="retentionFunction()" id="txt-ret">Retention</span>
                                </div>
                                <div class="col-md-3 benefits-crosssell-text" id="link-crosssell">
                                    <span  onclick="crosssellFunction()">Cross-sell</span>
                                </div>
                                <div class="col-md-3 benefits-referrals-text" id="link-referral">
                                    <span  onclick="referralsFunction()">Referrals</span>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <div class="row benefits-body">
                                <div class="col-md-10" id="retention">
                                    <h1>How does RETENTION help your agency?</h1>
                                    <ul>
                                        <li>
                                            IIABA lists customer retention as the single most important factor in determining an agency’s value.
                                        </li>
                                        <li>
                                            It costs <span class="blueText"> 7-9 times </span> more for an insurance agency to attract a new customer than to retain one
                                        </li>
                                        <li>
                                            A sustained<span class="blueText"> 5% improvement</span> in your agency’s customer retention rate can <span class="blueText">double profits</span> in five years
                                        </li>
                                        <li>
                                            <span class="blueText">Reducing customer defections by 2%</span> is equivalent to <span class="blueText">cutting costs by more than 10%.</span>
                                        </li>
                                    </ul>
                                    <div class="benefits-button">
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                                            <div class="btn-orange btn-orange2 col-md-5">
                                                LEARN MORE ABOUT ENGAGEX APPOINTMENTS
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--<div class="col-md-10" id="crosssell">
                                    <h1>How does CROSS-SELLING help your agency?</h1>
                                    <ul>
                                        <li>
                                            Cross-sell leads have an <span class="blueText">85% close rate</span> vs. internet leads that have 5% close rate.
                                        </li>
                                        <li>
                                            Additional policies written with a customer decreases the likelihood of them defecting (increases retention).  For every 2 additional policies written, the probability of cancelation drops by half.
                                        </li>
                                        
                                            <ul>
                                                <li>
                                                    Customers with 1 policy have a <span class="blueText">45%</span> probability of canceling   
                                                </li>
                                                <li>
                                                    Customers with 3 policies have a <span class="blueText">21%</span> probability of canceling  
                                                </li>
                                                <li>
                                                    Customers with 5 policies have a <span class="blueText">11%</span> probability of canceling  
                                                </li>
                                            </ul> 
                                        
                                    </ul>
                                    <div class="benefits-button">
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                                            <div class="btn-orange col-md-5">
                                                LEARN MORE ABOUT ENGAGEX APPOINTMENTS
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10" id="referrals">
                                    <h1>How does REFERRALS help your agency?</h1>
                                    <ul>
                                        <li>
                                            A referred first-year customer generates an average of <span class="blueText">5X more revenue</span> than a non-referred customer does.
                                        </li>
                                        <li>
                                            Referred customers have <span class="blueText">the lowest acquisition costs</span> of any sales.
                                        </li>
                                        <li>
                                            A Referred customer has an average <span class="blueText">92% retention rate</span> over the first three years versus a 67% rate for a customer from any other marketing source
                                        </li>
                                        <li>
                                            <span class="blueText">Reducing customer defections by 2%</span> is equivalent to <span class="blueText">cutting costs by more than 10%.</span>
                                        </li>
                                    </ul>
                                    <div class="benefits-button">
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                                            <div class="btn-orange col-md-5">
                                                LEARN MORE ABOUT ENGAGEX APPOINTMENTS
                                            </div>
                                        </a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="benefits-reviews" id="crosssell-div">
                            <div class="row">
                                <div class="col-md-3 retention-2"  id="link-retention-crosssell">
                                    <span  onclick="retentionFunction()" id="txt-ret-crosssell">Retention</span>
                                </div>
                                <div class="col-md-3 benefits-crosssell-text-2" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/benefits-headbg.png); background-size: 106%;background-repeat: no-repeat; color: #fff;background-position-y: bottom;" id="link-crosssell">
                                    <span  onclick="crosssellFunction()">Cross-sell</span>
                                </div>
                                <div class="col-md-3 benefits-referrals-text" id="link-referral">
                                    <span  onclick="referralsFunction()">Referrals</span>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <div class="row benefits-body">
                                
                                <div class="col-md-10" id="crosssell">
                                    <h1>How does CROSS-SELLING help your agency?</h1>
                                    <ul>
                                        <li>
                                            Cross-sell leads have an <span class="blueText">85% close rate</span> vs. internet leads that have 5% close rate.
                                        </li>
                                        <li>
                                            Additional policies written with a customer decreases the likelihood of them defecting (increases retention).  For every 2 additional policies written, the probability of cancelation drops by half.
                                        </li>
                                        
                                            <ul>
                                                <li>
                                                    Customers with 1 policy have a <span class="blueText">45%</span> probability of canceling   
                                                </li>
                                                <li>
                                                    Customers with 3 policies have a <span class="blueText">21%</span> probability of canceling  
                                                </li>
                                                <li>
                                                    Customers with 5 policies have a <span class="blueText">11%</span> probability of canceling  
                                                </li>
                                            </ul> 
                                        
                                    </ul>
                                    <div class="benefits-button">
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                                            <div class="btn-orange btn-orange2 col-md-5">
                                                LEARN MORE ABOUT ENGAGEX APPOINTMENTS
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="benefits-reviews" id="referral-div" style="display:none;">
                            <div class="row">
                                <div class="col-md-3 retention-2"  id="link-retention-crosssell">
                                    <span  onclick="retentionFunction()" id="txt-ret-crosssell">Retention</span>
                                </div>
                                <div class="col-md-3 benefits-crosssell-text-2"  id="link-crosssell">
                                    <span  onclick="crosssellFunction()">Cross-sell</span>
                                </div>
                                <div class="col-md-3 benefits-referrals-text-2" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/benefits-headbg.png); background-size: 99%;background-repeat: no-repeat; color: #fff;background-position-y: bottom;" id="link-referral">
                                    <span  onclick="referralsFunction()">Referrals</span>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <div class="row benefits-body">
                                
                                <div class="col-md-10" id="referrals">
                                    <h1>How does REFERRALS help your agency?</h1>
                                    <ul>
                                        <li>
                                            A referred first-year customer generates an average of <span class="blueText">5X more revenue</span> than a non-referred customer does.
                                        </li>
                                        <li>
                                            Referred customers have <span class="blueText">the lowest acquisition costs</span> of any sales.
                                        </li>
                                        <li>
                                            A Referred customer has an average <span class="blueText">92% retention rate</span> over the first three years versus a 67% rate for a customer from any other marketing source
                                        </li>
                                        <li>
                                            <span class="blueText">Reducing customer defections by 2%</span> is equivalent to <span class="blueText">cutting costs by more than 10%.</span>
                                        </li>
                                    </ul>
                                    <div class="benefits-button">
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/services">
                                            <div class="btn-orange btn-orange2 col-md-5">
                                                LEARN MORE ABOUT ENGAGEX APPOINTMENTS
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="policy-signup" align="center">
                            <span>Never done policy review meetings before? No problem!?</span>
                            <p>
                                Sign up for our FREE Agency Thrive training program to watch videos and download worksheets that will help take your agency to the next level!
                            </p>
                            <div class="benefits-button">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/thriveIntro">
                                    <div class="btn-orange btn-orange2 col-md-5">
                                        LEARN MORE
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-policy" align="center">
                            <div class="custom-policy-body">
                                <div>
                                    <span>Get a Custom Policy Review Plan</span>
                                    <p>
                                        Do you want to know how many Policy Review Meetings your agency should hold to monetize your current book of business? Get a Custom Policy Review Plan for free.<br><br>

                                        When you do, we’ll also give you a step-by-step guide for how to implement a best-practice program used by some of the top agents in the nation!
                                    </p>
                                </div>
                                <div class="benefits-button">
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>">
                                        <div class="btn-orange btn-orange2 col-md-5">
                                            Get a Free Custom Policy Review 
                                        </div>
                                    </a>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
        </form>

    <script>
        function detectchange() {
            if (isMobile) {
                loadjscssfile("<?php echo Yii::app()->request->baseUrl; ?>/css/why-mobile.css", "css")
            } else {
                loadjscssfile("<?php echo Yii::app()->request->baseUrl; ?>/css/why.css", "css")
            }
        }
        $(document).ready(function() {
            detectchange(); // on first load
            $(window).resize(function() {
                detectchange();
            });
        });
        
        function crosssellFunction() {
            debugger;
                
                /*$("#link-retention").removeAttr("style");*/
                document.getElementById("crosssell-div").style.display = "block";
                document.getElementById("retention-div").style.display = "none"; 
                document.getElementById("referral-div").style.display = "none"; 
        }/*
        $("#link-crosssell").click(function(){
            debugger;.benefits-crosssell-text
            $("#link-retention").attr("color","#0A4776");
        });*/
        function retentionFunction() {
            
                document.getElementById("crosssell-div").style.display = "none";
                document.getElementById("retention-div").style.display = "block"; 
                document.getElementById("referral-div").style.display = "none"; 
        }
        function referralsFunction() {
            document.getElementById("crosssell-div").style.display = "none";
                document.getElementById("retention-div").style.display = "none"; 
                document.getElementById("referral-div").style.display = "block"; 
        }
    </script>