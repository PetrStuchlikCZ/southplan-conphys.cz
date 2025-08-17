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
let crossroadStatika = document.querySelector("#crossroadStatika")
// let crossroadStatikaPrurezy = document.querySelector("#crossroadStatikaPrurezy")

let prurez = document.querySelector("#prurez")


let nahled = document.querySelector(".nahled")

prurez.addEventListener("click", function(){
    crossroadStatika.style.display = "none"
    // crossroadStatikaPrurezy.style.display = "flex"
    nahled.style.minHeight = "120vh"
    window.scrollTo(0,0)
})

// let I = document.querySelector("#I")

// I.addEventListener("click", function(){
//     crossroadStatika.style.display = "none"
//     crossroadStatikaPrurezy.style.display = "none"
//     nahled.style.minHeight = "120vh"
//     window.scrollTo(0,0)
// })
