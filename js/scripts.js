// Apply saved theme on page load
document.addEventListener("DOMContentLoaded", function () {

  const savedTheme = localStorage.getItem("theme");

  if (savedTheme === "dark") {
    document.body.classList.add("dark-mode");
  }

  updateButtonText();

});

// Toggle theme
function toggleTheme() {

  document.body.classList.toggle("dark-mode");

  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }

  updateButtonText();

}

// Update button text
function updateButtonText() {

  const button = document.getElementById("themeToggle");

  if (!button) return;

  if (document.body.classList.contains("dark-mode")) {
    button.textContent = "Switch to Light Mode";
  } else {
    button.textContent = "Switch to Dark Mode";
  }

}