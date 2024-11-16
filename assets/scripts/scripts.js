

//fix code for hamburger menu

//write code for carousel photos for content pages with heavy photos


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


let currentSlides ={
    "carousel-aquarium":0,
    "carousel-science" :0
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
    if(i=== currentSlides[carouselId])
        slide.classList.add("active");
  
  });

}




var captionArray = [
  document.getElementById('walters'), 
  document.getElementById('bma'), 
  document.getElementById('blackInWaxs'), 
  document.getElementById('rfl')];

const museumMap = {
  'assets/img/museum1.jpg': "walters",
  'assets/img/museum2.jpeg': "bma",
  'assets/img/museum3.jpeg': "blacksInWaxs",
  'assets/img/museum4.jpeg': "rfl"
};
function init() {
  const images = document.querySelectorAll('.museums')
  images.forEach(img => {
    img.addEventListener("click", function () {
      changeMe(this);
    })
  });

  captionArray.forEach(caption => {
    if(caption){
      caption.style.display="none";
    }
   
  });
}



function changeMe(dom) {
  const imageSource = dom.src;
  const target = museumMap[imageSource].split('/').slice(-2).join('/');
  if(!target){return false};

  captionArray.forEach(caption => {
    caption.style.display="none";
  });

  
  const targetCaption = document.getElementById(target);
  if(targetCaption){
    targetCaption.style.display="block";
  }
}

document.addEventListener("DOMContentLoaded",init);

