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
if(document.getElementById("I")){
document.getElementById("I").addEventListener("input", function () {
     // Načteme hodnoty ze vstupních polí
     const num1 = document.getElementById("sirka1").value.trim();
     const num2 = document.getElementById("sirka2").value.trim();
     const num3 = document.getElementById("vyska").value.trim();
     const num4 = document.getElementById("tloustka").value.trim();
     const num5 = document.getElementById("vyskaV1").value.trim();
     const num6 = document.getElementById("vyskaV2").value.trim();
     const num7 = document.getElementById("Yt").value.trim();
     const num8 = document.getElementById("Zt").value.trim();
     const num9 = document.getElementById("Iy").value.trim();
     const num10 = document.getElementById("Iz").value.trim();
     const num11 = document.getElementById("Dyz").value.trim();
 
     // Převést hodnoty na čísla, pokud nejsou prázdné
     const a1 = num1 !== "" ? parseFloat(num1) : null;
     const a2 = num2 !== "" ? parseFloat(num2) : null;
     const h = num3 !== "" ? parseFloat(num3) : null;
     const c = num4 !== "" ? parseFloat(num4) : null;
     const v1 = num5 !== "" ? parseFloat(num5) : null;
     const v2 = num6 !== "" ? parseFloat(num6) : null;
     const Yt = num7 !== "" ? parseFloat(num7) : null;
     const Zt = num8 !== "" ? parseFloat(num8) : null;
     const Iy = num9 !== "" ? parseFloat(num9) : null;
     const Iz = num10 !== "" ? parseFloat(num10) : null;
     const Dyz = num11 !== "" ? parseFloat(num11) : null;

     // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5, 6
    if (a1 !== null && a2 !== null && h !== null && c !== null && v1 !== null && v2 !== null) {
        const A1 = a1 * v1;
        const A2 = a2 * v2;
        const A3 = c * (h-(v1 + v2));
        if (a1 > a2){
            resultY = ((A1 * (a1/2)) + (A2 * (a1/2)) + (A3 * (a1/2)))/(A1 + A2 + A3);
        } else if(a2 > a1){
            resultY = ((A1 * (a2/2)) + (A2 * (a2/2)) + (A3 * (a2/2)))/(A1 + A2 + A3);
        }
        const resultZ = ((A1 * (v1/2)) + (A2 * (h-(v2/2))) + (A3 * (h/2)))/(A1 + A2 + A3);
        if (a1 > a2){
            Ycc = ((a1/2)-resultY);
        } else if(a2 > a1){
            Ycc = ((a2/2)-resultY);
        } else{
           Ycc = ((a1/2)-resultY);
        }
        // const Ycc = ((a1/2)-resultY);
        document.getElementById("Yt").value = resultY;
        document.getElementById("Zt").value = resultZ;

        const Iy1 = ((1/12)*a1*(v1*v1*v1)) + (A1 * (resultZ - (v1/2)) * (resultZ - (v1/2)));
        const Iy3 = ((1/12)*c*(h-(v1+v2))*(h-(v1+v2))*(h-(v1+v2))) + (A3 * ((v1+((h-(v1+v2))/2))-resultZ) * ((v1+((h-(v1+v2))/2))-resultZ));
        const Iy2 = ((1/12)*a2*(v2*v2*v2)) + (A2*(h-resultZ-(v2/2))*(h-resultZ-(v2/2)));
        const resultIy = Iy1 + Iy2 + Iy3;

        const Iz1 = ((1/12)*v1*(a1*a1*a1)) + (A1 * (Ycc) * (Ycc));
        const Iz2 = ((1/12)*(h-(v1+v2))*c*c*c) + (A3 * (Ycc) * (Ycc));
        const Iz3 = ((1/12)*v2*(a2*a2*a2)) + (A2*(Ycc)*(Ycc));
        const resultIz = Iz1 + Iz2 + Iz3;

        const resultDyz = (A1 * (Ycc) * (resultZ - (v1/2))) + (A2 * (Ycc) * (h-(resultZ+(v2/2)))) + (A3 * (Ycc) * ((h/2)-resultZ));

        document.getElementById("Iy").value = resultIy;
        document.getElementById("Iz").value = resultIz;
        document.getElementById("Dyz").value = resultDyz;
    } else {
        // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5, 6.  Pole 7 a 8 zůstanou prázdná
        document.getElementById("Yt").value = "";
        document.getElementById("Zt").value = "";
        document.getElementById("Iy").value = "";
        document.getElementById("Iz").value = "";
        document.getElementById("Dyz").value = "";
    }
     // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
     document.getElementById("Yt").readOnly = true;
     document.getElementById("Zt").readOnly = true;
     document.getElementById("Iy").readOnly = true;
     document.getElementById("Iz").readOnly = true;
     document.getElementById("Dyz").readOnly = true;
})
}
if(document.getElementById("T")){

document.getElementById("T").addEventListener("input", function () {
    // Načteme hodnoty ze vstupních polí
    const num1 = document.getElementById("sirka1").value.trim();
    const num3 = document.getElementById("vyska").value.trim();
    const num4 = document.getElementById("tloustka").value.trim();
    const num5 = document.getElementById("vyskaV1").value.trim();
    const num7 = document.getElementById("Yt").value.trim();
    const num8 = document.getElementById("Zt").value.trim();
    const num9 = document.getElementById("Iy").value.trim();
    const num10 = document.getElementById("Iz").value.trim();
    const num11 = document.getElementById("Dyz").value.trim();

    // Převést hodnoty na čísla, pokud nejsou prázdné
    const a1 = num1 !== "" ? parseFloat(num1) : null;
    const h = num3 !== "" ? parseFloat(num3) : null;
    const c = num4 !== "" ? parseFloat(num4) : null;
    const v1 = num5 !== "" ? parseFloat(num5) : null;
    const Yt = num7 !== "" ? parseFloat(num7) : null;
    const Zt = num8 !== "" ? parseFloat(num8) : null;
    const Iy = num9 !== "" ? parseFloat(num9) : null;
    const Iz = num10 !== "" ? parseFloat(num10) : null;
    const Dyz = num11 !== "" ? parseFloat(num11) : null;

    // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4,
   if (a1 !== null && h !== null && c !== null && v1 !== null) {
       const A1 = a1 * v1;
       const A2 = c * (h-v1);
       const resultY = ((A1 * (a1/2)) + (A2 * (a1/2)))/(A1 + A2);
       const resultZ = ((A1 * (v1/2)) + (A2 * (h - ((h-v1)/2))))/(A1 + A2);
       document.getElementById("Yt").value = resultY;
       document.getElementById("Zt").value = resultZ;

       const Iy1 = ((1/12)*a1*(v1*v1*v1)) + (A1 * (resultZ - (v1/2)) * (resultZ - (v1/2)));
       const Iy2 = ((1/12)*c*(h-(v1))*(h-(v1))*(h-(v1))) + (A2 * ((v1+((h-v1)/2))-resultZ)*((v1+((h-v1)/2))-resultZ));
       const resultIy = Iy1 + Iy2;

       const Iz1 = ((1/12)*v1*(a1*a1*a1)) + (A1 * ((a1/2)-resultY) * ((a1/2)-resultY));
       const Iz2 = ((1/12)*(h-v1)*c*c*c) + (A2 * ((a1/2)-resultY) * ((a1/2)-resultY));
       const resultIz = Iz1 + Iz2;

       const resultDyz = (A1 * ((a1/2)-resultY) * (resultZ - (v1/2))) + (A2 * ((a1/2)-resultY) * ((v1+((h-v1)/2))-resultZ));

       document.getElementById("Iy").value = resultIy;
       document.getElementById("Iz").value = resultIz;
       document.getElementById("Dyz").value = resultDyz;
   } else {
       // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5, 6.  Pole 7 a 8 zůstanou prázdná
       document.getElementById("Yt").value = "";
       document.getElementById("Zt").value = "";
       document.getElementById("Iy").value = "";
       document.getElementById("Iz").value = "";
       document.getElementById("Dyz").value = "";
   }
    // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
    document.getElementById("Yt").readOnly = true;
    document.getElementById("Zt").readOnly = true;
    document.getElementById("Iy").readOnly = true;
    document.getElementById("Iz").readOnly = true;
    document.getElementById("Dyz").readOnly = true;
})
}

