//Modal Funcional
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
//Modal Funcional
