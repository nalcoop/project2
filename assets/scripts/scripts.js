


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




//google maps w json pins attempts
//add API key so functional
// let map;
// async function initMap(){


//   const {Map} = await google.maps.importLibrary("maps");
//   const {AdvancedMarkerElement} = await google.maps.importLibrary("marker");
//   const baltimore={lat:39.29144, lng: -76.61493};
//   const map= new google.maps.Map(document.getElementById("map"), {
//     zoom:4,
//     center: baltimore,
//     mapId: "BALTIMORE"
//   });

//   const rfl=new AdvancedMarkerElement({ map, position: {lat:39.28748, lng:-76.60384}, });
//   const bma=({ map, position:{lat:39.32616, lng:-76.61934},});
//   const wam=({map, position: {lat:39.29642, lng:-76.61649},});
//   const bwm=({map, position: {lat:39.31176, lng:-76.59682},});
//   const nataq=({map, position: {lat:39.28539, lng:-76.60839},});
//   const msc=({map, position:{lat:39.28141, lng:-76.61191},});
//   const amzglz=({map, position:{lat:39.36841, lng:-76.65038},});
//   const mcfglass=({map, position:{lat:39.2883, lng:-76.53112},});
//   const twosev=({map, position:{lat:39.31067, lng:-76.61751},});
// }
// initMap();






