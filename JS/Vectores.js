//* Variables de labels
const lbl1 = document.getElementById("L-1")
const lbl2 = document.getElementById("L-2")
const lbl3 = document.getElementById("L-3")
const lbl4 = document.getElementById("L-4")
const lbl5 = document.getElementById("L-5")
const lbl6 = document.getElementById("L-6")
const lbl7 = document.getElementById("L-7")
const lbl8 = document.getElementById("L-8")
const lbl9 = document.getElementById("L-9")
const lbl10 = document.getElementById("L-10")
const lbl12 = document.getElementById("L-12")
const lbl11 = document.getElementById("L-11")

//* Variables de inputs Vector
const Vector1 = document.getElementById("V-1")
const Vector2 = document.getElementById("V-2")
const Vector3 = document.getElementById("V-3")
const Vector4 = document.getElementById("V-4")
const Vector5 = document.getElementById("V-5")
const Vector6 = document.getElementById("V-6")

//* Variables de inputs Angulo
const Angulo1 = document.getElementById("A-1")
const Angulo2 = document.getElementById("A-2")
const Angulo3 = document.getElementById("A-3")
const Angulo4 = document.getElementById("A-4")
const Angulo5 = document.getElementById("A-5")
const Angulo6 = document.getElementById("A-6")

//* Input de botón
const button = document.getElementById("B")

//* Variable de select
const Option = document.getElementById("selection")


Option.addEventListener("change", () => {
    //Valores internos del select
    let selectedIndex = Option.selectedIndex

    if (selectedIndex == 0) {
        lbl1.style.display = "none";
        lbl2.style.display = "none";
        lbl3.style.display = "none";
        lbl4.style.display = "none";
        lbl5.style.display = "none";
        lbl6.style.display = "none";
        lbl7.style.display = "none";
        lbl8.style.display = "none";
        lbl9.style.display = "none";
        lbl10.style.display = "none";
        lbl11.style.display = "none";
        lbl12.style.display = "none";

        Vector1.style.display = "none";
        Vector2.style.display = "none";
        Vector3.style.display = "none";
        Vector4.style.display = "none";
        Vector5.style.display = "none";
        Vector6.style.display = "none";

        Angulo1.style.display = "none";
        Angulo2.style.display = "none";
        Angulo3.style.display = "none";
        Angulo4.style.display = "none";
        Angulo5.style.display = "none";
        Angulo6.style.display = "none";

        button.style.display = "none";
    }

    if (selectedIndex == 1) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "none";
        lbl4.style.display = "none";
        Vector2.style.display = "none";
        Angulo2.style.display = "none";

        lbl5.style.display = "none";
        lbl6.style.display = "none";
        Angulo3.style.display = "none";
        Vector3.style.display = "none";

        lbl7.style.display = "none";
        lbl8.style.display = "none";
        Vector4.style.display = "none";
        Angulo4.style.display = "none";

        lbl9.style.display = "none";
        lbl10.style.display = "none";
        Vector5.style.display = "none";
        Angulo5.style.display = "none";

        lbl11.style.display = "none";
        lbl12.style.display = "none";
        Vector6.style.display = "none";
        Angulo6.style.display = "none";

        button.style.display = "block";
    }

    if (selectedIndex == 2) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "block";
        lbl4.style.display = "block";
        Vector2.style.display = "block";
        Angulo2.style.display = "block";

        lbl5.style.display = "none";
        lbl6.style.display = "none";
        Angulo3.style.display = "none";
        Vector3.style.display = "none";

        lbl7.style.display = "none";
        lbl8.style.display = "none";
        Vector4.style.display = "none";
        Angulo4.style.display = "none";

        lbl9.style.display = "none";
        lbl10.style.display = "none";
        Vector5.style.display = "none";
        Angulo5.style.display = "none";

        lbl11.style.display = "none";
        lbl12.style.display = "none";
        Vector6.style.display = "none";
        Angulo6.style.display = "none";

        button.style.display = "block";
    }

    if (selectedIndex == 3) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "block";
        lbl4.style.display = "block";
        Vector2.style.display = "block";
        Angulo2.style.display = "block";

        lbl5.style.display = "block";
        lbl6.style.display = "block";
        Angulo3.style.display = "block";
        Vector3.style.display = "block";

        lbl7.style.display = "none";
        lbl8.style.display = "none";
        Vector4.style.display = "none";
        Angulo4.style.display = "none";

        lbl9.style.display = "none";
        lbl10.style.display = "none";
        Vector5.style.display = "none";
        Angulo5.style.display = "none";

        lbl11.style.display = "none";
        lbl12.style.display = "none";
        Vector6.style.display = "none";
        Angulo6.style.display = "none";
        
        button.style.display = "block";
    }

    if (selectedIndex == 4) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "block";
        lbl4.style.display = "block";
        Vector2.style.display = "block";
        Angulo2.style.display = "block";

        lbl5.style.display = "block";
        lbl6.style.display = "block";
        Angulo3.style.display = "block";
        Vector3.style.display = "block";

        lbl7.style.display = "block";
        lbl8.style.display = "block";
        Vector4.style.display = "block";
        Angulo4.style.display = "block";

        lbl9.style.display = "none";
        lbl10.style.display = "none";
        Vector5.style.display = "none";
        Angulo5.style.display = "none";

        lbl11.style.display = "none";
        lbl12.style.display = "none";
        Vector6.style.display = "none";
        Angulo6.style.display = "none";

        button.style.display = "block";
    }

    if (selectedIndex == 5) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "block";
        lbl4.style.display = "block";
        Vector2.style.display = "block";
        Angulo2.style.display = "block";

        lbl5.style.display = "block";
        lbl6.style.display = "block";
        Angulo3.style.display = "block";
        Vector3.style.display = "block";

        lbl7.style.display = "block";
        lbl8.style.display = "block";
        Vector4.style.display = "block";
        Angulo4.style.display = "block";

        lbl9.style.display = "block";
        lbl10.style.display = "block";
        Vector5.style.display = "block";
        Angulo5.style.display = "block";

        lbl11.style.display = "none";
        lbl12.style.display = "none";
        Vector6.style.display = "none";
        Angulo6.style.display = "none";

        button.style.display = "block";
    }

    if (selectedIndex == 6) {
        lbl1.style.display = "block";
        lbl2.style.display = "block";
        Vector1.style.display = "block";
        Angulo1.style.display = "block";

        lbl3.style.display = "block";
        lbl4.style.display = "block";
        Vector2.style.display = "block";
        Angulo2.style.display = "block";

        lbl5.style.display = "block";
        lbl6.style.display = "block";
        Angulo3.style.display = "block";
        Vector3.style.display = "block";

        lbl7.style.display = "block";
        lbl8.style.display = "block";
        Vector4.style.display = "block";
        Angulo4.style.display = "block";

        lbl9.style.display = "block";
        lbl10.style.display = "block";
        Vector5.style.display = "block";
        Angulo5.style.display = "block";

        lbl11.style.display = "block";
        lbl12.style.display = "block";
        Vector6.style.display = "block";
        Angulo6.style.display = "block";

        button.style.display = "block";
    }
})
