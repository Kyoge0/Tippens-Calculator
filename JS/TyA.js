//* Variables del sistema de unidades
const International = document.getElementById("IS")
const USystem = document.getElementById("US")

//* Variables para el cambio de campos input
const Option = document.getElementById("selection")

//Etiquetas de campo
const lblOne = document.getElementById("lbl1")
const lblTwo = document.getElementById("lbl2")

//Campos
const Vo = document.getElementById("vel-o")
const vf = document.getElementById("vel-f")


//* Intercambio de valores en inputs
Option.addEventListener("change", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    if (selectedIndex == 0) {
        lblOne.innerHTML = "Velocidad final:"
        lblTwo.innerHTML = "velocidad inicial:"
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 1) {
        lblOne.innerHTML = "2at:"
        lblTwo.innerHTML = "velocidad inicial:"
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "u")
    }

    if (selectedIndex == 2) {
        lblOne.innerHTML = "Velocidad final:"
        lblTwo.innerHTML = "2at:"
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "u")
    }

})

//? Cambio de unidades por radio button
International.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "m/s²")
        vf.setAttribute("placeholder", "m/s²")
    }
})

USystem.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "ft/s²")
        vf.setAttribute("placeholder", "ft/s²")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "ft/s²")
        vf.setAttribute("placeholder", "ft/s²")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "ft/s²")
        vf.setAttribute("placeholder", "ft/s²")
    }
})