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
/******/ 	return __webpack_require__(__webpack_require__.s = 26);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/front/mentee/main.js":
/*!*******************************************!*\
  !*** ./resources/js/front/mentee/main.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

    $(document).ready(function () {
        $.ajax({
          url: "getMenteeNotificationApi",
          type: 'GET',
          dataType: 'json',
          success: function success(data) {
            var template = '';
      
            for (var i = 0; i < data.data.length; i++) {
              if (data.data[i]['object_type'] == 'one_to_one_session') {
                var notificationLink = 'one-to-one-session-details?id=' + btoa(data.data[i]['object_id']) + '&search=session';
              } else if (data.data[i]['from_id'] == '0') {
                var notificationLink = 'my-transactions';
              } else {
                var notificationLink = 'session-details?id=' + btoa(data.data[i]['object_id']) + '&search=session';
              }
      
              template += "<li class=\" position-relative d-flex active\"> \n                            <div class=\"notificationBox_profile\">\n                                <img src=\"".concat(data.data[i]['norifcationImageUrl'], "\" alt=\"User-img\">\n                            </div>\n                            <div class=\"notificationBox_detail\">\n                                <p class=\"mb-0 font-md\">").concat(data.data[i]['notification_message'], "</p>\n                                <span class=\"font-md\">").concat(data.data[i]['userNofifyTime'], "</span>\n                            </div>\n                            <a href=\"") + notificationLink + "\" class=\"stretched-link\"> </a>\n                        </li>";
            }
      
            $("#notificationmodulesAdd").append(template);
          }
        });
      });
      $('#dynamicSearch').on('input', function () {
        var query = $(this).val();
      
        if ($(window).width() < 1199) {
          var seachtype = $('#seachtypeMobile').val();
        } else {
          var seachtype = $('#seachtype').val();
        }
      
        if (query != '') {
          var _token = $('input[name="_token"]').val();
      
          $.ajax({
            url: "dashboardSearch",
            method: "POST",
            data: {
              search: query,
              _token: _token,
              type: seachtype
            },
            success: function success(data) {
              if (seachtype == 'mentee') {
                $("#menteeList").css("display", "block");
                $("#menteeList").empty();
      
                if (data.data.length == 0) {
                  $(".userSelect_list").css("min-height", "65px");
                  $("#menteeList").append('<div class="alert alert-danger w-100 mb-0" role="alert">No record found</div>');
                } else {
                  var template = '';
      
                  for (var i = 0; i < data.data.length; i++) {
                    var indusCount = '';
      
                    if (data.data[i]['industry'].length != 1) {
                      indusCount = "+" + (data.data[i]['industry'].length - 1);
                    }
      
                    template += " <div class=\"userSelect_item\">\n                <div class=\"media position-relative\">\n                    <div class=\"media_user\">\n                        <img src=\"".concat(data.data[i]['image_url'], "\" class=\"rounded-circle\" alt=\"User-img\">\n                    </div>\n                    <div class=\"media_body\">\n                        <h6 class=\"name mb-0\">").concat(data.data[i]['first_name'], " ").concat(data.data[i]['last_name'], "</h6>\n                        <ul class=\"list-unstyled mb-0 consult\">\n                            <li>").concat(data.data[i]['industry'][0]['industry_name'], " ") + indusCount + "</li>\n                        </ul>\n                        <span class=\"userName font-md\">".concat(data.data[i]['username'], "</span>\n                    </div>\n                    <a href=\"mentee-details?id=").concat(btoa(data.data[i]['id']), "\" class=\"stretched-link\"></a>\n                </div>\n            </div>");
                  }
                }
      
                $("#menteeList").append(template);
              } else if (seachtype == 'mentor') {
                $("#mentorList").css("display", "block");
                $("#mentorList").empty();
      
                if (data.data.length == 0) {
                  $(".userSelect_list").css("min-height", "65px");
                  $("#mentorList").append('<div class="alert alert-danger w-100 mb-0" role="alert">No record found</div>');
                } else {
                  var template = '';
      
                  for (var i = 0; i < data.data.length; i++) {
                    var indusCount = '';
      
                    if (data.data[i]['industry'].length != 1) {
                      indusCount = "+" + (data.data[i]['industry'].length - 1);
                    }
      
                    template += " <div class=\"userSelect_item\">\n                <div class=\"media position-relative\">\n                    <div class=\"media_user\">\n                        <img src=\"".concat(data.data[i]['image_url'], "\" class=\"rounded-circle\" alt=\"User-img\">\n                    </div>\n                    <div class=\"media_body\">\n                        <h6 class=\"name mb-0\">").concat(data.data[i]['first_name'], " ").concat(data.data[i]['last_name'], "</h6>\n                        <ul class=\"list-unstyled mb-0 consult\">\n                            <li>").concat(data.data[i]['industry'][0]['industry_name'], " ") + indusCount + "</li>\n                        </ul>\n                        <span class=\"userName font-md\">".concat(data.data[i]['username'], "</span>\n                    </div>\n                    <a href=\"mentor-detail?id=").concat(btoa(data.data[i]['id']), "\" class=\"stretched-link\"></a>\n                </div>\n            </div>");
                  }
      
                  $("#mentorList").append(template);
                }
              } else if (seachtype == 'session') {
                $("#sessionList").css("display", "block");
                $("#sessionList").empty();
      
                if (data.data.length == 0) {
                  $(".userSelect_list").css("min-height", "65px");
                  $("#sessionList").append('<div class="alert alert-danger w-100 mb-0" role="alert">No record found</div>');
                } else {
                  $(".userSelect_list.session").css("min-height", "220px");
                  var template = '';
      
                  for (var i = 0; i < data.data.length; i++) {
                    template += " <div class=\"userSelect_item\">\n                <p class=\"font-lt\"> ".concat(data.data[i]['session_name'], "</p>\n                <div class=\"media position-relative\">\n                    <div class=\"media_user\">\n                        <img src=\"").concat(data.data[i]['from_user']['image_url'], "\" class=\"rounded-circle\" alt=\"User-img\">\n                    </div>\n                    <div class=\"media_body\">\n                        <h6 class=\"name mb-0\">").concat(data.data[i]['from_user']['first_name'], " ").concat(data.data[i]['from_user']['last_name'], "</h6>\n                        <ul class=\"list-unstyled mb-0 sessionDate d-flex flex-wrap\">\n                            <li class=\"date font-md\"><em class=\"icon-calendar\"></em>").concat(data.data[i]['getDateFormat'], "</li>\n                            <li class=\"time font-md\"><em class=\"icon-time\"></em> ").concat(data.data[i]['timeformateweb'], "</li>\n                        </ul>\n                    </div>\n                    <a href=\"session-details?id=").concat(btoa(data.data[i]['id']), "&search='session'\" class=\"stretched-link\"></a>\n                </div>\n            </div>");
                  }
      
                  $("#sessionList").append(template);
                }
              }
            }
          });
        }
      }); //input search
      
      $('.input-search').on('focus', function () {
        if ($(window).width() > 1200) {
          var searchValue = $('select.searchSelect option:selected').val();
        }
      
        if ($(window).width() < 1199) {
          var searchValue = $('select.mobilesearchSelect option:selected').val();
        } //  $(".userSelect_list").hide();
      
      
        $('#' + searchValue).show();
      });
      var body = document.querySelector("body");
      $(body).on('click', function () {
        $(".userSelect_list").fadeOut(300);
      }); // search bar toggle with conditionally
      
      window.SearchFunction = function SearchFunction(x) {
        if (x.matches) {
          // searchIcon toggle
          $('.searchIcon').click(function () {
            $("a").children('.search').toggleClass('icon-search icon-close');
            $(".navbar-search").toggle();
          });
          $(document).ready(function () {
            body = document.querySelector('body');
            $('.menu-icon').click(function () {
              $(body).toggleClass("menuShow");
              $(".navbar-search").hide();
              $("a").children('.search').removeClass('icon-search icon-close');
              $("a").children('.search').addClass('icon-search');
            });
          });
        }
      };
      
      var x = window.matchMedia("(max-width: 1199px)");
      SearchFunction(x);
      x.addListener(SearchFunction); //show video popup
      
      window.showVideo = function showVideo(vid) {
        $('#videolink').empty();
        $.ajax({
          url: 'getsinglesessiondata?id=' + vid,
          type: 'GET',
          dataType: 'json',
          success: function success(data) {
            var videoHtml = "<video width=\"100%\" height=\"100%\" controls=\"\" >\n            <source  type='video/mp4' src=\"" + baseUrl + "/" + data.file_name + "\" cl=\"videolink\">\n            </video>";
            $("#videolink").html(videoHtml);
          }
        });
        $('#videoPopup').modal('show');
      };
      
      $('body').tooltip({
        selector: '[data-toggle="tooltip"]'
      }); // aside toggle
      
      $('.asideToggler').click(function () {
        $(".customRow_left").toggleClass("open");
        $(body).toggleClass("overlay");
      });
      
      /***/ }),
      
      /***/ 26:
      /*!*************************************************!*\
        !*** multi ./resources/js/front/mentee/main.js ***!
        \*************************************************/
      /*! no static exports found */
      /***/ (function(module, exports, __webpack_require__) {
      
      module.exports = __webpack_require__(/*! C:\xampp\htdocs\open-office\resources\js\front\mentee\main.js */"./resources/js/front/mentee/main.js");
      
      
      /***/ })
      
      /******/ });