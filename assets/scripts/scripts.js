

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





let currentSlide = 0;

function changePhoto(index) {
  const slides = document.querySelectorAll(".carousel-img img");

  if (slides.length < 0) {
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
var captionArray = [document.getElementById('walters'), document.getElementById('bma'), document.getElementById('blackInWaxs'), document.getElementById('rfl')];
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
    caption.style.display="none";
  });
}



function changeMe(dom) {
  const imageSource = dom.src;
  const target = museumMap[imageSource];
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

