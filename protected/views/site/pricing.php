<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/pricing.css?t='. time());
?>

        <input id="anPageName" name="page" type="hidden" value="pricing"/>
        <form action="none" class="pricing" method="post" name="none">
                 <div class="container-fluid">
                    <div class="row pricing-headtext">
                        <span>Our Pricing</span>
                     </div>
                     <div>
                        <!--<table class="tbl-pricing-header">
                            <tr>
                                <td></td>
                                <td>
                                    <span>50 Customer names per Mo</span> 
                                </td>
                                <td>
                                    <span>10 Appointments per Mo.</span>
                                </td>
                                <td>
                                    <span>15 Appointments per Mo.</span>
                                </td>
                                <td>
                                    <span>25 Appointments per Mo.</span> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <span>$250 / month</span> 
                                </td>
                                <td>
                                    <span>$325 / month</span>
                                </td>
                                <td>
                                    <span>$475 / month</span>
                                </td>
                                <td>
                                    <span>$695 / month</span> 
                                </td>
                            </tr>
                         </table>-->
                     </div>
                     <!--<div class="row pricing-per-cust" align="center">
                        <div class="col-md-4"></div>
                        <div class="col-md-2 price-info">
                            <span>50 Customer names per Mo</span> 
                        </div>
                        <div class="col-md-2 price-info">
                            <span>10 Appointments per Mo.</span>
                        </div>
                        <div class="col-md-2 price-info">
                            <span>15 Appointments per Mo.</span>
                        </div>
                        <div class="col-md-2 price-info">
                            <span>25 Appointments per Mo.</span> 
                        </div>
                     </div>
                     
                     <div class="row price-per-month" align="center">
                        <div class="col-md-3 space-free"></div>
                        <div class="col-md-2 price-month">
                            <span>$250 / month</span> 
                        </div>
                        <div class="col-md-2 price-month">
                            <span>$325 / month</span>
                        </div>
                        <div class="col-md-2 price-month">
                            <span>$475 / month</span>
                        </div>
                        <div class="col-md-2 price-month">
                            <span>$695 / month</span> 
                        </div>
                     </div>-->
                     <div class="row">
                        <table class="tbl-pricing col-md-12">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <span>50 Customer names per Mo</span> 
                                    </th>
                                    <th>
                                        <span>10 Appointments per Mo.</span>
                                    </th>
                                    <th>
                                        <span>15 Appointments per Mo.</span>
                                    </th>
                                    <th>
                                        <span>25 Appointments per Mo.</span> 
                                    </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>
                                        <span>$250 / month</span> 
                                    </th>
                                    <th>
                                        <span>$325 / month</span>
                                    </th>
                                    <th>
                                        <span>$475 / month</span>
                                    </th>
                                    <th>
                                        <span>$695 / month</span> 
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <span>Call until we reached an Exact # of Appointments</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Call until we reached an Exact # of Names Provided</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Appointment Guarantee</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Caller ID Matching</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>After Hours Calling</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Appointment Reminder Calls</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Retention Alert Email Notices</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Generous No-Show Policy</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>English & Spanish Calling</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>No Long-Term Contracts</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <span>Dynamic Agent Portal</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <span>Human Support</span>
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                                <td>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-pricing-mark">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   
                                </td>
                                <td>
                                    <label>Enroll now</label>
                                </td>
                                <td>
                                    <label>Enroll now</label>
                                </td>
                                <td>
                                   <label>Enroll now</label>
                                </td>
                                <td>
                                    <label>Enroll now</label>
                                </td>
                            </tr>
                            
                        </table>
                     </div>
                     
                     <div class="for-mobile" align="center">
                        <div class="price-cust-mob">
                            <span>50 Customer names per Mo</span>
                        </div>
                         <div class="price-month-mob">
                            <span>$250 / month</span>
                         </div>
                         <table class="col-md-12 tbl-for-mob">
                            <tbody>
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Appointments</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Names Provided</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Guarantee</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Caller ID Matching</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>After Hours Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Reminder Calls</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Retention Alert Email Notices</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Generous No-Show Policy</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>English & Spanish Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>No Long-Term Contracts</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                            </tbody>
                         </table>
                     </div>
                     <div class="for-mobile" align="center">
                        <div class="price-cust-mob">
                            <span>10 Appointments per Mo</span>
                        </div>
                         <div class="price-month-mob">
                            <span>$325 / month</span>
                         </div>
                         <table class="col-md-12 tbl-for-mob">
                            <tbody>
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Appointments</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Names Provided</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Guarantee</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Caller ID Matching</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>After Hours Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Reminder Calls</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Retention Alert Email Notices</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Generous No-Show Policy</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>English & Spanish Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>No Long-Term Contracts</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                            </tbody>
                         </table>
                     </div>
                     <div class="for-mobile" align="center">
                        <div class="price-cust-mob">
                            <span>15 Appointments per Mo</span>
                        </div>
                         <div class="price-month-mob">
                            <span>$475 / month</span>
                         </div>
                         <table class="col-md-12 tbl-for-mob">
                            <tbody>
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Appointments</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Names Provided</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Guarantee</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Caller ID Matching</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>After Hours Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Reminder Calls</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Retention Alert Email Notices</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Generous No-Show Policy</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>English & Spanish Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>No Long-Term Contracts</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                            </tbody>
                         </table>
                     </div>
                     <div class="for-mobile" align="center">
                        <div class="price-cust-mob">
                            <span>25 Appointments per Mo</span>
                        </div>
                         <div class="price-month-mob">
                            <span>$695 / month</span>
                         </div>
                         <table class="col-md-12 tbl-for-mob">
                            <tbody>
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Appointments</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Call until we reached an Exact # of Names Provided</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/x-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Guarantee</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Caller ID Matching</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>After Hours Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Appointment Reminder Calls</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Retention Alert Email Notices</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>Generous No-Show Policy</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>English & Spanish Calling</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <span>No Long-Term Contracts</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check-mark.png" class="img-mark-mob">
                                    </td>
                                </tr> 
                            </tbody>
                         </table>
                     </div>
                     
                     <div class="talk-to-section">
                        <div class="col-md-8">
                            <p>
                                Our pricing Not seeing what you want?  Want to check if you qualify for a subsidy or discount?<br>
                                Let’s talk...we can tailor just the right package for your agency.
                            </p>
                        </div>
                        <div class="col-md-3 talk-to-button">
                            <a href="#open-contact-modal">
                                <div class="btn-orange btn-orange2 col-md-5">
                                    Talk to a Rep
                                </div>
                            </a>
                        </div>
                     </div>
                     
                     <div class="row package-type">
                        <div class="row package-type-headtext" align="center">
                            <span>Package Types</span>
                            <p>At Engagex, our Policy Review Appointment Setting service is offered in two different package types:</p>
                        </div>
                    </div>
                    <div class="row package-type-2" align="text">
                        <div class="col-md-6 why-package">
                            <div class="why-package-headtxt">
                                <span>Per Name Package</span>
                            </div>
                            <div class="why-package-subtxt">
                                <p>Our team will call a specified number of customers each month and attempt to set a policy review appointment with each one.</p>
                            </div>
                        </div>
                        <div class="col-md-6 why-package">
                            <div class="why-package-headtxt">
                                <span>Guaranteed Per Appointment Package</span>
                            </div>
                            <div class="why-package-subtxt">
                                <p>You tell us how many appointments you would like each month and our team will guarantee to deliver the designated amount. </p>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <div id="open-contact-modal" class="modal-window">
          <div>
            <a href="#!" title="Close" class="modal-close">Close</a><br>
            <iframe src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact" width="750" height="450" frameborder="0"></iframe>
        </div>
        <!-- Scripts -->
        <script>
            anima_isHidden = function(e) {
                if (!(e instanceof HTMLElement)) return !1;
                if (getComputedStyle(e).display == "none") return !0; else if (e.parentNode && anima_isHidden(e.parentNode)) return !0;
                return !1;
            };
            anima_loadAsyncSrcForTag = function(tag) {
                var elements = document.getElementsByTagName(tag);
                var toLoad = [];
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var src = e.getAttribute("src");
                    var loaded = (src != undefined && src.length > 0 && src != 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
                    if (loaded) continue;
                    var asyncSrc = e.getAttribute("anima-src");
                    if (asyncSrc == undefined || asyncSrc.length == 0) continue;
                    if (anima_isHidden(e)) continue;
                    toLoad.push(e);
                }
                toLoad.sort(function(a, b) {
                    return anima_getTop(a) - anima_getTop(b);
                });
                for (var i = 0; i < toLoad.length; i++) {
                    var e = toLoad[i];
                    var asyncSrc = e.getAttribute("anima-src");
                    e.setAttribute("src", asyncSrc);
                }
            };
            anima_pauseHiddenVideos = function(tag) {
                var elements = document.getElementsByTagName("video");
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var isPlaying = !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2);
                    var isHidden = anima_isHidden(e);
                    if (!isPlaying && !isHidden && e.getAttribute("autoplay") == "autoplay") {
                        e.play();
                    } else if (isPlaying && isHidden) {
                        e.pause();
                    }
                }
            };
            anima_loadAsyncSrc = function(tag) {
                anima_loadAsyncSrcForTag("img");
                anima_loadAsyncSrcForTag("iframe");
                anima_loadAsyncSrcForTag("video");
                anima_pauseHiddenVideos();
            };
            var anima_getTop = function(e) {
                var top = 0;
                do {
                    top += e.offsetTop || 0;
                    e = e.offsetParent;
                } while (e);
                return top;
            };
            anima_loadAsyncSrc();
            anima_old_onResize = window.onresize;
            anima_new_onResize = undefined;
            anima_updateOnResize = function() {
                if (anima_new_onResize == undefined || window.onresize != anima_new_onResize) {
                    anima_new_onResize = function(x) {
                        if (anima_old_onResize != undefined) anima_old_onResize(x);
                        anima_loadAsyncSrc();
                    };
                    window.onresize = anima_new_onResize;
                    setTimeout(function() {
                        anima_updateOnResize();
                    }, 3000);
                }
            };
            anima_updateOnResize();
            setTimeout(function() {
                anima_loadAsyncSrc();
            }, 200);
        </script>
        <!-- End of Scripts -->