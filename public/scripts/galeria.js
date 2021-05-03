this.addEventListener("DOMContentLoaded", () =>{
    const panels = document.querySelectorAll('.panel');

    panels.forEach((panel)  =>{
        panel.addEventListener('click', () => {
            removeActivoClass();
            panel.classList.add('activo');
        });
    });

    function removeActivoClass() {
        panels.forEach((panel)  => panel.classList.remove('activo'));
    }
})