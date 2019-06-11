<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/contact.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<?php
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/css/contact.css?t='. time(), CClientScript::POS_END);
?>
<input id="anPageName" name="page" type="hidden" value="contact-us"/>
<div class="contact-us">
    <div>
        <!--<div class="contact-us-intro" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/Group_11.png);background-repeat: no-repeat;background-position: center center;">-->
        <div class="contact-us-intro">
            <div class="contact-us-intro-text" align="center">
                <img class="logo-img" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png">
                <h2>Let's Talk!</h2>
                <hr>
            </div><br>
            <div class="contact-us-form">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/sendemail.php" method="POST">
                    <input type="hidden" name="taction" value="sendemail">
                    <div class="form-group">
                        <div class="input-form">
                            <input type="text" class="form-control" id="tname" name="tname" placeholder="First Name*" required>
                        </div>
                        <div class="input-form">
                            <input type="text" class="form-control" id="tlname" name="tlname" placeholder="Last Name*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-form">
                            <input type="number" class="form-control" placeholder="Phone Number*" id="tphone" name="tphone" required>
                        </div>
                        <div class="input-form">
                            <input type="email" class="form-control" placeholder="Email*" id="temail" name="temail" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message*" id="tnotes" name="tnotes" required></textarea>
                    </div>
                    <!--<div class="form-group">
                        <div class="input-form">
                            <input type="text" class="form-control" id="tcompany" name="tcompany" placeholder="Last Name*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select how to reach you:</label>
                        <div class="input-form">
                            <select class="form-control" id="contactselector" required>
                                <option>--Select how to reach you--</option>
                                <option value="phone">Phone</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group contact-selector" id="phone" style="display:none"> 
                        <label>Phone:</label>
                        <div class="input-form">
                            <input type="number" class="form-control" placeholder="Phone Number" id="tphone" name="tphone">
                        </div>
                         <div class="input-form">
                            <label>When would you like to be contacted?</label>
                            <div class="input-form">
                                <input id="tdate" name="tdate" type="date" class="form-control" id="date">
                                <input id="ttime" name="ttime" type="text" class="form-control" id="time">
                            </div>
                        </div>
                    </div>
                    <div class="form-group contact-selector"  id="email" style="display:none">
                        <label>Email:</label>
                        <div class="input-form">
                            <input type="email" class="form-control" placeholder="Email address" id="temail" name="temail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Notes:</label>
                        <div class="input-form">
                            <textarea class="form-control" placeholder="Notes" id="tnotes" name="tnotes" required></textarea>
                        </div>
                    </div>-->
                    <div class="form-group" align="center">
                        <button type="submit" class="btn-orange">PLEASE CONTACT ME!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#contactselector').change(function(){
            $('.contact-selector').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>