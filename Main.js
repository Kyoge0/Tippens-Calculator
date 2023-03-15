//* Variables del sistema de unidades
const International = document.getElementById("IS")
const USystem = document.getElementById("US")

//* Variables para el cambio de campos input
const Option = document.getElementById("selection")

//* Intercambio de valores en inputs
Option.addEventListener("change", () => {

    let selectedIndex = Option.selectedIndex

    //Etiquetas de campo
    const lblOne = document.getElementById("lbl1")
    const lblTwo = document.getElementById("lbl2")

    //Campos
    const Mass = document.getElementById("Mass-imp")
    const Accel = document.getElementById("Accel-imp")

    if(selectedIndex == 0){
        lblOne.innerHTML = "Masa:"
        lblTwo.innerHTML = "Aceleración:"
        Mass.setAttribute("placeholder", "Kg")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if(selectedIndex == 1){
        lblOne.innerHTML = "Peso:"
        lblTwo.innerHTML = "Aceleración:"
        Mass.setAttribute("placeholder", "N")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if(selectedIndex == 2){
        lblOne.innerHTML = "Peso:"
        lblTwo.innerHTML = "Masa:"
        Mass.setAttribute("placeholder", "N")
        Accel.setAttribute("placeholder", "Kg")
    }
})