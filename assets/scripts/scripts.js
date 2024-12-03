


// hamburger code
const hamburger = document.getElementById("hamburger");
const layeredNav = document.querySelector(".layeredNav");
const secondLayer = document.querySelectorAll(".secondLayer");


hamburger.addEventListener("click", function () {
  if (layeredNav.style.display === "none" || layeredNav.style.display === "")
    layeredNav.style.display = "block";
  else {
    layeredNav.style.display = "none";
  }
});

document.querySelectorAll("layerContent > a").forEach((toggle) => {
  toggle.addEventListener("click", function (event) {
    event.preventDefault();
    if (layerContent !== null) {
      const layerContent = this.nextElementSibling;
      if (layerContent && layerContent.classList.contains("layerContent"))
        if (layerContent.style.display === "flex") {
          layerContent.style.display = "none";
        } else {
          layerContent.style.display = "flex";
        }
    }

  });


});

window.addEventListener("resize", function () {
  if (this.innerWidth > 1000) {
    layeredNav.style.display = "";
    secondLayer.forEach(layerContent => layerContent.style.display = "");
  }
});

//carousel function code

let currentSlides ={
    "carousel-aquarium":0,
    "carousel-science" :0,
    "carousel-museum" :0,
    "carousel-ravens" :0,
    "carousel-orioles" :0
};

function changeSlide(step, carouselId) {
  const carousel = document.getElementById(carouselId);
  const slides = carousel.querySelectorAll(".carousel-img img");
  const totalSlides= slides.length;
  currentSlides[carouselId] += step;

  if(currentSlides[carouselId] >= totalSlides){
    currentSlides[carouselId]=0;
  } else if(currentSlides[carouselId] < 0){
    currentSlides[carouselId]=totalSlides -1;
  } 

  slides.forEach((slide,i)=>{
    slide.classList.remove("active");
    if(i=== currentSlides[carouselId]){
      slide.classList.add("active");
    }
  });

  updateCaptions(carouselId,currentSlides[carouselId]);
}

function updateCaptions(carouselId,slideIndex){
  const carousel= document.getElementById(carouselId);
  const captions= carousel.querySelectorAll(".caption");


  captions.forEach((caption,index)=>{
  if(index=== slideIndex){
    caption.style.display="block";
  } else{
    caption.style.display="none";
  }
});
}

function popUp(){
  var popup= document.getElementById("myPopup");
  popup.classList.toggle("show");
}











