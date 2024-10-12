const slider = document.querySelector(".image-slider");
const images = document.querySelectorAll(".image-slider img");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let currentIndex = 0;
const visibleImages = 3;
const imageWidth = images[0].clientWidth + 20; // Image width + 10px margin-right

// Move to the next set of images
function moveNext() {
  if (currentIndex < images.length - visibleImages) {
    currentIndex++;
    updateSlider();
  }
}

// Move to the previous set of images
function movePrev() {
  if (currentIndex > 0) {
    currentIndex--;
    updateSlider();
  }
}

// Update the slider position
function updateSlider() {
  slider.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
  // Disable buttons if at the start or end
  prevBtn.disabled = currentIndex === 0;
  nextBtn.disabled = currentIndex === images.length - visibleImages;
}

// Attach event listeners to buttons
nextBtn.addEventListener("click", moveNext);
prevBtn.addEventListener("click", movePrev);

// Initialize button states
updateSlider();