if(document.getElementById("U")){

    document.getElementById("U").addEventListener("input", function () {
        // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("sirka1").value.trim();
        const num3 = document.getElementById("vyska").value.trim();
        const num4 = document.getElementById("tloustka1").value.trim();
        const num42 = document.getElementById("tloustka2").value.trim();
        const num5 = document.getElementById("vyskaV1").value.trim();
        const num7 = document.getElementById("Yt").value.trim();
        const num8 = document.getElementById("Zt").value.trim();
        const num9 = document.getElementById("Iy").value.trim();
        const num10 = document.getElementById("Iz").value.trim();
        const num11 = document.getElementById("Dyz").value.trim();
    
        // Převést hodnoty na čísla, pokud nejsou prázdné
        const a = num1 !== "" ? parseFloat(num1) : null;
        const h = num3 !== "" ? parseFloat(num3) : null;
        const c1 = num4 !== "" ? parseFloat(num4) : null;
        const c2 = num42 !== "" ? parseFloat(num42) : null;
        const v = num5 !== "" ? parseFloat(num5) : null;
        const Yt = num7 !== "" ? parseFloat(num7) : null;
        const Zt = num8 !== "" ? parseFloat(num8) : null;
        const Iy = num9 !== "" ? parseFloat(num9) : null;
        const Iz = num10 !== "" ? parseFloat(num10) : null;
        const Dyz = num11 !== "" ? parseFloat(num11) : null;
    
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5
       if (a !== null && h !== null && c1 !== null && c2 !== null && v !== null) {
           const A1 = a * h;
           const A2 = (a-(c1+c2)) * (h-v);
           const Ac = A1 - A2;
           const resultY = ((A1*(a/2))-(A2*(((a-(c1+c2))/2)+c2)))/Ac;
           const resultZ = ((A1*(h/2))-(A2*((h-v)/2)))/Ac;
           document.getElementById("Yt").value = resultY;
           document.getElementById("Zt").value = resultZ;
    
           const a2 = (a-(c1+c2));
           const h2 = (h-v);
           const Iy1 = ((1/12)*a*h*h*h)+(A1*((a/2)-resultY)*((a/2)-resultY));
           const Iy2 = ((1/12)*a2*h2*h2*h2)+(A2*(((a2/2)+c2)-resultY)*(((a2/2)+c2)-resultY));
           const resultIy = Iy1 - Iy2;
    
           const Iz1 = ((1/12)*h*a*a*a)+(A1*((h/2)-resultZ)*((h/2)-resultZ));
           const Iz2 = ((1/12)*h2*a2*a2*a2)+(A2*((h2/2)-resultZ)*((h2/2)-resultZ));
           const resultIz = Iz1 - Iz2;
    
           const resultDyz = (A1*((a/2)-resultY)*((h/2)-resultZ)) - (A2*((((a-(c1+c2))/2)+c2)-resultY)*(((h-v)/2)-resultZ));
    
           document.getElementById("Iy").value = resultIy;
           document.getElementById("Iz").value = resultIz;
           document.getElementById("Dyz").value = resultDyz;
       } else {
           // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5.  Pole 7 a 8 zůstanou prázdná
           document.getElementById("Yt").value = "";
           document.getElementById("Zt").value = "";
           document.getElementById("Iy").value = "";
           document.getElementById("Iz").value = "";
           document.getElementById("Dyz").value = "";
       }
        // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
        document.getElementById("Yt").readOnly = true;
        document.getElementById("Zt").readOnly = true;
        document.getElementById("Iy").readOnly = true;
        document.getElementById("Iz").readOnly = true;
        document.getElementById("Dyz").readOnly = true;
    })
    }

