let currentImageIndex = 0;
const images = [
  "./assets/Web-Engineering.jpg",
  "./assets/Advanced-Database.jpg",
  "./assets/Software-Engineering.jpg",
  "./assets/Embedded-Processors.jpg",
  "./assets/Distributed-Systems.jpg",
  "./assets/Software-Quality.jpg",
];
const moduleNames = [
  "Web Engineering",
  "Advanced Database",
  "Software Engineering",
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
