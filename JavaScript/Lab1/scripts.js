let isDark = false;
let isEnglish = true;

function toggleTheme() {
  document.body.classList.toggle("dark");
  const themeBtn = document.getElementById("theme-btn");
  themeBtn.textContent = isDark ? "🌞" : "🌜";
  isDark = !isDark;
}

function toggleLanguage() {
  const title = document.getElementById("title");
  const paragraph = document.getElementById("paragraph");

  if (isEnglish) {
    title.textContent = "Bienvenue";
    paragraph.textContent = "Ceci est notre Laboratoire simple.";
  } else {
    title.textContent = "Welcome";
    paragraph.textContent = "This is our simple Lab.";
  }
  isEnglish = !isEnglish;
}
