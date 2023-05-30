function getActiveItemAdvanceLine(headers) {
    let x = 0;
    headers.forEach((element, index) => {
        if (element.classList.contains("active-linea-avance-govco")){
            x = index;
        }
    });
    return x;
}

function updateProgressAdvanceLine(headers, indexActive, elementParent, wh) {
    // porcentajes establecidos
    const porcent = [15, 50, 80, 100];
    const elementActive = headers[indexActive];
    const elementIndicator = elementActive.querySelector('.indicator-linea-avance-govco');
    const attributePorcentage = elementIndicator.getAttribute('percentage');
    const percentage = attributePorcentage ? attributePorcentage : porcent[indexActive];
    const elementProgress = elementParent.querySelector('.progress-bar');
    elementProgress.style[wh] = percentage + "%";
    elementProgress.setAttribute('aria-valuenow', percentage);
}

function nextItemAdvanceLineHorizontal(e) {
    const bodyActive = e.target.closest('.body-linea-avance-govco');
    const idParent = bodyActive.getAttribute('data-la-parent');
    const elementParent = document.querySelector(idParent);
    const headers = elementParent.querySelectorAll('.header-linea-avance-govco');
    const bodys = elementParent.querySelectorAll('.body-linea-avance-govco');

    const indexActive = getActiveItemAdvanceLine(headers);
    headers[indexActive].classList.remove('active-linea-avance-govco');
    headers[indexActive].classList.add('inactive-linea-avance-govco');
    headers[indexActive + 1].classList.add('active-linea-avance-govco');
    bodys[indexActive].classList.remove('active-linea-avance-govco');
    bodys[indexActive + 1].classList.add('active-linea-avance-govco');

    updateProgressAdvanceLine(headers, indexActive + 1, elementParent, 'width');
}
