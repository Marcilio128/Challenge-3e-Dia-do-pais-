function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
    modal.classList.add('show');
        modal.addEventListener('click', (e) => {
            if(e.target.id == modalId || e.target.id == 'close' ){
                modal.classList.remove('show');
            
        }
    });
}}

const open = document.querySelector("#open");
open.addEventListener('click', () => openModal('modal-content'));

let time = 3000,
    currentImageIndex = 0,
    images = document
    .querySelectorAll("#slide img")
    max = images.length;

function nextImage() {

    images[currentImageIndex]
        .classList.remove("slideOne")

    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0

    images[currentImageIndex]
        .classList.add("slideOne")
}

function start() {
    setInterval(() => {
        // troca de image
        nextImage()
    }, time)
}

window.addEventListener("load", start)