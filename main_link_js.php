<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/jquery.marquee.js"></script>
<script src="public/js/owl.carousel.min.js"></script>

 <!-- <script>
  function myFunction(x) {
    if (x.matches) { 
      //alert('For a Better View Please Roate your Mobile');
$('rt').show();
$('rt-n').hide();
    } else {
$('rt').hide();
$('rt-n').show();
    }
  }

  var x = window.matchMedia("(max-width: 767px) and (orientation : portrait) ")
  myFunction(x) 
  x.addListener(myFunction) 
</script> -->


<script type="text/javascript">
  $(function(){
  $('#vertivalscrollleft-one').marquee({direction:'vertical', delay:50, timing:30,});  
  $('#vertivalscrollleft-two').marquee({direction:'vertical', delay:80, timing:60});  
  $('#vertivalscrollleft-three').marquee({direction:'vertical', delay:50, timing:60});  
  $('#vertivalscrollleft-four').marquee({direction:'vertical', delay:80, timing:30});  
});
</script>


<script type="text/javascript">
  
  $(document).ready(function(){

         $('.slider-sec').owlCarousel({
            autoplay: true,     
           autoplayHoverPause: true,
            autoplayTimeout: 10,
            autoplaySpeed: 12000,
            fluidSpeed:true, 
            loop:true,
         
            dots:false,

           loop:true,
           margin:0,
          nav: false,
        
          dots:false,
         navText: [
           "<i class='fa fa-chevron-left'></i>",
           "<i class='fa fa-chevron-right'></i>"
         ],
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
         });

       });
         
</script>

<script>
function start() {
  /* Start application when in correct orientation */
}
async function rotate() {
  try {
    await screen.orientation.lock("landscape");
    start();
  } catch (err) {
    console.error(err);
  }
  const matchLandscape = matchMedia("(orientation: landscape)");
  if (matchLandscape.matches) return start();
  addEventListener("orientationchange", function listener() {
    matchLandscape.addListener(function mediaChange(e) {
      if (!e.matches) return;
      removeEventListener("orientationchange", listener);
      matchLandscape.removeListener(mediaChange);
      start();
    });
  });
  alert("To start, please rotate your screen to landscape.");
}
</script>
