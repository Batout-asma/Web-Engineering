document.getElementById("contactForm").addEventListener("submit", function (event) {
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
  
    if (!email || !phone) {
      alert("Email and phone are required!");
      event.preventDefault();
    }
  });
  