const body = document.querySelector("body");
const modal = document.querySelector(".modal1");
const modalButton = document.querySelectorAll(".modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
let isOpened = true;
var i=0;
const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";

};

const closeModal = () => {
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
  modal.reset()

};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});
while(i<modalButton.length){
modalButton[i].addEventListener("click", openModal);
i++;
}
closeButton.addEventListener("click", closeModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};
