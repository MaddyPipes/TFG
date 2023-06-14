import DiceBox from "https://unpkg.com/@3d-dice/dice-box@1.0.8/dist/dice-box.es.min.js";

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

    //Stats

    let fuerzaBonif = obtenerBonificador(parseInt(pj.fuerza));
    let constitucionBonif = obtenerBonificador(parseInt(pj.constitucion));
    let destrezaBonif = obtenerBonificador(parseInt(pj.destreza));
    let inteligenciaBonif = obtenerBonificador(parseInt(pj.inteligencia));
    let sabiduriaBonif = obtenerBonificador(parseInt(pj.sabiduria));
    let carismaBonif = obtenerBonificador(parseInt(pj.carisma));


    //Ilustración

    $("#ilust").attr("src", pj.ilustracion);
    $("#ilust2").attr("src", pj.ilustracion);

    //Tiradas

    let bonusStat = fuerzaBonif;
    let bonusPB = comp;
    let roll, totalDice, totalResult;

    $("#tipoTirada").on("change", () => {
        switch ($("#tipoTirada").val()) {
            case "ataqueArmado":
                bonusPB = comp;
                bonusStat = fuerzaBonif;
                break;
            case "ataqueSutil":
                bonusPB = comp;
                bonusStat = destrezaBonif;
                break;
            case "ataqueDistancia":
                bonusPB = comp;
                bonusStat = destrezaBonif;
                break;
            case "salvacionFuerza":
                if (pj.salvaciones.includes("Fuerza")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = fuerzaBonif;
                break;
            case "salvacionConstitucion":
                if (pj.salvaciones.includes("Constitucion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = constitucionBonif;
                break;
            case "salvacionDestreza":
                if (pj.salvaciones.includes("Destreza")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = destrezaBonif;
                break;
            case "salvacionInteligencia":
                if (pj.salvaciones.includes("Inteligencia")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif;
                break;
            case "salvacionSabiduria":
                if (pj.salvaciones.includes("Sabiduria")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            case "salvacionCarisma":
                if (pj.salvaciones.includes("Carisma")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = carismaBonifBonif;
                break;
            case "dmgFue":
                bonusPB = 0;
                bonusStat = fuerzaBonif;
                break;
            case "dmgDes":
                bonusPB = 0;
                bonusStat = destrezaBonif;
                break;
            case "dmgInt":
                bonusPB = 0;
                bonusStat = inteligenciaBonif;
                break;
            case "dmgSab":
                bonusPB = 0;
                bonusStat = sabiduriaBonif;
                break;
            case "dmgCar":
                bonusPB = 0;
                bonusStat = carismaBonif;
                break;
            case "acrobacia":
                if (pj.competencias.includes("Acrobacia")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = destrezaBonif;
                break;
            case "arcano":
                if (pj.competencias.includes("Arcanos")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif;
                break;
            case "atletismo":
                if (pj.competencias.includes("Atletismo")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = fuerzaBonif;
                break;
            case "engaño":
                if (pj.competencias.includes("Engaño")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = carismaBonif;
                break;
            case "historia":
                if (pj.competencias.includes("Historia")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif;
                break;
            case "interpretacion":
                if (pj.competencias.includes("Interpretacion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = carismaBonif;
                break;
            case "intimidacion":
                if (pj.competencias.includes("Intimidacion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = carismaBonif;
                break;
            case "investigacion":
                if (pj.competencias.includes("Investigacion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif;
                break;
            case "prestidigitacion":
                if (pj.competencias.includes("Prestidigitacion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = destrezaBonif;
                break;
            case "medicina":
                if (pj.competencias.includes("Medicina")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            case "naturaleza":
                if (pj.competencias.includes("Naturaleza")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif
                break;
            case "percepcion":
                if (pj.competencias.includes("Percepcion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            case "perspicacia":
                if (pj.competencias.includes("Perspicacia")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            case "persuasion":
                if (pj.competencias.includes("Persuasion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = carismaBonif;
                break;
            case "religion":
                if (pj.competencias.includes("Religion")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = inteligenciaBonif;
                break;
            case "sigilo":
                if (pj.competencias.includes("Sigilo")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = destrezaBonif;
                break;
            case "supervivencia":
                if (pj.competencias.includes("Supervivencia")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            case "tratoAnimal":
                if (pj.competencias.includes("Trato con animales")) {
                    bonusPB = comp;
                } else {
                    bonusPB = 0;
                }
                bonusStat = sabiduriaBonif;
                break;
            default:
                bonusPB = 0;
                bonusStat = 0;
        }

    })

    let Box = new DiceBox("#dice-box", {
        assetPath: "assets/",
        origin: "https://unpkg.com/@3d-dice/dice-box@1.0.8/dist/",
        theme: "default",
        themeColor: "#feea03",
        offscreen: true,
        scale: 9
    });

    Box.init();

    const button = document.getElementById("rollem");

    const colors = ["#FF0000"];

    function get_random(list) {
        return list[Math.floor(Math.random() * list.length)];
    }


    button.addEventListener("click", (e) => {

        roll = $("#dadoNum").val()+"d"+$("#dadoSize").val();

        if(!$("#resultados").hasClass("d-none")){
            $("#resultados").addClass("d-none");
        }

        Box.roll([roll], {
            themeColor: get_random(colors)
        });

        Box.onRollComplete = (rollResult) => {
            let rolls = rollResult;
            setTimeout(() => {
                $("#bonusPB").text(bonusPB);
                $("#bonusStat").text(bonusStat);
                totalDice = 0;
                for(let i = 0; i < rolls.length; i++){
                    for(let j = 0; j < rolls[i]["rolls"].length; j++){
                        totalDice += rolls[i]["rolls"][j]["value"];
                    }
                }
                $("#diceResult").text(totalDice);
                totalResult = totalDice + bonusPB + bonusStat;
                $("#totalResult").text(totalResult);

                $("#resultados").removeClass("d-none");

                // let nuevoLog ="<li>" + pj.nombre + " ha sacado un " + totalDice + " en su tirada de " + $("#tipoTirada").val() + "sacando un total de " + totalResult + "." + "</li>";               
                $("#logs").append("<li>" + pj.nombre + " ha sacado un " + totalDice + " en su tirada de " + $("#tipoTirada").val() + "sacando un total de " + totalResult + "." + "</li>");
                
            },2000);

        }
    });
})

function obtenerBonificador(valorAtributo) {
    var bonificador = 0;

    switch (valorAtributo) {
        case 1:
            bonificador = -5;
            break;
        case 2:
        case 3:
            bonificador = -4;
            break;
        case 4:
        case 5:
            bonificador = -3;
            break;
        case 6:
        case 7:
            bonificador = -2;
            break;
        case 8:
        case 9:
            bonificador = -1;
            break;
        case 10:
        case 11:
            bonificador = 0;
            break;
        case 12:
        case 13:
            bonificador = 1;
            break;
        case 14:
        case 15:
            bonificador = 2;
            break;
        case 16:
        case 17:
            bonificador = 3;
            break;
        case 18:
        case 19:
            bonificador = 4;
            break;
        case 20:
        case 21:
            bonificador = 5;
            break;
        default:
            bonificador = NaN;
            break;
    }

    return bonificador;
}