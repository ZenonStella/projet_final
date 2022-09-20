let inputCgu = document.getElementById('cgu');
let btnSteps1 = document.getElementById('nextSteps1');

inputCgu.addEventListener("change", function () {
    if ( inputCgu.checked == true) {
        btnSteps1.classList.remove("disabled");
    }else {
        btnSteps1.classList.add("disabled");
    }
})