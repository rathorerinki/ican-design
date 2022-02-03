
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ican Guru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  </head>
  <style>

</style>
  <body>
  <?php
 require_once('home-header.php');
  ?>
  <!-- 12-01-22 -->
	<div class="page-banner" style="background-image: url('assets/images/about-bg.png')">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class="page-title">Create session</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

<div class="features-section block">


<div class="container">
    <div class="row">
       
        <div class="col-12 col-sm-8 col-md-8 col-lg-8">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            
                <!-- <div class="card12 our-team profile"> -->
                
                <form id="regForm" action="#">
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <!-- <span class="step"></span>
                        <span class="step"></span> -->
                    </div>
                    <hr/>                    
                    <h1>Create session:</h1>
                    <br/>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                    <div id="drop-region">
                        <div class="drop-message">
                            Drag & Drop images or click to upload
                        </div>
                        <div id="image-preview"></div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label>Session Name<span class="mandatory">* </span> </label>
                        <input type="text" class="form-control" placeholder="Session Name" name="session_name" id="session_name" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label>Price<span class="mandatory">* </span> </label>
                        <div class="price">
                            <input type="text" class="form-control" placeholder="Price" name="session_price" id="session_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description<span class="mandatory">* </span> </label>
                        <div>
                            <textarea class="form-control" rows="4" name="session_description" id="session_description" maxlength="350"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="tab">
                        
                    <div class="step02_wrap">
                                        <!-- <div class="text-center mb-3">
                                            <h6 class="h20 font-sm">Pick Date</h6>
                                        </div> -->
                                        <div class="form-group">
                                            <label>Date<span class="mandatory">* </span> </label>
                                            <div class="price">
                                                <input type="text" class="form-control dateCalender hasDatepicker" name="start_date" id="start_date" autocomplete="off" value="">
                                            </div>
                                        </div>
                                        <input type="hidden" name="timezone" id="timezone" value="Asia/Calcutta">
                                        <input type="hidden" name="session_type" value="group">
                                        <input type="hidden" name="payment_status" value="paid">

                                        <input type="hidden" name="from_id" value="668">
                                        <!-- time slot list -->
                                        <div class="timeSlotBox">
                                            <div class="timeSlotBox_head mb-3 text-center">
                                                <h5 class="h20 font-sm mb-2">Select Time</h5>
                                                <p class="mb-0 duration font-md">AM to PM (Midnight to Noon)</p>
                                            </div>
                                            <div class="timeSlotBox_list d-flex flex-wrap">
                                                                                                 <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option1" data-slotid="1" data-value-start="00.00" data-value-end="00.30" data-starttime="00:00" data-endtime="00:30" disabled="disabled">
                                                    <label for="option1">00:00 - 00:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option2" data-slotid="2" data-value-start="00.30" data-value-end="01.00" data-starttime="00:30" data-endtime="01:00" disabled="disabled">
                                                    <label for="option2">00:30 - 01:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option3" data-slotid="3" data-value-start="01.00" data-value-end="01.30" data-starttime="01:00" data-endtime="01:30" disabled="disabled">
                                                    <label for="option3">01:00 - 01:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option4" data-slotid="4" data-value-start="01.30" data-value-end="02.00" data-starttime="01:30" data-endtime="02:00" disabled="disabled">
                                                    <label for="option4">01:30 - 02:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option5" data-slotid="5" data-value-start="02.00" data-value-end="02.30" data-starttime="02:00" data-endtime="02:30" disabled="disabled">
                                                    <label for="option5">02:00 - 02:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option6" data-slotid="6" data-value-start="02.30" data-value-end="03.00" data-starttime="02:30" data-endtime="03:00" disabled="disabled">
                                                    <label for="option6">02:30 - 03:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option7" data-slotid="7" data-value-start="03.00" data-value-end="03.30" data-starttime="03:00" data-endtime="03:30" disabled="disabled">
                                                    <label for="option7">03:00 - 03:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option8" data-slotid="8" data-value-start="03.30" data-value-end="04.00" data-starttime="03:30" data-endtime="04:00" disabled="disabled">
                                                    <label for="option8">03:30 - 04:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option9" data-slotid="9" data-value-start="04.00" data-value-end="04.30" data-starttime="04:00" data-endtime="04:30" disabled="disabled">
                                                    <label for="option9">04:00 - 04:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option10" data-slotid="10" data-value-start="04.30" data-value-end="05.00" data-starttime="04:30" data-endtime="05:00" disabled="disabled">
                                                    <label for="option10">04:30 - 05:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option11" data-slotid="11" data-value-start="05.00" data-value-end="05.30" data-starttime="05:00" data-endtime="05:30" disabled="disabled">
                                                    <label for="option11">05:00 - 05:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option12" data-slotid="12" data-value-start="05.30" data-value-end="06.00" data-starttime="05:30" data-endtime="06:00" disabled="disabled">
                                                    <label for="option12">05:30 - 06:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option13" data-slotid="13" data-value-start="06.00" data-value-end="06.30" data-starttime="06:00" data-endtime="06:30" disabled="disabled">
                                                    <label for="option13">06:00 - 06:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option14" data-slotid="14" data-value-start="06.30" data-value-end="07.00" data-starttime="06:30" data-endtime="07:00" disabled="disabled">
                                                    <label for="option14">06:30 - 07:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option15" data-slotid="15" data-value-start="07.00" data-value-end="07.30" data-starttime="07:00" data-endtime="07:30" disabled="disabled">
                                                    <label for="option15">07:00 - 07:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option16" data-slotid="16" data-value-start="07.30" data-value-end="08.00" data-starttime="07:30" data-endtime="08:00" disabled="disabled">
                                                    <label for="option16">07:30 - 08:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option17" data-slotid="17" data-value-start="08.00" data-value-end="08.30" data-starttime="08:00" data-endtime="08:30" disabled="disabled">
                                                    <label for="option17">08:00 - 08:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option18" data-slotid="18" data-value-start="08.30" data-value-end="09.00" data-starttime="08:30" data-endtime="09:00" disabled="disabled">
                                                    <label for="option18">08:30 - 09:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option19" data-slotid="19" data-value-start="09.00" data-value-end="09.30" data-starttime="09:00" data-endtime="09:30" disabled="disabled">
                                                    <label for="option19">09:00 - 09:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option20" data-slotid="20" data-value-start="09.30" data-value-end="10.00" data-starttime="09:30" data-endtime="10:00" disabled="disabled">
                                                    <label for="option20">09:30 - 10:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option21" data-slotid="21" data-value-start="10.00" data-value-end="10.30" data-starttime="10:00" data-endtime="10:30" disabled="disabled">
                                                    <label for="option21">10:00 - 10:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option22" data-slotid="22" data-value-start="10.30" data-value-end="11.00" data-starttime="10:30" data-endtime="11:00" disabled="disabled">
                                                    <label for="option22">10:30 - 11:00</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option23" data-slotid="23" data-value-start="11.00" data-value-end="11.30" data-starttime="11:00" data-endtime="11:30" disabled="disabled">
                                                    <label for="option23">11:00 - 11:30</label>
                                                                                                </div>
                                             <div class="timeSlot">
                                                                                                        <input type="checkbox" name="duration[]" class="position-absolute" id="option24" data-slotid="24" data-value-start="11.30" data-value-end="12.00" data-starttime="11:30" data-endtime="12:00" disabled="disabled">
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
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="25" id="option25" data-value-start="12.00" data-value-end="12.30" data-starttime="12:00" data-endtime="12:30" disabled="disabled">
                                                <label for="option25">12:00 - 12:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="26" id="option26" data-value-start="12.30" data-value-end="13.00" data-starttime="12:30" data-endtime="13:00" disabled="disabled">
                                                <label for="option26">12:30 - 01:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="27" id="option27" data-value-start="13.00" data-value-end="13.30" data-starttime="13:00" data-endtime="13:30" disabled="disabled">
                                                <label for="option27">01:00 - 01:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="28" id="option28" data-value-start="13.30" data-value-end="14.00" data-starttime="13:30" data-endtime="14:00" disabled="disabled">
                                                <label for="option28">01:30 - 02:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="29" id="option29" data-value-start="14.00" data-value-end="14.30" data-starttime="14:00" data-endtime="14:30" disabled="disabled">
                                                <label for="option29">02:00 - 02:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="30" id="option30" data-value-start="14.30" data-value-end="15.00" data-starttime="14:30" data-endtime="15:00" disabled="disabled">
                                                <label for="option30">02:30 - 03:00</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="31" id="option31" data-value-start="15.00" data-value-end="15.30" data-starttime="15:00" data-endtime="15:30" disabled="disabled">
                                                <label for="option31">03:00 - 03:30</label>
                                                                                        </div>
                                         <div class="timeSlot">
                                                                                                <input type="checkbox" name="duration[]" class="position-absolute" data-slotid="32" id="option32" data-value-start="15.30" data-value-end="16.00" data-starttime="15:30" data-endtime="16:00" disabled="disabled">
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
                                            <p class="font-md mb-0" id="getDate">02/03/2022</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <label class="mb-0">Your Slot</label>
                                            <p class="font-md mb-0" id="selectedTimeSlot">No slot selected</p>
                                        </li>
                                    </ul>
                                    <!-- <a href="javascript:void(0);" class="btn btn-lg btn-primary ripple-effect min-w-350" onclick="sessionCreate()" data-dismiss="modal">Schedule Now</a> -->
                                    <!-- <button type="button" class="btn btn-lg btn-primary  ripple-effect min-w-350 mt-1" id="scheduleNow" onclick="submitFromCreateSession();" disabled="">Schedule Now</button> -->
                                </div>

                                <div class="prevStepLink">
                                    <p class="mb-0">Go to step <a href="javascript:void(0);" class="btnPrev theme-link">1. Session Details</a></p>
                                </div>
                        </div>
                    </div>
                    <!-- <div class="tab">Birthday:
                        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
                        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
                        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                    </div>
                    <div class="tab">Login Info:
                        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                    </div> -->
                    <div style="overflow:auto;">
                        <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    </form>
                </div>
              

            <!-- </div> -->
            </div>
           
        </div>
        
        <div class="col-md-6 col-sm-12 col-12 col-lg-4">
              <div class="card12 img__wrap">
                  <!-- <div class="card-header12 img__img" >
                  <img  class="sesssion-img" src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&w=1000&q=80" alt="rover" />

                  <span class="img__description content">
                      <p style="float:left;font-size:15px;font-weight:600">Vish Dhanotiya</p>
                      <p style="float:right;font-size:15px;font-weight:600">$20</p>
                  </span>
                  </div> -->
                  <!--  -->
                  <h3 style="padding-top:10px;text-align:center ">Invited Participants (0)</h3>
                  <hr/>
                      <div class="row left_align margin-top-bottom">
                          <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                               
                            No Participants added <br/>
                          </div>
                         

                      </div>                                           


                      <!-- <hr/>
                      <div class="row margin-top-bottom"> -->
                        
                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                            <button class="session-start-rate-now">
                            <a href="#" class="color-anchor" > + Add</a>
                            </button>
                        </div>
                        
                      <!-- </div> -->

                    </div>


                            
                </div>
        
    </div>


