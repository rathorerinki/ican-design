
<!DOCTYPE html>
<html>

<head>

  <title> Schedule Session  | Open-office</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="mmVJ1fKTdm2VEwieojKJVkp7m2Osff6bbkrVgNlX" />
    <!-- Links -->
    <link rel="stylesheet" href="assets/css/mantinee.css" type="text/css">
    <script src="assets/js/front-mentee.js"></script>

</head>

<body class="topPad">

  <!-- page view -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> -->
<!-- Main -->
<main class="main-content scheduleSession">
    <!-- schedule content -->
    <section class="scheduleContent">
        <div class="container">
            <div>
                <div class="scheduleContent_left">
                    <div class="scheduleContent_left_wrap">
                        <form id="createSession" action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="mmVJ1fKTdm2VEwieojKJVkp7m2Osff6bbkrVgNlX">

                            <label for="subject">What Help Do you want ?<span style="color:red">*</span></label>
                          <textarea id="subject" name="subject" placeholder="What Help Do you want ?" style="height:200px"></textarea>

                          <label for="date">Date<span style="color:red">*</span></label>
                          <input id="date" name="date" type="date" placeholder="What Help Do you want ?" />

                          
                            <div class="scheduleContent_left_inner">
                                <div class="scheduleContent_left_body">
                                   
                                    <!-- time slot list -->
                                    <div class="timeSlotBox">
                                        <div class="timeSlotBox_head mb-3 text-center">
                                            <h5 class="h20 font-sm mb-2">Select Time</h5>
                                            <p class="mb-0 duration font-md">AM to PM (Midnight to Noon)</p>
                                        </div>
                                        <div class="timeSlotBox_list d-flex flex-wrap">
                                                                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option1" data-slotid="1" data-value-start="00.00" data-value-end="00.30" data-starttime="00:00" data-endtime="00:30">
                                                <label for="option1">00:00 - 00:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option2" data-slotid="2" data-value-start="00.30" data-value-end="01.00" data-starttime="00:30" data-endtime="01:00">
                                                <label for="option2">00:30 - 01:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option3" data-slotid="3" data-value-start="01.00" data-value-end="01.30" data-starttime="01:00" data-endtime="01:30">
                                                <label for="option3">01:00 - 01:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option4" data-slotid="4" data-value-start="01.30" data-value-end="02.00" data-starttime="01:30" data-endtime="02:00">
                                                <label for="option4">01:30 - 02:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option5" data-slotid="5" data-value-start="02.00" data-value-end="02.30" data-starttime="02:00" data-endtime="02:30">
                                                <label for="option5">02:00 - 02:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option6" data-slotid="6" data-value-start="02.30" data-value-end="03.00" data-starttime="02:30" data-endtime="03:00">
                                                <label for="option6">02:30 - 03:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option7" data-slotid="7" data-value-start="03.00" data-value-end="03.30" data-starttime="03:00" data-endtime="03:30">
                                                <label for="option7">03:00 - 03:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option8" data-slotid="8" data-value-start="03.30" data-value-end="04.00" data-starttime="03:30" data-endtime="04:00">
                                                <label for="option8">03:30 - 04:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option9" data-slotid="9" data-value-start="04.00" data-value-end="04.30" data-starttime="04:00" data-endtime="04:30">
                                                <label for="option9">04:00 - 04:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option10" data-slotid="10" data-value-start="04.30" data-value-end="05.00" data-starttime="04:30" data-endtime="05:00">
                                                <label for="option10">04:30 - 05:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option11" data-slotid="11" data-value-start="05.00" data-value-end="05.30" data-starttime="05:00" data-endtime="05:30">
                                                <label for="option11">05:00 - 05:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option12" data-slotid="12" data-value-start="05.30" data-value-end="06.00" data-starttime="05:30" data-endtime="06:00">
                                                <label for="option12">05:30 - 06:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option13" data-slotid="13" data-value-start="06.00" data-value-end="06.30" data-starttime="06:00" data-endtime="06:30">
                                                <label for="option13">06:00 - 06:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option14" data-slotid="14" data-value-start="06.30" data-value-end="07.00" data-starttime="06:30" data-endtime="07:00">
                                                <label for="option14">06:30 - 07:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option15" data-slotid="15" data-value-start="07.00" data-value-end="07.30" data-starttime="07:00" data-endtime="07:30">
                                                <label for="option15">07:00 - 07:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option16" data-slotid="16" data-value-start="07.30" data-value-end="08.00" data-starttime="07:30" data-endtime="08:00">
                                                <label for="option16">07:30 - 08:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option17" data-slotid="17" data-value-start="08.00" data-value-end="08.30" data-starttime="08:00" data-endtime="08:30">
                                                <label for="option17">08:00 - 08:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option18" data-slotid="18" data-value-start="08.30" data-value-end="09.00" data-starttime="08:30" data-endtime="09:00">
                                                <label for="option18">08:30 - 09:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option19" data-slotid="19" data-value-start="09.00" data-value-end="09.30" data-starttime="09:00" data-endtime="09:30">
                                                <label for="option19">09:00 - 09:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option20" data-slotid="20" data-value-start="09.30" data-value-end="10.00" data-starttime="09:30" data-endtime="10:00">
                                                <label for="option20">09:30 - 10:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option21" data-slotid="21" data-value-start="10.00" data-value-end="10.30" data-starttime="10:00" data-endtime="10:30">
                                                <label for="option21">10:00 - 10:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option22" data-slotid="22" data-value-start="10.30" data-value-end="11.00" data-starttime="10:30" data-endtime="11:00">
                                                <label for="option22">10:30 - 11:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option23" data-slotid="23" data-value-start="11.00" data-value-end="11.30" data-starttime="11:00" data-endtime="11:30">
                                                <label for="option23">11:00 - 11:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" id="option24" data-slotid="24" data-value-start="11.30" data-value-end="12.00" data-starttime="11:30" data-endtime="12:00">
                                                <label for="option24">11:30 - 12:00</label>
                                                                                        </div>
                                                                            </div>
                                </div>

                                <!-- time slot list -->
                                <div class="timeSlotBox">
                                    <div class="timeSlotBox_head mb-3 text-center">
                                        <p class="mb-0 duration font-md">PM to AM (Noon to Midnight)</p>
                                    </div>
                                    <div class="timeSlotBox_list d-flex flex-wrap">
                                         <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="25" id="option25" data-value-start="12.00" data-value-end="12.30" data-starttime="12:00" data-endtime="12:30">
                                            <label for="option25">12:00 - 12:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="26" id="option26" data-value-start="12.30" data-value-end="13.00" data-starttime="12:30" data-endtime="13:00">
                                            <label for="option26">12:30 - 01:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="27" id="option27" data-value-start="13.00" data-value-end="13.30" data-starttime="13:00" data-endtime="13:30">
                                            <label for="option27">01:00 - 01:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="28" id="option28" data-value-start="13.30" data-value-end="14.00" data-starttime="13:30" data-endtime="14:00">
                                            <label for="option28">01:30 - 02:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="29" id="option29" data-value-start="14.00" data-value-end="14.30" data-starttime="14:00" data-endtime="14:30">
                                            <label for="option29">02:00 - 02:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="30" id="option30" data-value-start="14.30" data-value-end="15.00" data-starttime="14:30" data-endtime="15:00">
                                            <label for="option30">02:30 - 03:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="31" id="option31" data-value-start="15.00" data-value-end="15.30" data-starttime="15:00" data-endtime="15:30">
                                            <label for="option31">03:00 - 03:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="32" id="option32" data-value-start="15.30" data-value-end="16.00" data-starttime="15:30" data-endtime="16:00">
                                            <label for="option32">03:30 - 04:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="33" id="option33" data-value-start="16.00" data-value-end="16.30" data-starttime="16:00" data-endtime="16:30">
                                            <label for="option33">04:00 - 04:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="34" id="option34" data-value-start="16.30" data-value-end="17.00" data-starttime="16:30" data-endtime="17:00">
                                            <label for="option34">04:30 - 05:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="35" id="option35" data-value-start="17.00" data-value-end="17.30" data-starttime="17:00" data-endtime="17:30">
                                            <label for="option35">05:00 - 05:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="36" id="option36" data-value-start="17.30" data-value-end="18.00" data-starttime="17:30" data-endtime="18:00">
                                            <label for="option36">05:30 - 06:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="37" id="option37" data-value-start="18.00" data-value-end="18.30" data-starttime="18:00" data-endtime="18:30">
                                            <label for="option37">06:00 - 06:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="38" id="option38" data-value-start="18.30" data-value-end="19.00" data-starttime="18:30" data-endtime="19:00">
                                            <label for="option38">06:30 - 07:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="39" id="option39" data-value-start="19.00" data-value-end="19.30" data-starttime="19:00" data-endtime="19:30">
                                            <label for="option39">07:00 - 07:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="40" id="option40" data-value-start="19.30" data-value-end="20.00" data-starttime="19:30" data-endtime="20:00">
                                            <label for="option40">07:30 - 08:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="41" id="option41" data-value-start="20.00" data-value-end="20.30" data-starttime="20:00" data-endtime="20:30">
                                            <label for="option41">08:00 - 08:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="42" id="option42" data-value-start="20.30" data-value-end="21.00" data-starttime="20:30" data-endtime="21:00">
                                            <label for="option42">08:30 - 09:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="43" id="option43" data-value-start="21.00" data-value-end="21.30" data-starttime="21:00" data-endtime="21:30">
                                            <label for="option43">09:00 - 09:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="44" id="option44" data-value-start="21.30" data-value-end="22.00" data-starttime="21:30" data-endtime="22:00">
                                            <label for="option44">09:30 - 10:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="45" id="option45" data-value-start="22.00" data-value-end="22.30" data-starttime="22:00" data-endtime="22:30">
                                            <label for="option45">10:00 - 10:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="46" id="option46" data-value-start="22.30" data-value-end="23.00" data-starttime="22:30" data-endtime="23:00">
                                            <label for="option46">10:30 - 11:00</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="47" id="option47" data-value-start="23.00" data-value-end="23.30" data-starttime="23:00" data-endtime="23:30">
                                            <label for="option47">11:00 - 11:30</label>
                                                                                </div>
                                     <div class="timeSlot">
                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="48" id="option48" data-value-start="23.30" data-value-end="24" data-starttime="23:30" data-endtime="00:00">
                                            <label for="option48">11:30 - 12:00</label>
                                                                                </div>
                                                                    </div>
                            </div>

                            <div class="scheduleInfo d-flex align-items-center justify-content-between">
                                <ul class="list-inline mb-0 order-1">
                                    <li class="list-inline-item">
                                        <label class="mb-0">Selected Date</label>
                                        <p class="font-md mb-0" id="getDate"></p>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="mb-0">Your Slot</label>
                                        <p class="font-md mb-0" id="selectedTimeSlot">No slot selected</p>
                                    </li>
                                </ul>
                                <!-- <a href="javascript:void(0);" class="btn btn-lg btn-primary ripple-effect min-w-350" onclick="sessionCreate()" data-dismiss="modal">Schedule Now</a> -->
                                <button type="button" class="btn btn-lg btn-primary  ripple-effect min-w-350 mt-1" id="scheduleNow" onclick="submitCreateSession();">Schedule Now</button>
                            </div>
                    </div>
                </div>
                </form>
                <script>
                jQuery(document).ready(function(){

                    $("#createSession").each(function() {
                        $(this).validate({
                            errorElement: 'span',
                            errorClass: 'help-block error-help-block',

                            errorPlacement: function (error, element) {
                                if (element.parent('.input-group').length ||
                                    element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                                    error.insertAfter(element.parent());
                                    // else just place the validation message immediately after the input
                                } else {
                                    error.insertAfter(element);
                                }
                            },
                            highlight: function (element) {
                                $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                            },

                            
                            ignore: ":hidden, [contenteditable='true']",
                            
                            /*
                            // Uncomment this to mark as validated non required fields
                            unhighlight: function(element) {
                            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                            },
                            */
                            success: function (element) {
                                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                            },

                            focusInvalid: true,
                            
                            rules: {"start_date":{"laravelValidation":[["Required",[],"You need to select a date for the session.",true,"start_date"]]},"session_description":{"laravelValidation":[["Required",[],"The session description field is required.",true,"session_description"],["String",[],"The session description must be a string.",false,"session_description"],["Min",["3"],"Description should be between 3-350 characters",false,"session_description"],["Max",["350"],"The session description may not be greater than 350 characters.",false,"session_description"]]},"duration":{"laravelValidation":[["Required",[],"The duration field is required.",true,"duration"]]},"timezone":{"laravelValidation":[["Required",[],"The timezone field is required.",true,"timezone"]]}}            });
                    });
                });
            </script>

            </div>
        </div>
       
    </section>

</main>


<!-- modal confirm logout -->
<div class="modal fade withoutRoundedModal" id="logoutweb" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paymentDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0  align-items-center pb-0">
                <h5 class="modal-title">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon-close"></em>
                </button>
            </div>
            <div class="modal-body border-0 p-30">
                <p class="font-md gray-light-color">Are you sure you want to logout account? </p>
                <div class="btn-row d-flex mt-3 mt-md-4">
                    <a href="https://open-office.codiantdev.com/logoutweb" class="btn btn-secondary btn-lg ripple-effect mr-3 w-100 addLoader">yes</a>
                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary btn-lg ripple-effect w-100">no</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video popup -->
<div class="modal fade videoPopup" id="videoPopup" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">

            <div class="modal-body border-0 p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon-close"></em>
                </button>
                <div id="videolink">
               loading....
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    
    
</script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/moment-timezone-with-data-2012-2022.min.js"></script>

<script type="text/javascript" src="assets/js/reatesession.js"></script>

</body>

</html>