"use strict";

$(document).ready(function() {
  console.log("ready");
  $(".toggle-menu").click(function(e) {
    e.preventDefault();
    var iconOpen = $(this).children("i.fa-bars");
    var iconClose = $(this).children("i.fa-times");
    var hiddenMenu = $(".hidden-menu");
    iconOpen.toggleClass("now-active");
    iconClose.toggleClass("now-active");
    hiddenMenu.toggleClass("hidden");
  });
});

$(window).on("resize", function() {
  console.clear();
  console.group("Dimensions");
  console.log("width: ", width());
  console.log("height: ", height());
  console.groupEnd();
});

var width = function width() {
  return window.innerWidth > 0 ? window.innerWidth : screen.width;
};
var height = function height() {
  return window.screen.availHeight > 0
    ? window.screen.availHeight
    : window.screen.height;
};
