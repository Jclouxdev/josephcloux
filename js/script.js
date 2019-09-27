window.scroll(0,1)

$(window).scroll(function(){
    if ($(this).scrollTop() > 1) {
       $('.navbar').addClass('sticky');
       $('nav .navbar-nav a').addClass('black-text');
       $('#logo-white').addClass('hidden');
       $('#logo-black').removeClass('hidden');
    } else {
       $('.navbar').removeClass('sticky');
       $('nav .navbar-nav a').removeClass('black-text');
       $('#logo-black').addClass('hidden');
       $('#logo-white').removeClass('hidden');
    }
});

/*function slideIn() {
   $('.slide-in').addClass('slide-in-done');
}

function slideTop() {
   $('.slide-top').addClass('slide-top-done');
}

function progressColor() {
   $('.pink.progress-color').addClass('progress-color-done');
   setTimeout(progressColorTwo, 600)
   function progressColorTwo() {
      $('.orange.progress-color').addClass('progress-color-done');
   }
   setTimeout(progressColorTree, 1300)
   function progressColorTree() {
      $('.green.progress-color').addClass('progress-color-done');
   }
}*/

var waypointOne = new Waypoint({
  element: document.getElementById('about-me'),
  handler: function() {
    console.log('Basic waypoint triggered')
    $('.slide-in').addClass('slide-in-done');
    $('.slide-top').addClass('slide-top-done');
  }
})

var waypointTwo = new Waypoint({
  element: document.getElementById('competences'),
  handler: function() {
   $('.pink.progress-color').addClass('progress-color-done');
   setTimeout(progressColorTwo, 600)
   function progressColorTwo() {
      $('.orange.progress-color').addClass('progress-color-done');
   }
   setTimeout(progressColorTree, 1300)
   function progressColorTree() {
      $('.green.progress-color').addClass('progress-color-done');
   }
  }
})