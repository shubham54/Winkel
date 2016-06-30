// Handy functions
var randomNumber = function(min, max) {
  return Math.floor(Math.random() * (1 + max - min) + min);
};

var addBubbles = function(amount) {
  var tl = new TimelineLite();
  var bubble = document.querySelector('#bubble');
  var i;

  for (i = 0; i <= amount; i += 1) {
    var newBubble = document.createElement('svg');
    var speed = randomNumber(20, 100);
    var size = randomNumber(2, 50)

    newBubble = bubble.cloneNode(true);
    newBubble.id = 'bubble-' + i;

    document.body.appendChild(newBubble);

    tl.set(newBubble, {
      opacity: 1,
      y: 500,
      x: randomNumber(
        -window.innerWidth / 2,
        window.innerWidth / 2
      )
    }, 0);

    tl.to(newBubble, speed, {
      y: -1000,
      x: randomNumber(
        -window.innerWidth / 2,
        window.innerWidth / 2
      ),
      repeatDelay: randomNumber(0, 10),
      repeat: 500,
      width: size,
      height: size
    }, randomNumber(1, 20))
  };
};
addBubbles(20);

var animateJellyfish = function() {
  var jellyfishTl = new TimelineLite();
  var jellyfish = document.querySelector('#ujelly');
  var jellyfishAnatomy = document.querySelector('#jellyfish-anatomy');

  jellyfishTl.to(jellyfish, 10, {
    y: 50,
    ease: Power3.easeInOut,
    repeat: -1,
    yoyo: true
  });

  TweenMax.from(jellyfishAnatomy, 8, {
    opacity: 0,
    repeat: -1,
    yoyo: true
  });
};
animateJellyfish();