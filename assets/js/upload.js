
// JS permettant d'avoir un apercu de l'image lors du choix de l'input
let inputPicture = document.getElementById('picture')
inputPicture.addEventListener("change", function () {
    let oFReader = new FileReader(); // on créé un nouvel objet FileReader
    oFReader.readAsDataURL(this.files[0]);
    oFReader.onload = function (oFREvent) {
        let imgPreview = document.getElementById('imgPreview');
        console.log(oFREvent.target.result)
        imgPreview.setAttribute('src', oFREvent.target.result);
    };
})
