/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2016 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
!function(document,window,$){"use strict";var Site=window.Site;$(document).ready(function($){Site.run()}),function(){$("#exampleContext").contextmenu({target:"#exampleContextMenu",before:function(e){return e.preventDefault(),"SPAN"==e.target.tagName?(e.preventDefault(),this.closemenu(),!1):(this.getMenu().find("li").eq(4).find("a").html("This was dynamically changed"),!0)}})}(),function(){$("#exampleContext2").contextmenu({target:"#exampleContextMenu",onItem:function(context,e){alert($.trim($(e.target).text()))}}),$("#exampleContextMenu").on("show.bs.context",function(e){}),$("#exampleContextMenu").on("shown.bs.context",function(e){}),$("#exampleContextMenu").on("hide.bs.context",function(e){}),$("#exampleContextMenu").on("hidden.bs.context",function(e){})}()}(document,window,jQuery);