if(document.getElementById("H")){
    document.getElementById("H").addEventListener("input", function () {
         // Načteme hodnoty ze vstupních polí
         const num1 = document.getElementById("sirka").value.trim();
         const num2 = document.getElementById("vyska1").value.trim();
         const num3 = document.getElementById("vyska2").value.trim();
         const num4 = document.getElementById("tloustka").value.trim();
         const num5 = document.getElementById("vyskaB1").value.trim();
         const num6 = document.getElementById("vyskaB2").value.trim();
         const num7 = document.getElementById("Yt").value.trim();
         const num8 = document.getElementById("Zt").value.trim();
         const num9 = document.getElementById("Iy").value.trim();
         const num10 = document.getElementById("Iz").value.trim();
         const num11 = document.getElementById("Dyz").value.trim();
     
         // Převést hodnoty na čísla, pokud nejsou prázdné
         const a = num1 !== "" ? parseFloat(num1) : null;
         const h1 = num2 !== "" ? parseFloat(num2) : null;
         const h2 = num3 !== "" ? parseFloat(num3) : null;
         const c = num4 !== "" ? parseFloat(num4) : null;
         const b1 = num5 !== "" ? parseFloat(num5) : null;
         const b2 = num6 !== "" ? parseFloat(num6) : null;
         const Yt = num7 !== "" ? parseFloat(num7) : null;
         const Zt = num8 !== "" ? parseFloat(num8) : null;
         const Iy = num9 !== "" ? parseFloat(num9) : null;
         const Iz = num10 !== "" ? parseFloat(num10) : null;
         const Dyz = num11 !== "" ? parseFloat(num11) : null;
     
         // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5
        if (a !== null && h1 !== null && h2 !== null && c !== null && b1 !== null && b2 !== null) {
            const A1 = b1 * h1;
            const A2 = b2 * h2;
            const A3 = (a-(b1 + b2))*c;
            const Ac = A1 + A2 + A3;
            const b3 = a-(b1+b2);
            const resultY = ((A1*(a-(b1/2)))+(A3*(a/2))+(A2*(b2/2)))/Ac;
            if(h1>h2){
                resultZ = ((A1*(h2/2))+(A2*(h2/2))+(A3*(h2/2)))/Ac;
            } else if(h2>h1){
                resultZ = ((A1*(h2/2))+(A2*(h2/2))+(A3*(h2/2)))/Ac;
            }
           
            document.getElementById("Yt").value = resultY;
            document.getElementById("Zt").value = resultZ;
     
            const resultIy = ((1/12)*b1*h1*h1*h1)+((1/12)*b3*c*c*c)+((1/12)*b2*h2*h2*h2);
            const resultIz = ((1/12)*h1*b1*b1*b1)+(A1*((a-(b1/2))-resultY)*((a-(b1/2))-resultY))+((1/12)*c*b3*b3*b3)+(A3*(resultY-((b3/2)+b2))*(resultY-((b3/2)+b2)))+((1/12)*h2*b2*b2*b2)+(A2*(resultY-(b2/2))*(resultY-(b2/2)));
            const resultDyz = (A1*((a-(b1/2))-resultY)*((h2/2)-resultZ))+(A3*(resultY-((b3/2)+b2))*((h2/2)-resultZ))+(A2*(resultY-(b2/2))*((h2/2)-resultZ));

            document.getElementById("Iy").value = resultIy;
            document.getElementById("Iz").value = resultIz;
            document.getElementById("Dyz").value = resultDyz;
        } else {
            // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5.  Pole 7 a 8, 9 a 10 a 11 zůstanou prázdná
            document.getElementById("Yt").value = "";
            document.getElementById("Zt").value = "";
            document.getElementById("Iy").value = "";
            document.getElementById("Iz").value = "";
            document.getElementById("Dyz").value = "";
        }
         // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
         document.getElementById("Yt").readOnly = true;
         document.getElementById("Zt").readOnly = true;
         document.getElementById("Iy").readOnly = true;
         document.getElementById("Iz").readOnly = true;
         document.getElementById("Dyz").readOnly = true;
    })
}

