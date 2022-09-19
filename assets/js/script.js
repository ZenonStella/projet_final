let inputCgu = document.getElementById('cgu');
let cgu = document.getElementById('cgu').checked;
let btnSteps1 = document.getElementById('nextSteps1');
inputCgu.addEventListener("change", function () {
    if (cgu == true) {
        btnSteps1.classList.remove("disabled");
    }else {
        btnSteps1.classList.add("disabled");
    }
})