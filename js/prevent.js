// JavaScript Document
$(window).on("navigate", function (event, data) {
	  var direction = data.state.direction;
	  if (direction == 'back') {
		window.location.href='http://google.com';
		event.preventDefault();
	  }
	});