if(document.getElementById("OpakT")){
    document.getElementById("OpakT").addEventListener("input", function () {
         // Načteme hodnoty ze vstupních polí
    const num1 = document.getElementById("sirka1").value.trim();
    const num3 = document.getElementById("vyska").value.trim();
    const num4 = document.getElementById("tloustka").value.trim();
    const num5 = document.getElementById("vyskaV1").value.trim();
    const num7 = document.getElementById("Yt").value.trim();
    const num8 = document.getElementById("Zt").value.trim();
    const num9 = document.getElementById("Iy").value.trim();
    const num10 = document.getElementById("Iz").value.trim();
    const num11 = document.getElementById("Dyz").value.trim();

    // Převést hodnoty na čísla, pokud nejsou prázdné
    const a = num1 !== "" ? parseFloat(num1) : null;
    const h = num3 !== "" ? parseFloat(num3) : null;
    const c = num4 !== "" ? parseFloat(num4) : null;
    const v = num5 !== "" ? parseFloat(num5) : null;
    const Yt = num7 !== "" ? parseFloat(num7) : null;
    const Zt = num8 !== "" ? parseFloat(num8) : null;
    const Iy = num9 !== "" ? parseFloat(num9) : null;
    const Iz = num10 !== "" ? parseFloat(num10) : null;
    const Dyz = num11 !== "" ? parseFloat(num11) : null;

    // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4,
   if (a !== null && h !== null && c !== null && v !== null) {
       const A1 = a * v;
       const A2 = c * (h-v);
       const resultY = ((A1 * (a/2)) + (A2 * (a/2)))/(A1 + A2);
       const resultZ = ((A1 * (v/2)) + (A2 * (((h-v)/2)+v)))/(A1 + A2);
       document.getElementById("Yt").value = resultY;
       document.getElementById("Zt").value = -resultZ;

       const Iy1 = ((1/12)*a*v*v*v)+(A1*(resultZ-(v/2))*(resultZ-(v/2)));
       const Iy2 = ((1/12)*c*(h-v)*(h-v)*(h-v))+(A2*( ( ((h-v)/2) + v )-resultZ)*((((h-v)/2)+v)-resultZ));
       const resultIy = Iy1 + Iy2;

       const Iz1 = ((1/12)*v*a*a*a)+(A1*((a/2)-resultY)*((a/2)-resultY));
       const Iz2 = ((1/12)*(h-v)*c*c*c)+(A2*((a/2)-resultY)*((a/2)-resultY));
       const resultIz = Iz1 + Iz2;

       const resultDyz = (A1*((a/2)-resultY)*(resultZ-(v/2)))+(A2*((a/2)-resultY)*((((h-v)/2)+v)-resultZ));

       document.getElementById("Iy").value = resultIy;
       document.getElementById("Iz").value = resultIz;
       document.getElementById("Dyz").value = resultDyz;
   } else {
       // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4.  Pole 7 a 8 zůstanou prázdná
       document.getElementById("Yt").value = "";
       document.getElementById("Zt").value = "";
       document.getElementById("Iy").value = "";
       document.getElementById("Iz").value = "";
       document.getElementById("Dyz").value = "";
   }
    // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
    document.getElementById("Yt").readOnly = true;
    document.getElementById("Zt").readOnly = true;
    document.getElementById("Iy").readOnly = true;
    document.getElementById("Iz").readOnly = true;
    document.getElementById("Dyz").readOnly = true;
    })
}
if(document.getElementById("N")){
    document.getElementById("N").addEventListener("input", function () {
        // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("sirka1").value.trim();
        const num2 = document.getElementById("vyska").value.trim();
        const num3 = document.getElementById("tloustka1").value.trim();
        const num4 = document.getElementById("tloustka2").value.trim();
        const num5 = document.getElementById("vyskaV1").value.trim();
        const num7 = document.getElementById("Yt").value.trim();
        const num8 = document.getElementById("Zt").value.trim();
        const num9 = document.getElementById("Iy").value.trim();
        const num10 = document.getElementById("Iz").value.trim();
        const num11 = document.getElementById("Dyz").value.trim();
    
        // Převést hodnoty na čísla, pokud nejsou prázdné
        const a = num1 !== "" ? parseFloat(num1) : null;
        const h = num2 !== "" ? parseFloat(num2) : null;
        const c1 = num3 !== "" ? parseFloat(num3) : null;
        const c2 = num4 !== "" ? parseFloat(num4) : null;
        const v = num5 !== "" ? parseFloat(num5) : null;
        const Yt = num7 !== "" ? parseFloat(num7) : null;
        const Zt = num8 !== "" ? parseFloat(num8) : null;
        const Iy = num9 !== "" ? parseFloat(num9) : null;
        const Iz = num10 !== "" ? parseFloat(num10) : null;
        const Dyz = num11 !== "" ? parseFloat(num11) : null;
    
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5
       if (a !== null && h !== null && c1 !== null && c2 !== null && v !== null ) {
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
           const A1 = a * h;
           const A2 = (a-(c1 + c2))*(h-v);
           const Ac = A1 - A2;
           if(c1 === c2){
                resultY = (a/2);
           } else {
                resultY = ((A1*(a/2))-(A2*(((a-(c1+c2))/2)+c2)))/Ac;
           }
        //    const resultY = (a/2);
           const resultZ = ((A1*(h/2))-(A2*(((h-v)/2)+v)))/Ac;
          
           document.getElementById("Yt").value = resultY;
           document.getElementById("Zt").value = resultZ;
    
           const resultIy = ((1/12)*a*h*h*h)+(A1*((h/2)-resultZ)*((h/2)-resultZ))-((1/12)*(a-(c1+c2))*(h-v)*(h-v)*(h-v))-(A2*((v+((h-v)/2))-resultZ)*((v+((h-v)/2))-resultZ));
           const resultIz = ((1/12)*h*a*a*a)+(A1*((a/2)-resultY)*((a/2)-resultY))-((1/12)*(h-v)*(a-(c1+c2))*(a-(c1+c2))*(a-(c1+c2)))-(A2*((a/2)-resultY)*((a/2)-resultY));
           const resultDyz = (A1*((a/2)-resultY)*((h/2)-resultZ))-(A2*((a/2)-resultY)*((h/2)-resultZ));

           document.getElementById("Iy").value = resultIy;
           document.getElementById("Iz").value = resultIz;
           document.getElementById("Dyz").value = resultDyz;
       } else {
           // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5.  Pole 7 a 8, 9 a 10 a 11 zůstanou prázdná
           document.getElementById("Yt").value = "";
           document.getElementById("Zt").value = "";
           document.getElementById("Iy").value = "";
           document.getElementById("Iz").value = "";
           document.getElementById("Dyz").value = "";
       }
        // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
        document.getElementById("Yt").readOnly = true;
        document.getElementById("Zt").readOnly = true;
        document.getElementById("Iy").readOnly = true;
        document.getElementById("Iz").readOnly = true;
        document.getElementById("Dyz").readOnly = true;
    })
}
if(document.getElementById("Tram")){
    document.getElementById("Tram").addEventListener("input", function () {
        // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("sirka").value.trim();
        const num2 = document.getElementById("vyska").value.trim();
        const num7 = document.getElementById("Yt").value.trim();
        const num8 = document.getElementById("Zt").value.trim();
        const num9 = document.getElementById("Iy").value.trim();
        const num10 = document.getElementById("Iz").value.trim();
        const num11 = document.getElementById("Dyz").value.trim();
    
        // Převést hodnoty na čísla, pokud nejsou prázdné
        const a = num1 !== "" ? parseFloat(num1) : null;
        const h = num2 !== "" ? parseFloat(num2) : null;
        const Yt = num7 !== "" ? parseFloat(num7) : null;
        const Zt = num8 !== "" ? parseFloat(num8) : null;
        const Iy = num9 !== "" ? parseFloat(num9) : null;
        const Iz = num10 !== "" ? parseFloat(num10) : null;
        const Dyz = num11 !== "" ? parseFloat(num11) : null;
    
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5
       if (a !== null && h !== null ) {
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
           const Ac = a*h;
           const resultY = a/2;
           const resultZ = h/2;
          
           document.getElementById("Yt").value = resultY;
           document.getElementById("Zt").value = resultZ;
    
           const resultIy = ((1/12)*a*h*h*h);
           const resultIz = ((1/12)*h*a*a*a);
           const resultDyz = (Ac*((a/2)-resultY)*((h/2)-resultZ));

           document.getElementById("Iy").value = resultIy;
           document.getElementById("Iz").value = resultIz;
           document.getElementById("Dyz").value = resultDyz;

       } else {
           // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5.  Pole 7 a 8, 9 a 10 a 11 zůstanou prázdná
           document.getElementById("Yt").value = "";
           document.getElementById("Zt").value = "";
           document.getElementById("Iy").value = "";
           document.getElementById("Iz").value = "";
           document.getElementById("Dyz").value = "";
       }
        // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
        document.getElementById("Yt").readOnly = true;
        document.getElementById("Zt").readOnly = true;
        document.getElementById("Iy").readOnly = true;
        document.getElementById("Iz").readOnly = true;
        document.getElementById("Dyz").readOnly = true;
    })
}
if(document.getElementById("O")){
    document.getElementById("O").addEventListener("input", function () {
        // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("polomer").value.trim();
        const num2 = document.getElementById("tloustka").value.trim();
        const num7 = document.getElementById("Yt").value.trim();
        const num8 = document.getElementById("Zt").value.trim();
        const num9 = document.getElementById("Iy").value.trim();
        const num10 = document.getElementById("Iz").value.trim();
        const num11 = document.getElementById("Dyz").value.trim();
    
        // Převést hodnoty na čísla, pokud nejsou prázdné
        const r = num1 !== "" ? parseFloat(num1) : null;
        const c = num2 !== "" ? parseFloat(num2) : null;
        const Yt = num7 !== "" ? parseFloat(num7) : null;
        const Zt = num8 !== "" ? parseFloat(num8) : null;
        const Iy = num9 !== "" ? parseFloat(num9) : null;
        const Iz = num10 !== "" ? parseFloat(num10) : null;
        const Dyz = num11 !== "" ? parseFloat(num11) : null;
    
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3, 4, 5
       if (r !== null && c !== null ) {
        // console.log(a)
        // console.log(h)
        // console.log(c1)
        // console.log(c2)
        // console.log(v)
           const Ac = (Math.PI*((r+c)*(r+c)))-(Math.PI*r*r);
           const resultY = r+c;
           const resultZ = r+c;
          
           document.getElementById("Yt").value = resultY;
           document.getElementById("Zt").value = resultZ;
    
           const resultIy = ((Math.PI/4)*(r+c)*(r+c)*(r+c)*(r+c))-((Math.PI/4)*r*r*r*r);
           const resultIz = ((Math.PI/4)*(r+c)*(r+c)*(r+c)*(r+c))-((Math.PI/4)*r*r*r*r);
           const resultDyz = (Ac*((r+c)-resultY)*((r+c)-resultZ));

           document.getElementById("Iy").value = resultIy;
           document.getElementById("Iz").value = resultIz;
           document.getElementById("Dyz").value = resultDyz;

       } else {
           // Pokud nejsou vyplněna povinná pole 1, 2, 3, 4, 5.  Pole 7 a 8, 9 a 10 a 11 zůstanou prázdná
           document.getElementById("Yt").value = "";
           document.getElementById("Zt").value = "";
           document.getElementById("Iy").value = "";
           document.getElementById("Iz").value = "";
           document.getElementById("Dyz").value = "";
       }
        // Zabráníme uživateli upravovat Pole 7 a 8, 9 a 10 a 11
        document.getElementById("Yt").readOnly = true;
        document.getElementById("Zt").readOnly = true;
        document.getElementById("Iy").readOnly = true;
        document.getElementById("Iz").readOnly = true;
        document.getElementById("Dyz").readOnly = true;
    })
}