let closeMenu = document.querySelector("#crossMobil")
let menu = document.querySelector("#menuMobil")
let seznamMobil = document.querySelector("#seznamMobil")
let seznam = document.querySelector("#seznam")

menu.addEventListener("click", function(){
    menu.style.display = "none"
    closeMenu.style.display = "flex"
    seznamMobil.style.display = "flex"
})
closeMenu.addEventListener("click", function(){
    closeMenu.style.display = "none"
    menu.style.display = "flex"
    seznamMobil.style.display = "none"
})

let questionMark = document.querySelector("#question-mark")
let questionText = document.querySelector("#questionText")

if(questionMark){
questionMark.addEventListener("mouseenter", function(){
    questionText.style.display = "flex"
})
questionMark.addEventListener("mouseleave", function(){
    questionText.style.display = "none"
})
}

// let kubatury = document.querySelector("#kubatury")
// let vrstevnice = document.querySelector("#vrstevnice")


let nahled = document.querySelector(".nahled")
let formVrstevnice = document.querySelector(".formVrstevnice")

formVrstevnice.style.display = "flex"
nahled.style.minHeight = "120vh"
window.scrollTo(0,0)

document.getElementById("zadaniVrstevnic").addEventListener("input", function () {
    // Načteme hodnoty ze vstupních polí
    const a = document.getElementById("vzdalenostAB").value.trim();
    const h = document.getElementById("prevyseniAB").value.trim();
    const c = document.getElementById("vzdalenostAC").value.trim();
    const v = document.getElementById("prevyseniAC").value.trim();

    // Převést hodnoty na čísla, pokud nejsou prázdné
    const num1 = a !== "" ? parseFloat(a) : null;
    const num2 = h !== "" ? parseFloat(h) : null;
    const num3 = c !== "" ? parseFloat(c) : null;
    const num4 = v !== "" ? parseFloat(v) : null;

    // Zkontrolujeme, zda jsou vyplněná povinná pole 1 a 2
    if (num1 !== null && num2 !== null) {
        // Pokud je vyplněno Pole 3, vypočítáme Pole 4
        if (num4 !== null ) {
            const result3 = num4/(num2/num1);
            document.getElementById("vzdalenostAC").value = result3;
        } else {
            // Pokud Pole 3 není vyplněno, Pole 4 zůstane prázdné
            document.getElementById("vzdalenostAC").value = "";
        }
    } else {
        // Pokud nejsou vyplněna povinná pole 1 a 2, Pole 3 a 4 zůstanou prázdná
        document.getElementById("vzdalenostAC").value = "";
    }
     // Zabráníme uživateli upravovat Pole 4
    document.getElementById("vzdalenostAC").readOnly = true;
});