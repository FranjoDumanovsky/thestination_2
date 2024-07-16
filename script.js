const menuBtn = document.getElementById("hamburger-menu");
const navLinks = document.getElementById("nav-links");
const hero = document.querySelector(".hero");

menuBtn.addEventListener("click", () => {
  if (navLinks.classList.contains("open")) {
    navLinks.classList.remove("open");
    navLinks.classList.add("close");
  } else {
    navLinks.classList.remove("close");
    navLinks.classList.add("open");
  }
  menuBtn.classList.toggle("open");
  hero.classList.toggle("blur");
});

// Form validation
document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    // Clear previous error messages
    document.getElementById("nameError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("messageError").innerText = "";
    document.getElementById("name").classList.remove("input-error");
    document.getElementById("email").classList.remove("input-error");
    document.getElementById("message").classList.remove("input-error");

    let valid = true;

    // Validate name
    const name = document.getElementById("name").value;
    if (name.trim() === "") {
      document.getElementById("nameError").innerText = "Name is required.";
      document.getElementById("name").classList.add("input-error");
      valid = false;
    }

    // Validate email
    const email = document.getElementById("email").value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email.trim() === "") {
      document.getElementById("emailError").innerText = "Email is required.";
      document.getElementById("email").classList.add("input-error");
      valid = false;
    } else if (!emailPattern.test(email)) {
      document.getElementById("emailError").innerText = "Invalid email format.";
      document.getElementById("email").classList.add("input-error");
      valid = false;
    }

    // Validate message
    const message = document.getElementById("message").value;
    if (message.trim() === "") {
      document.getElementById("messageError").innerText =
        "Message is required.";
      document.getElementById("message").classList.add("input-error");
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });
