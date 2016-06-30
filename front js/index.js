$(document).ready(function () {
  var hue = Math.floor((Math.random() * 360) + 1);
  $('<style>' +
    '#logo_animated.animated polygon { fill: hsl(' + hue + ',75%,50%); }' +
    '#logo_animated.animated polygon.light { fill: hsla(' + hue + ',75%,50%,0.6); }' +
    '#logo_animated.animated polygon.dark { fill: hsla(' + hue + ',75%,50%,0.8); }' +
    '</style>').appendTo('head');
});