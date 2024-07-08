lightGallery(document.getElementById("lightgallery"), {
  plugins: [lgZoom, lgThumbnail],
  thumbnail: true,
  download: false,
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var notification = document.getElementById("notification");
    if (notification) {
      notification.style.transition = "opacity 0.5s ease";
      notification.style.opacity = "0";
      setTimeout(function () {
        notification.remove();
      }, 500);
    }
  }, 5000);
});

const packages = document.querySelectorAll(".package");
const modalButtons = document.querySelectorAll(".modal-button");

packages.forEach((p) => {
  const button = p.querySelector(".modal-btn");
  const cancel = p.querySelector(".cancel-btn");
  const close = p.querySelector(".close-modal");
  const modal = p.querySelector(".modal");
  button.addEventListener("click", () => modal.classList.remove("hidden"));
  cancel.addEventListener("click", () => modal.classList.add("hidden"));
  close.addEventListener("click", () => modal.classList.add("hidden"));
});

modalButtons.forEach((button) => {
  const modal = document.querySelector(".booking-modal");
  const close = modal.querySelector(".close-modal");
  const cancel = modal.querySelector(".cancel-btn");
  button.addEventListener("click", () => modal.classList.remove("hidden"));
  close.addEventListener("click", () => modal.classList.add("hidden"));
  cancel.addEventListener("click", () => modal.classList.add("hidden"));
});
