/* POP UP JQUERY */
$(document).ready(function() {
    $('#btn-click').click() 
  })


/* CODE JS PARTICLE */
particlesJS("particles-js", {"particles":{"number":{"value":82,"density":{"enable":true,"value_area":800}},"color":{"value":"#e3118d"},"shape":{"type":"circle","stroke":{"width":2,"color":"#e3118d"},"polygon":{"nb_sides":4},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.9845592296424363,"random":false,"anim":{"enable":false,"speed":1.945872318344712,"opacity_min":0.1,"sync":false}},"size":{"value":5,"random":true,"anim":{"enable":false,"speed":279.71914576205234,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":160.0909316491766,"color":"#ffffff","opacity":0.3441955030457297,"width":1.1206365215442364},"move":{"enable":true,"speed":6.403637265967064,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});



/* CODE TEXTILATE */
$( function ( ) { 
    $('.tx').textillate({
// //     /* voir plus tard ce que c'est
        minDisplayTime: 2000,  
  
// //     // temps avant que l'animation se lance
        initialDelay: 500, // initialDelay: 2000, avec pop up !
  
// //     // obligé pour que l'animation se lance directement
        autoStart: true,
  
// //     // in animation settings
        in: {
// //         // set the effect name
        effect: 'flipInX',
  
// //       // temps les lettres apparaissent petit a petit
        delayScale: 2,

// //       // pour que la couleur s'affiche directement
        color: true,
  
    // set the delay between each character
      // delay: 50,
  
// reverse the character sequence
// (note that reverse doesn't make sense with sync = true)
     sequence: true,
  
     // callback that executes once the animation has finished
      callback: function () {}
  },
  
// //  // out animation settings.
// // //  out: { l'animation OUT fonctionne mais je ne  veux pas que ca fasse une boucle a l'infini
// // //   effect: 'flipOutY',
// // //   delayScale: 1.5,
// // //   delay: 50,
// // //   shuffle: true,
// // //   callback: function () {}
// // // },
// // // loop: true,
// // // // callback that executes once textillate has finished
// // // callback: function () {},

// // // set the type of token to animate (available types: 'char' and 'word')
type: 'char'
});
});