</div>
</div> <!-- End Live Online Class -->



  <?php
require_once("footer.php");
?>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}



var // where files are dropped + file selector is opened
	dropRegion = document.getElementById("drop-region"),
	// where images are previewed
	imagePreviewRegion = document.getElementById("image-preview");


// open file selector when clicked on the drop region
var fakeInput = document.createElement("input");
fakeInput.type = "file";
fakeInput.accept = "image/*";
fakeInput.multiple = true;
dropRegion.addEventListener('click', function() {
	fakeInput.click();
});

fakeInput.addEventListener("change", function() {
	var files = fakeInput.files;
	handleFiles(files);
});


function preventDefault(e) {
	e.preventDefault();
  	e.stopPropagation();
}

dropRegion.addEventListener('dragenter', preventDefault, false)
dropRegion.addEventListener('dragleave', preventDefault, false)
dropRegion.addEventListener('dragover', preventDefault, false)
dropRegion.addEventListener('drop', preventDefault, false)


function handleDrop(e) {
	var dt = e.dataTransfer,
		files = dt.files;

	if (files.length) {

		handleFiles(files);
		
	} else {

		// check for img
		var html = dt.getData('text/html'),
	        match = html && /\bsrc="?([^"\s]+)"?\s*/.exec(html),
	        url = match && match[1];



	    if (url) {
	        uploadImageFromURL(url);
	        return;
	    }

	}


	function uploadImageFromURL(url) {
		var img = new Image;
        var c = document.createElement("canvas");
        var ctx = c.getContext("2d");

        img.onload = function() {
            c.width = this.naturalWidth;     // update canvas size to match image
            c.height = this.naturalHeight;
            ctx.drawImage(this, 0, 0);       // draw in image
            c.toBlob(function(blob) {        // get content as PNG blob

            	// call our main function
                handleFiles( [blob] );

            }, "image/png");
        };
        img.onerror = function() {
            alert("Error in uploading");
        }
        img.crossOrigin = "";              // if from different origin
        img.src = url;
	}

}

