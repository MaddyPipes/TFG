$(document).ready(function(){
    let activePJ = localStorage.getItem("selectedPJ");
    let pj = localStorage.getItem(activePJ);

    pj = JSON.parse(pj);
    console.log(pj);

    //HP
    $("#hp").text(pj.puntosGolpe);
    if(localStorage.getItem("actualHP")){
        $("#actualHP").val(localStorage.getItem("actualHP"));
    }else{
        $("#actualHP").val(pj.puntosGolpe);
    }
    $("#actualHP").on("change", () =>{{
        localStorage.setItem("actualHP", $("#actualHP").val());
    }})

    //CA
    $("#ca").text(pj.claseArmadura);

    //Inspiración
})