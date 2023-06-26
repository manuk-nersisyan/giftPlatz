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

eval("$(\".delete-product-image\").on('click', function () {\n  var deleteProductImageContainer = $(this).closest('.delete-product-image-container');\n  if ($(this).data('id')) {\n    $.ajaxSetup({\n      headers: {\n        'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n      }\n    });\n    $.ajax({\n      url: deleteProductImageUrl,\n      method: 'POST',\n      dataType: 'json',\n      data: {\n        id: $(this).data('id'),\n        product_id: $(this).data('product_id')\n      },\n      success: function success(res) {\n        deleteProductImageContainer.remove();\n      }\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGVsZXRlUHJvZHVjdEltYWdlLmpzIiwibmFtZXMiOlsiJCIsIm9uIiwiZGVsZXRlUHJvZHVjdEltYWdlQ29udGFpbmVyIiwiY2xvc2VzdCIsImRhdGEiLCJhamF4U2V0dXAiLCJoZWFkZXJzIiwiYXR0ciIsImFqYXgiLCJ1cmwiLCJkZWxldGVQcm9kdWN0SW1hZ2VVcmwiLCJtZXRob2QiLCJkYXRhVHlwZSIsImlkIiwicHJvZHVjdF9pZCIsInN1Y2Nlc3MiLCJyZXMiLCJyZW1vdmUiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9kZWxldGVQcm9kdWN0SW1hZ2UuanM/N2M5YiJdLCJzb3VyY2VzQ29udGVudCI6WyIkKFwiLmRlbGV0ZS1wcm9kdWN0LWltYWdlXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICBsZXQgZGVsZXRlUHJvZHVjdEltYWdlQ29udGFpbmVyID0gJCh0aGlzKS5jbG9zZXN0KCcuZGVsZXRlLXByb2R1Y3QtaW1hZ2UtY29udGFpbmVyJylcbiAgICBpZiAoJCh0aGlzKS5kYXRhKCdpZCcpKSB7XG4gICAgICAgICQuYWpheFNldHVwKHtcbiAgICAgICAgICAgIGhlYWRlcnM6IHtcbiAgICAgICAgICAgICAgICAnWC1DU1JGLVRPS0VOJzogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHVybDogZGVsZXRlUHJvZHVjdEltYWdlVXJsLFxuICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgICAgIGlkOiAkKHRoaXMpLmRhdGEoJ2lkJyksXG4gICAgICAgICAgICAgICAgcHJvZHVjdF9pZDogJCh0aGlzKS5kYXRhKCdwcm9kdWN0X2lkJylcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzKSB7XG4gICAgICAgICAgICAgICAgZGVsZXRlUHJvZHVjdEltYWdlQ29udGFpbmVyLnJlbW92ZSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxFQUFFLENBQUMsT0FBTyxFQUFFLFlBQVk7RUFDL0MsSUFBSUMsMkJBQTJCLEdBQUdGLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0csT0FBTyxDQUFDLGlDQUFpQyxDQUFDO0VBQ3BGLElBQUlILENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0ksSUFBSSxDQUFDLElBQUksQ0FBQyxFQUFFO0lBQ3BCSixDQUFDLENBQUNLLFNBQVMsQ0FBQztNQUNSQyxPQUFPLEVBQUU7UUFDTCxjQUFjLEVBQUVOLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDTyxJQUFJLENBQUMsU0FBUztNQUMvRDtJQUNKLENBQUMsQ0FBQztJQUNGUCxDQUFDLENBQUNRLElBQUksQ0FBQztNQUNIQyxHQUFHLEVBQUVDLHFCQUFxQjtNQUMxQkMsTUFBTSxFQUFFLE1BQU07TUFDZEMsUUFBUSxFQUFFLE1BQU07TUFDaEJSLElBQUksRUFBRTtRQUNGUyxFQUFFLEVBQUViLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0ksSUFBSSxDQUFDLElBQUksQ0FBQztRQUN0QlUsVUFBVSxFQUFFZCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNJLElBQUksQ0FBQyxZQUFZO01BQ3pDLENBQUM7TUFDRFcsT0FBTyxFQUFFLFNBQUFBLFFBQVVDLEdBQUcsRUFBRTtRQUNwQmQsMkJBQTJCLENBQUNlLE1BQU0sQ0FBQyxDQUFDO01BQ3hDO0lBQ0osQ0FBQyxDQUFDO0VBQ047QUFDSixDQUFDLENBQUMifQ==\n//# sourceURL=webpack-internal:///./resources/js/deleteProductImage.js\n");

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