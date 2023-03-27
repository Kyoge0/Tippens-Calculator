//* Variables del sistema de unidades
const International = document.getElementById("IS")
const USystem = document.getElementById("US")

//* Variables para el cambio de campos input
const Option = document.getElementById("selection")

//Etiquetas de campo
const lblOne = document.getElementById("lbl1")
const lblTwo = document.getElementById("lbl2")
const lblThree = document.getElementById("lbl3")

//Campos
const Vo = document.getElementById("o-imp")
const Accel = document.getElementById("Accel")
const Time = document.getElementById("T-imp")

//* Intercambio de valores en inputs
Option.addEventListener("change", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    if (selectedIndex == 0) {
        lblOne.innerHTML = "Velocidad inicial:"
        lblTwo.innerHTML = "Aceleración:"
        lblThree.innerHTML = "Tiempo:"
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 1) {
        lblOne.innerHTML = "Velocidad final:"
        lblTwo.innerHTML = "Aceleración:"
        lblThree.innerHTML = "Tiempo:"
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 2) {
        lblOne.innerHTML = "Velocidad inicial:"
        lblTwo.innerHTML = "Velocidad final:"
        lblThree.innerHTML = "Tiempo:"
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 3) {
        lblOne.innerHTML = "Velocidad inicial:"
        lblTwo.innerHTML = "Aceleración:"
        lblThree.innerHTML = "Velocidad final:"
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "m")
    }
})

//? Cambio de unidades por radio button
International.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "m/s²")
        Accel.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
    }
})

USystem.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "ft/s²")
        Accel.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "ft/s²")
        Accel.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "ft/s²")
        Accel.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
    }
})