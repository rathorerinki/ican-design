/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/front/mentee/createsession.js":
/*!****************************************************!*\
  !*** ./resources/js/front/mentee/createsession.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

    function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

    $(function () {
      var tz = '';
    
      try {
        // moment js + moment timezone
        $('#timezone').val(moment.tz.guess());
      } catch (e) {
        console.log("timezone not set");
      }
    });
    $('input[type=checkbox]').on('click', function () {
      var timeSlots = $('input[name="duration[]"]').filter(':checked');
      var length = timeSlots.length;
    
      if (length == 1) {
        $("#selectedTimeSlot").text(convert_to_24h($(timeSlots[0]).data('starttime')) + ' to ' + convert_to_24h($(timeSlots[0]).data('endtime')));
      } else if (length > 1) {
        // select all slot between two slots
        var startSlotId = $(timeSlots[0]).data('slotid');
        var endSlotId = $(this).data('slotid');
        $('input[name="duration[]"]').prop('checked', false);
    
        for (var i = startSlotId; i <= endSlotId; i++) {
          if ($("#option" + i).attr('disabled')) {
            toastr.error('You can not select old slot');
            $('input[name="duration[]"]').prop('checked', false);
            $("#selectedTimeSlot").text('No slot selected');
            checkReadyForScheduleNow();
            return false;
          }
    
          $("#option" + i).prop('checked', true);
        }
    
        var timeSlots = $('input[name="duration[]"]').filter(':checked');
        var length = timeSlots.length;
    
        if (length > 1) {
          $("#selectedTimeSlot").text(convert_to_24h($(timeSlots[0]).data('starttime')) + ' to ' + convert_to_24h($(this).data('endtime')));
        } else {
          $("#selectedTimeSlot").text('No slot selected');
        }
      } else {
        $("#selectedTimeSlot").text('No slot selected');
      }
    
      checkReadyForScheduleNow();
    });
    $('#createSession').on('keyup blur', function () {
      checkReadyForScheduleNow();
    }); // On page load check ready for schedule now
    
    checkReadyForScheduleNow();
    
    function checkReadyForScheduleNow() {
      var count = $('input[name="duration[]"]').filter(':checked').length;
    
      if (count) {
        $('#scheduleNow').prop('disabled', false);
      } else {
        $('#scheduleNow').prop('disabled', true);
        return false;
      }
    
      if ($('#createSession').valid()) {
        $('#scheduleNow').prop('disabled', false);
      } else {
        $('#scheduleNow').prop('disabled', true);
      }
    }
    
    $('input.dateCalender').datepicker({
      minDate: 0
    }).on('change', function (ev) {
      var firstDate = $(this).val();
      $("#getDate").html(firstDate);
      checkExistingSchedules(firstDate);
      $('#createSession').valid();
      checkReadyForScheduleNow();
    }).datepicker("setDate", "0");
    $('#start_date').on('keyup blur', function () {
      checkReadyForScheduleNow();
    });
    var firstDate = $('input.dateCalender').val();
    $("#getDate").html(firstDate);
    
    function updateTimeSlots(firstDate) {
      console.log(firstDate);
      $("input[name='duration[]']").attr('disabled', false);
    }
    
    $('.btnNext').on('click', function (e) {
      e.preventDefault();
      var setpCurr = $(this).closest('.step');
      var setpNext = $(this).closest('.step').next();
      setpCurr.css('display', 'none');
      setpNext.css('display', 'block');
      $('.sessionSteps_left_header li:last-child').addClass('active');
    });
    $('.btnPrev').on('click', function (e) {
      e.preventDefault();
      var setpCurr = $(this).closest('.step');
      var setpPrev = $(this).closest('.step').prev();
      setpCurr.css('display', 'none');
      setpPrev.css('display', 'block');
      $('.sessionSteps_left_header li:last-child').removeClass('active');
    }); // step show on top
    
    var headerHeight = $('#mainheader').outerHeight(); // Target your header navigation here
    
    $('.btnNext, .btnPrev').click(function (e) {
      $('html, body').animate({
        scrollTop: $('.sessionSteps').offset().top - headerHeight // Add it to the calculation here
    
      }, 1000);
      e.preventDefault();
    }); //invite people function
    
    function invitePeople() {
      $('#invitePeople').modal('show');
    } //sessionCreate function
    
    
    function sessionCreate() {
      $('#sessionCreate').modal('show');
    } // invite people string change
    
    
    $('.invite-btn').click(function () {
      $(this).text(function (_, text) {
        return text === "Invite" ? "Invited" : "Invite";
      });
    
      if ($(this).text() == "Invite") {
        $(this).removeClass('invited');
      } else if ($(this).text() == "Invited") {
        $(this).addClass('invited');
      }
    });
    var d = new Date();
    var strDate = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate();
    checkExistingSchedules(strDate);
    
    function checkExistingSchedules(date) {
      var userId = $("input[name=mentor_id").val();
      $.ajax({
        url: "schedules?id=" + userId,
        type: "GET",
        data: {
          date: date
        },
        dataType: 'JSON',
        success: function success(response) {
          if (response.success) {
            $("input[name='duration[]']").attr('disabled', false);
            $("input[name='duration[]']").attr('checked', false);
            var isSameDate = moment().isSame(date, 'day');
    
            if (isSameDate) {
              //console.log('selected todays date');
              var a = moment.tz().local(); //console.log(a.hours()+'.'+a.minute());
    
              var startTimeLocal = a.hours() + '.' + a.minute();
              $('input[type=checkbox]').each(function () {
                var startStart = parseFloat($(this).data('value-start'));
                var timeEnd = parseFloat($(this).data('value'));
    
                if (startTimeLocal >= startStart || startTimeLocal >= timeEnd) {
                  $(this).attr('disabled', true);
                }
              });
            }
    
            var data = response.data;
    
            for (var i = 0; i < data.length; i++) {
              var element = data[i];
              var startTime = data[i].start_time;
              var endTime = data[i].end_time;
              var aa1 = startTime.split(":");
              var aa2 = endTime.split(":");
              startTime = parseFloat(aa1[0] + '.' + aa1[1]);
              endTime = parseFloat(aa2[0] + '.' + aa2[1]);
              var a = moment.tz("2013-11-18 " + aa1[0] + ":" + aa1[1], 'utc').local();
              var b = moment.tz("2013-11-18 " + aa2[0] + ":" + aa2[1], 'utc').local(); //console.log(a.hours()+'.'+a.minute());
    
              var startTimeLocal = a.hours() + '.' + a.minute();
              var endTimeLocal = b.hours() + '.' + b.minute();
              $('input[type=checkbox]').each(function () {
                var startTime = parseFloat($(this).data('value-start'));
                var endTime = parseFloat($(this).data('value-end'));
    
                if (startTimeLocal == startTime && endTimeLocal == endTime || startTimeLocal <= startTime && endTimeLocal >= endTime) {
                  $(this).attr('disabled', true);
                }
              });
            }
          }
        },
        error: function error(data) {
          var obj = JSON.parse(data);
          console.log(obj);
        }
      });
    }
    
    window.submitCreateSession = function submitCreateSession() {
      var _$$ajax;
    
      var form = $('form')[0];
      var url = $(form).attr('action');
      console.log(url);
      var formData = new FormData(form);
      var d = new Date($("#start_date").val());
      var startDate = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate();
      var timeslot = $("#selectedTimeSlot").text();
      timeslot = timeslot.split('to');
      formData.append('start_date_time', startDate + ' ' + timeslot[0]);
      formData.append('end_date_time', startDate + timeslot[1]);
      formData.append('duration', 30);
      var btn = $('#scheduleNow');
      var showLoader = 'Processing...';
      showButtonLoader(btn, showLoader, 'disabled');
      $.ajax((_$$ajax = {
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        dataType: 'JSON',
        cache: false
      }, _defineProperty(_$$ajax, "contentType", false), _defineProperty(_$$ajax, "success", function success(response) {
        showButtonLoader(btn, 'Schedule Now', 'enable');
        console.log(response);
    
        if (response.success == true) {
          $("#createSessionSuccessPopup").html(response.data.successPopup);
          $('#sessionScheduled').modal('show');
          $('#sessionScheduled').on('hidden.bs.modal', function () {
            window.location.href = 'home';
          });
        } else {
          toastr.error(response.error.message);
        }
      }), _defineProperty(_$$ajax, "error", function error(data) {
        showButtonLoader(btn, 'Schedule Now', 'enable');
    
        if (data.status === 422) {
          var responseText = JSON.parse(data.responseText);
          toastr.error(responseText.error.message);
        }
    
        if (data.status === 400) {
          var responseText = JSON.parse(data.responseText);
          toastr.error(responseText.message);
        }
      }), _$$ajax));
    };
    
    window.showButtonLoader = function (button, text, action) {
      if (action === 'disabled') {
        button.append('<span class="buttonLoader spinner-border spinner-border-sm ml-2"></span>');
        button.prop('disabled', true);
      } else {
        $(button).find('.spinner-border').remove();
        button.prop('disabled', false);
      }
    };
    
    function convert_to_24h(time) {
      // Check correct time format and split into components
      time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
    
      if (time.length > 1) {
        // If time format correct
        time = time.slice(1); // Remove full string match value
    
        time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
    
        time[0] = +time[0] % 12 || 12; // Adjust hours
      } //return time; // return adjusted time or original string
    
    
      var tel = document.getElementById('rzlt');
      return time.join('');
    }
    
    ;
    
    /***/ }),
    
    /***/ 8:
    /*!**********************************************************!*\
      !*** multi ./resources/js/front/mentee/createsession.js ***!
      \**********************************************************/
    /*! no static exports found */
    /***/ (function(module, exports, __webpack_require__) {
    
    module.exports = __webpack_require__(/*! C:\xampp\htdocs\open-office\resources\js\front\mentee\createsession.js */"./resources/js/front/mentee/createsession.js");
    
    
    /***/ })
    
    /******/ });