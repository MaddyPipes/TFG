$(document).ready(function () {
    let activePJ = localStorage.getItem("selectedPJ");
    let pj = localStorage.getItem(activePJ);

    pj = JSON.parse(pj);
    console.log(pj);

    //HP
    $("#hp").text(pj.puntosGolpe);
    if (pj.actualHP) {
        $("#actualHP").val(pj.actualHP);
    } else {
        $("#actualHP").val(pj.puntosGolpe);
    }
    $("#actualHP").on("change", () => {
        {
            pj.actualHP = $("#actualHP").val();
            JSON.stringify(pj);
            localStorage.setItem(activePJ, pj);
        }
    })

    //CA
    $("#ca").text(pj.claseArmadura);

    //Inspiración
    $("#insp").on("click", () => {
        if ($("#insp").text() == 1) {
            $("#insp").text(0);
        } else {
            $("#insp").text(1);
        }
    })

    //Competencia

    let comp;

    switch (parseInt(pj.nivel)) {
        case 1:
        case 2:
        case 3:
        case 4:
            comp = 2;
            break;
        case 5:
        case 6:
        case 7:
        case 8:
            comp = 3;
            break;
        case 9:
        case 10:
        case 11:
        case 12:
            comp = 4;
            break;
        case 13:
        case 14:
        case 15:
        case 16:
            comp = 5;
            break;
        case 17:
        case 18:
        case 19:
        case 20:
            comp = 6;
            break;
        default:
            comp = 0;
            break;
    }

    $("#comp").text(comp);

    //Ilustración

    $("#ilust").attr("src", pj.ilustracion);
    $("#ilust2").attr("src", pj.ilustracion);

    //
})