$(document).ready(function(){
    let activePJ = localStorage.getItem("selectedPJ");
    let pj = localStorage.getItem(activePJ);

    pj = JSON.parse(pj);
    console.log(pj);

    //HP
    $("#hp").text(pj.puntosGolpe);
    $("#actualHP").val(pj.puntosGolpe);
})