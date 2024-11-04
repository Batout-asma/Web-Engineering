let currentImageIndex = 0;
const images = [
  "Web-Engineering.jpg",
  "Advanced-Database.jpg",
  "Software-Engineering.jpg",
  "Embedded-Processors.jpg",
  "Distributed-Systems.jpg",
  "Software-Quality.jpg",
];
const moduleNames = [
  "Web Engineering",
  "Advanced Database",
  "SoftwareEngineering",
  "Embedded Processors",
  "Distributed Systems",
  "Software Quality",
];

function updateSlideshow() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  document.getElementById("images").src = images[currentImageIndex];
  document.getElementById("module-name").textContent =
    moduleNames[currentImageIndex];
}

setInterval(updateSlideshow, 3000);