dropRegion.addEventListener('drop', handleDrop, false);



function handleFiles(files) {
	for (var i = 0, len = files.length; i < len; i++) {
		if (validateImage(files[i]))
			previewAnduploadImage(files[i]);
	}
}

function validateImage(image) {
	// check the type
	var validTypes = ['image/jpeg', 'image/png', 'image/gif'];
	if (validTypes.indexOf( image.type ) === -1) {
		alert("Invalid File Type");
		return false;
	}

	// check the size
	var maxSizeInBytes = 10e6; // 10MB
	if (image.size > maxSizeInBytes) {
		alert("File too large");
		return false;
	}

	return true;

}

function previewAnduploadImage(image) {

	// container
	var imgView = document.createElement("div");
	imgView.className = "image-view";
	imagePreviewRegion.appendChild(imgView);

	// previewing image
	var img = document.createElement("img");
	imgView.appendChild(img);

	// progress overlay
	var overlay = document.createElement("div");
	overlay.className = "overlay";
	imgView.appendChild(overlay);


	// read the image...
	var reader = new FileReader();
	reader.onload = function(e) {
		img.src = e.target.result;
	}
	reader.readAsDataURL(image);

	// create FormData
	var formData = new FormData();
	formData.append('image', image);

	// upload the image
	var uploadLocation = 'https://api.imgbb.com/1/upload';
	formData.append('key', 'bb63bee9d9846c8d5b7947bcdb4b3573');

	var ajax = new XMLHttpRequest();
	ajax.open("POST", uploadLocation, true);

	ajax.onreadystatechange = function(e) {
		if (ajax.readyState === 4) {
			if (ajax.status === 200) {
				// done!
			} else {
				// error!
			}
		}
	}

	ajax.upload.onprogress = function(e) {

		// change progress
		// (reduce the width of overlay)

		var perc = (e.loaded / e.total * 100) || 100,
			width = 100 - perc;

		overlay.style.width = width;
	}

	ajax.send(formData);

}
</script>


<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/match-height.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/script.js"></script>

	
    </body>
</html>
