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

let crossroadGeodezie = document.querySelector("#crossroadGeodezie")
let formVrstevnice = document.querySelector(".formVrstevnice")
let formKubatury = document.querySelector(".formKubatury")

let kubatury = document.querySelector("#kubatury")
let vrstevnice = document.querySelector("#vrstevnice")


let nahled = document.querySelector(".nahled")

vrstevnice.addEventListener("click", function(){
    crossroadGeodezie.style.display = "none"
    formVrstevnice.style.display = "flex"
    formKubatury.style.display = "none"
    nahled.style.minHeight = "120vh"
    window.scrollTo(0,0)
})
kubatury.addEventListener("click", function(){
    crossroadGeodezie.style.display = "none"
    formKubatury.style.display = "flex"
    formVrstevnice.style.display = "none"
    nahled.style.minHeight = "120vh"
    window.scrollTo(0,0)
})

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
            if (num3 !== null ) {
                const result4 = num3 * (num2/num1);
                document.getElementById("prevyseniAC").value = result4;
            } else {
                // Pokud Pole 3 není vyplněno, Pole 4 zůstane prázdné
                document.getElementById("prevyseniAC").value = "";
            }
        } else {
            // Pokud nejsou vyplněna povinná pole 1 a 2, Pole 3 a 4 zůstanou prázdná
            document.getElementById("prevyseniAC").value = "";
        }
         // Zabráníme uživateli upravovat Pole 4
        document.getElementById("prevyseniAC").readOnly = true;
    });
//----------------KUBATURY---------------
    document.getElementById("zadaniKubatur").addEventListener("input", function () {
        // Načteme hodnoty ze vstupních polí
        const a = document.getElementById("podstavaA").value.trim();
        const b = document.getElementById("podstavaB").value.trim();
        const v1 = document.getElementById("vyskaC").value.trim();
        const v2 = document.getElementById("vyskaD").value.trim();
        const v3 = document.getElementById("vyskaE").value.trim();
        const v4 = document.getElementById("vyskaF").value.trim();
        const objem = document.getElementById("objem").value.trim();
    
        // Převést hodnoty na čísla, pokud nejsou prázdné
        const num1 = a !== "" ? parseFloat(a) : null;
        const num2 = b !== "" ? parseFloat(b) : null;
        const num3 = v1 !== "" ? parseFloat(v1) : null;
        const num4 = v2 !== "" ? parseFloat(v2) : null;
        const num5 = v3 !== "" ? parseFloat(v3) : null;
        const num6 = v4 !== "" ? parseFloat(v4) : null;
        const num7 = objem !== "" ? parseFloat(objem) : null;
    
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5, 6
        if (num1 !== null && num2 !== null && num3 !== null && num4 !== null && num5 !== null && num6 !== null) {
            // Pokud je vyplněno Pole 3, vypočítáme Pole 4
                const Sp = num1 * num2;
                const Vprum = (num3 + num4 + num5 + num6)/4;
                const result = Sp * Vprum;
                document.getElementById("objem").value = result;
            
        } else {
            // Pokud nejsou vyplněna povinná pole, tak objem je prázdný
            document.getElementById("objem").value = "";
        }
         // Zabráníme uživateli upravovat Pole 7
        document.getElementById("objem").readOnly = true;
    });
// vypocetVysky.addEventListener("click", function(){
//     vypocetVzdalenosti.style.color = "#fff"
//     vypocetVzdalenosti.style.border = "1px solid #fff"

//     vypocetVysky.style.color = "#23A669"
//     vypocetVysky.style.border = "1px solid #23A669"
// })

// vypocetVzdalenosti.addEventListener("click", function(){
//     vypocetVysky.style.color = "#fff"
//     vypocetVysky.style.border = "1px solid #fff"

//     vypocetVzdalenosti.style.color = "#23A669"
//     vypocetVzdalenosti.style.border = "1px solid #23A669"

// })
