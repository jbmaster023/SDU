/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2016 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
!function(document,window,$){"use strict";var Site=window.Site;$(document).ready(function($){Site.run()}),$(document).ready(function($){var dynamicGauge=$("#exampleDynamicGauge").data("gauge");setInterval(function(){var random=Math.round(1e3*Math.random()),options={strokeColor:Config.colors("primary",500)};random>700?options.strokeColor=Config.colors("pink",500):random<300&&(options.strokeColor=Config.colors("green",500)),dynamicGauge.setOptions(options).set(random)},1500)}),$(document).ready(function($){var dynamicDonut=$("#exampleDynamicDonut").data("donut");setInterval(function(){var random=Math.round(1e3*Math.random()),options={strokeColor:Config.colors("primary",500)};random>700?options.strokeColor=Config.colors("pink",500):random<300&&(options.strokeColor=Config.colors("green",500)),dynamicDonut.setOptions(options).set(random)},1500)})}(document,window,jQuery);