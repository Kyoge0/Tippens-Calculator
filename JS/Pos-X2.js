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
        lblTwo.innerHTML = "Tiempo:"
        lblThree.innerHTML = "Aceleración:"
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 1) {
        lblOne.innerHTML = "Posición en X:"
        lblTwo.innerHTML = "Tiempo:"
        lblThree.innerHTML = "Aceleración:"
        Vo.setAttribute("placeholder", "m")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 2) {
        lblOne.innerHTML = "Velocidad inicial:"
        lblTwo.innerHTML = "Tiempo:"
        lblThree.innerHTML = "Posición en X:"
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m")
    }

    if (selectedIndex == 3) {
        lblOne.innerHTML = "Velocidad inicial:"
        lblTwo.innerHTML = "Posición en X:"
        lblThree.innerHTML = "Aceleración:"
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "m")
        Accel.setAttribute("placeholder", "m/s²")
    }
})

//? Cambio de unidades por radio button
International.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "m/")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m/s²")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m")
    }

    if (selectedIndex == 3) {
        Vo.setAttribute("placeholder", "m/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "m/s²")
    }
})

USystem.addEventListener("click", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    //Cambio de unidades
    if (selectedIndex == 0) {
        Vo.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "ft/s²")
    }

    if (selectedIndex == 1) {
        Vo.setAttribute("placeholder", "ft")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "ft/s²")
    }

    if (selectedIndex == 2) {
        Vo.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "ft")
    }

    if (selectedIndex == 3) {
        Vo.setAttribute("placeholder", "ft/s²")
        Time.setAttribute("placeholder", "s")
        Accel.setAttribute("placeholder", "ft/s²")
    }
})