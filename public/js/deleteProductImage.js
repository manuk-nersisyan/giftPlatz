/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/deleteProductImage.js":
/*!********************************************!*\
  !*** ./resources/js/deleteProductImage.js ***!
  \********************************************/
/***/ (() => {

eval("$(\".delete-product-image\").on('click', function () {\n  var deleteProductImageContainer = $(this).closest('.delete-product-image-container');\n  if ($(this).data('id')) {\n    $.ajaxSetup({\n      headers: {\n        'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n      }\n    });\n    $.ajax({\n      url: deleteProductImageUrl,\n      method: 'POST',\n      dataType: 'json',\n      data: {\n        id: $(this).data('id'),\n        product_id: $(this).data('product_id')\n      },\n      success: function success(res) {\n        deleteProductImageContainer.remove();\n      }\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwib24iLCJkZWxldGVQcm9kdWN0SW1hZ2VDb250YWluZXIiLCJjbG9zZXN0IiwiZGF0YSIsImFqYXhTZXR1cCIsImhlYWRlcnMiLCJhdHRyIiwiYWpheCIsInVybCIsImRlbGV0ZVByb2R1Y3RJbWFnZVVybCIsIm1ldGhvZCIsImRhdGFUeXBlIiwiaWQiLCJwcm9kdWN0X2lkIiwic3VjY2VzcyIsInJlcyIsInJlbW92ZSJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlUHJvZHVjdEltYWdlLmpzPzdjOWIiXSwic291cmNlc0NvbnRlbnQiOlsiJChcIi5kZWxldGUtcHJvZHVjdC1pbWFnZVwiKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgbGV0IGRlbGV0ZVByb2R1Y3RJbWFnZUNvbnRhaW5lciA9ICQodGhpcykuY2xvc2VzdCgnLmRlbGV0ZS1wcm9kdWN0LWltYWdlLWNvbnRhaW5lcicpXG4gICAgaWYgKCQodGhpcykuZGF0YSgnaWQnKSkge1xuICAgICAgICAkLmFqYXhTZXR1cCh7XG4gICAgICAgICAgICBoZWFkZXJzOiB7XG4gICAgICAgICAgICAgICAgJ1gtQ1NSRi1UT0tFTic6ICQoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JylcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB1cmw6IGRlbGV0ZVByb2R1Y3RJbWFnZVVybCxcbiAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICBpZDogJCh0aGlzKS5kYXRhKCdpZCcpLFxuICAgICAgICAgICAgICAgIHByb2R1Y3RfaWQ6ICQodGhpcykuZGF0YSgncHJvZHVjdF9pZCcpXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlcykge1xuICAgICAgICAgICAgICAgIGRlbGV0ZVByb2R1Y3RJbWFnZUNvbnRhaW5lci5yZW1vdmUoKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsdUJBQXVCLENBQUMsQ0FBQ0MsRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO0VBQy9DLElBQUlDLDJCQUEyQixHQUFHRixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNHLE9BQU8sQ0FBQyxpQ0FBaUMsQ0FBQztFQUNwRixJQUFJSCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNJLElBQUksQ0FBQyxJQUFJLENBQUMsRUFBRTtJQUNwQkosQ0FBQyxDQUFDSyxTQUFTLENBQUM7TUFDUkMsT0FBTyxFQUFFO1FBQ0wsY0FBYyxFQUFFTixDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ08sSUFBSSxDQUFDLFNBQVM7TUFDL0Q7SUFDSixDQUFDLENBQUM7SUFDRlAsQ0FBQyxDQUFDUSxJQUFJLENBQUM7TUFDSEMsR0FBRyxFQUFFQyxxQkFBcUI7TUFDMUJDLE1BQU0sRUFBRSxNQUFNO01BQ2RDLFFBQVEsRUFBRSxNQUFNO01BQ2hCUixJQUFJLEVBQUU7UUFDRlMsRUFBRSxFQUFFYixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNJLElBQUksQ0FBQyxJQUFJLENBQUM7UUFDdEJVLFVBQVUsRUFBRWQsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDSSxJQUFJLENBQUMsWUFBWTtNQUN6QyxDQUFDO01BQ0RXLE9BQU8sRUFBRSxTQUFBQSxRQUFVQyxHQUFHLEVBQUU7UUFDcEJkLDJCQUEyQixDQUFDZSxNQUFNLENBQUMsQ0FBQztNQUN4QztJQUNKLENBQUMsQ0FBQztFQUNOO0FBQ0osQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2RlbGV0ZVByb2R1Y3RJbWFnZS5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/deleteProductImage.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/deleteProductImage.js"]();
/******/ 	
/******/ })()
;