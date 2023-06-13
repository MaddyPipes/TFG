$(document).ready(function(){
    let activePJ = localStorage.getItem("selectedPJ");
    let pj = localStorage.getItem(activePJ);

    pj = JSON.parse(pj);
    console.log(pj);
    $("#hp").text(pj.puntosGolpe);
})