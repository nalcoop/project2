

 //fix code for hamburger menu

 //write code for carousel photos for content pages with heavy photos

 document.addEventListener("DOMContentLoaded",function(){
  const hamburger= document.getElementById("hamburger");
  const layeredNav = document.querySelector(".layeredNav");
  const secondLayer= document.querySelectorAll(".secondLayer");


  hamburger.addEventListener("click",function(){
      if(layeredNav.style.display === "none" || layeredNav.style.display ==="")
         layeredNav.style.display="block";
      else{
          layeredNav.style.display="none";
      }
  });

  document.querySelectorAll("layerContent > a").forEach((toggle) => {
      toggle.addEventListener("click",function(event){
          event.preventDefault();
          if(layerContent !==null ){
            const layerContent= this.nextElementSibling;
            if(layerContent && layerContent.classList.contains("layerContent"))
               if(layerContent.style.display==="flex"){
                    layerContent.style.display="none";
               }else{
                    layerContent.style.display="flex";
               }
          }
       
      });

      
  });

  window.addEventListener("resize",function(){
      if(this.innerWidth>1000){
          layeredNav.style.display="";
          secondLayer.forEach(layerContent => layerContent.style.display="");
      }
  });
});




 let currentSlide = 0;

 function changePhoto(index) {
   const slides = document.querySelectorAll(".carousel-img img");
 
   if(slides.length<0){
    return false;
   }
   if (index >= slides.length) {
     currentSlide = 0;
   } else if (index < 0) {
     currentSlide = slides.length - 1;
   } else {
     currentSlide = index;
   }
 
   slides.forEach((slide, i) => {
     slide.classList.remove("active");
     if (i === currentSlide) {
       slide.classList.add("active");
     }
   });
 }
 
 function changeSlide(direction) {
   changePhoto(currentSlide + direction);
 }
 
 changePhoto(currentSlide);

var newImage = new Array();
var captionArray= [document.getElementById('walters'),document.getElementById('bma'), document.getElementById('blackInWaxs'), document.getElementById('rfl')];

function init(){
  var numImg= document.getElementById('museums').getElementsByClassName('museums').length;
  for (var i=1; i<=numImg; i++){
    newImage[i]= new Image();
    newImage[i].src= "assets/images/museums" + i + ".jpg";
  }
  document.getElementById('museums').innerHTML= captionArray[0];

  function changeMe(dom){
    var start= dom.src.index0f('/musuems')+3;
    var end= dom.src.index0f('.jpeg');
    var num= dom.src.substring(start,end);
    console.log(num);
    
    var capNum= [parseInt(num)-1];
    console.log(capNum);
    document.getElementById('museums').innerHTML= captionArray[capNum];

  }
}