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
if(document.getElementById("tramProsty")){
    document.getElementById("tramProsty").addEventListener("input", function () {
         // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("rozpetiL").value.trim();
        const num2 = document.getElementById("stale").value.trim();
        const num3 = document.getElementById("promenne").value.trim();

        const num4 = document.getElementById("sirkaB").value.trim();
        const num5 = document.getElementById("vyskaH").value.trim();
        const num6 = document.getElementById("M").value.trim();
        const num7 = document.getElementById("V").value.trim();
         // Převést hodnoty na čísla, pokud nejsou prázdné
        const L = num1 !== "" ? parseFloat(num1) : null;
        const fgd = num2 !== "" ? parseFloat(num2) : null;
        const fqd = num3 !== "" ? parseFloat(num3) : null;
        const b = num4 !== "" ? parseFloat(num4) : null;
        const h = num5 !== "" ? parseFloat(num5) : null;
        const M = num6 !== "" ? parseFloat(num6) : null;
        const V = num7 !== "" ? parseFloat(num7) : null;
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3
    if (L !== null){
        H1 = (1/12)*L*1000;
        H2 = (1/10)*L*1000;
        document.getElementById("rozpetiVyska").textContent = `Rozpetí výšky trámu ${H1.toFixed(0)} - ${H2.toFixed(0)} mm`;
        
        document.getElementById("vyskaH").readOnly = false;

        if (h > H1 && h < H2){
            document.getElementById("vyskaH").style.color = "#24A669";
            document.getElementById("vyskaH").style.caretColor = "white";
        
            B1 = (1/3)*h;
            B2 = (2/3)*h;
            document.getElementById("rozpetiSirka").textContent = `Rozpetí šířky trámu ${B1.toFixed(0)} - ${B2.toFixed(0)} mm`;
            document.getElementById("sirkaB").readOnly = false;
            if ( b > B1 && b < B2){
                document.getElementById("sirkaB").style.color = "#24A669";
                document.getElementById("sirkaB").style.caretColor = "white";
            } else{
                
                document.getElementById("sirkaB").style.color = "red";
                document.getElementById("sirkaB").style.caretColor = "white";
            }
        } else{
            document.getElementById("sirkaB").readOnly = true;

            document.getElementById("vyskaH").style.color = "red";
            document.getElementById("vyskaH").style.caretColor = "white";
          
        }
    } else{
        // Zabráníme uživateli upravovat Pole 4 5 
     document.getElementById("sirkaB").readOnly = true;
     document.getElementById("vyskaH").readOnly = true;
    }
    if (L !== null && fgd !== null && fqd !== null ) {
        
        f = fgd + fqd ;
        resultM = (1/8)*f*L*L ;
        resultV = (1/2)*f*L ;
        document.getElementById("M").value = resultM.toFixed(2);
        document.getElementById("V").value = resultV.toFixed(2);
    }
    
    })
    document.getElementById("M").readOnly = true;
    document.getElementById("V").readOnly = true;
}

if(document.getElementById("tramKonzola")){
    document.getElementById("tramKonzola").addEventListener("input", function () {
         // Načteme hodnoty ze vstupních polí
        const num1 = document.getElementById("rozpetiL").value.trim();
        const num8 = document.getElementById("rozpetiLk").value.trim();
        const num2 = document.getElementById("stale").value.trim();
        const num10 = document.getElementById("staleK").value.trim();
        const num3 = document.getElementById("promenne").value.trim();
        const num11 = document.getElementById("zabradli").value.trim();

        const num4 = document.getElementById("sirkaB").value.trim();
        const num5 = document.getElementById("vyskaH").value.trim();
        const num6 = document.getElementById("M").value.trim();
        const num9 = document.getElementById("Mp").value.trim();
        const num7 = document.getElementById("V").value.trim();
         // Převést hodnoty na čísla, pokud nejsou prázdné
        const L = num1 !== "" ? parseFloat(num1) : null;
        const Lk = num8 !== "" ? parseFloat(num8) : null;
        const fgd = num2 !== "" ? parseFloat(num2) : null;
        const fqd = num3 !== "" ? parseFloat(num3) : null;
        const fgdKon = num10 !== "" ? parseFloat(num10) : null;
        const Zb = num11 !== "" ? parseFloat(num11) : null;
        const b = num4 !== "" ? parseFloat(num4) : null;
        const h = num5 !== "" ? parseFloat(num5) : null;
        const M = num6 !== "" ? parseFloat(num6) : null;
        const Mp = num9 !== "" ? parseFloat(num9) : null;
        const V = num7 !== "" ? parseFloat(num7) : null;
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3
    if (L !== null && Lk !== null){
        H1 = (1/12)*L*1000;
        H2 = (1/10)*L*1000;
        document.getElementById("rozpetiVyska").textContent = `Rozpetí výšky trámu ${H1.toFixed(0)} - ${H2.toFixed(0)} mm`;
        
        document.getElementById("vyskaH").readOnly = false;

        if (h > H1 && h < H2){
            document.getElementById("vyskaH").style.color = "#24A669";
            document.getElementById("vyskaH").style.caretColor = "white";
        
            B1 = (1/3)*h;
            B2 = (2/3)*h;
            document.getElementById("rozpetiSirka").textContent = `Rozpetí šířky trámu ${B1.toFixed(0)} - ${B2.toFixed(0)} mm`;
            document.getElementById("sirkaB").readOnly = false;
            if ( b > B1 && b < B2){
                document.getElementById("sirkaB").style.color = "#24A669";
                document.getElementById("sirkaB").style.caretColor = "white";
            } else{
                
                document.getElementById("sirkaB").style.color = "red";
                document.getElementById("sirkaB").style.caretColor = "white";
            }
        } else{
            document.getElementById("sirkaB").readOnly = true;

            document.getElementById("vyskaH").style.color = "red";
            document.getElementById("vyskaH").style.caretColor = "white";
          
        }
    } else{
        // Zabráníme uživateli upravovat Pole 4 5 
     document.getElementById("sirkaB").readOnly = true;
     document.getElementById("vyskaH").readOnly = true;
    }
    if (L !== null && Lk !== null && fgd !== null && fgdKon !== null && fqd !== null ) {
        // if( Zb == null){
        //     Zb = 0;
            f = fgd + fqd ;

            //---------KZS 1 
                fkon1 = fgdKon + fqd;
                fpol1 = f;
            
                V21 = -((Zb*Lk)+(fkon1*Lk*(Lk/2))-(fpol1*L*(L/2)))/L;
                V11 = -V21+(fpol1*L)+(fkon1*Lk)+(Zb);
                Xmax1 = V21/fpol1;
                Mpod1 = -fkon1*Lk*(Lk/2)-(Zb*Lk);
                Mpol1 = V21*Xmax1-(fpol1*Xmax1*(Xmax1/2));
            //---------KZS 2
                fkon2 = fgdKon;
                fpol2 = f;
            
                V22 = -((Zb*Lk)+(fkon2*Lk*(Lk/2))-(fpol2*L*(L/2)))/L;
                V12 = -V22+(fpol2*L)+(fkon2*Lk)+(Zb);
                Xmax2 = V22/fpol2;
                Mpod2 = -fkon2*Lk*(Lk/2)-(Zb*Lk);
                Mpol2 = V22*Xmax2-(fpol2*Xmax2*(Xmax2/2));
             //---------KZS 2
                fkon3 = fgdKon + fqd;
                fpol3 = fgd;
            
                V23 = -((Zb*Lk)+(fkon3*Lk*(Lk/2))-(fpol3*L*(L/2)))/L;
                V13 = -V23+(fpol3*L)+(fkon3*Lk)+(Zb);
                Xmax3 = V23/fpol3;
                Mpod3 = -fkon3*Lk*(Lk/2)-(Zb*Lk);
                Mpol3 = V23*Xmax3-(fpol3*Xmax3*(Xmax3/2));
    
            resultM = Math.max(Mpol1, Mpol2, Mpol3) ;
            resultMp = Math.min(Mpod1, Mpod2, Mpod3) ;
            resultV = Math.max((V11 - Lk* fkon1 - Zb), (V12 - Lk* fkon2 - Zb), (V13 - Lk* fkon3 - Zb),);
    
            document.getElementById("M").value = resultM.toFixed(2);
            document.getElementById("Mp").value = resultMp.toFixed(2);
            document.getElementById("V").value = resultV.toFixed(2);
        // } else {
            f = fgd + fqd ;

            //--------zábradlí-----
            
    
            //---------KZS 1 
                fkon1 = fgdKon + fqd;
                fpol1 = f;
            
                V21 = -((Zb*Lk)+(fkon1*Lk*(Lk/2))-(fpol1*L*(L/2)))/L;
                V11 = -V21+(fpol1*L)+(fkon1*Lk)+(Zb);
                Xmax1 = V21/fpol1;
                Mpod1 = -fkon1*Lk*(Lk/2)-(Zb*Lk);
                Mpol1 = V21*Xmax1-(fpol1*Xmax1*(Xmax1/2));
            //---------KZS 2
                fkon2 = fgdKon;
                fpol2 = f;
            
                V22 = -((Zb*Lk)+(fkon2*Lk*(Lk/2))-(fpol2*L*(L/2)))/L;
                V12 = -V22+(fpol2*L)+(fkon2*Lk)+(Zb);
                Xmax2 = V22/fpol2;
                Mpod2 = -fkon2*Lk*(Lk/2)-(Zb*Lk);
                Mpol2 = V22*Xmax2-(fpol2*Xmax2*(Xmax2/2));
             //---------KZS 2
                fkon3 = fgdKon + fqd;
                fpol3 = fgd;
            
                V23 = -((Zb*Lk)+(fkon3*Lk*(Lk/2))-(fpol3*L*(L/2)))/L;
                V13 = -V23+(fpol3*L)+(fkon3*Lk)+(Zb);
                Xmax3 = V23/fpol3;
                Mpod3 = -fkon3*Lk*(Lk/2)-(Zb*Lk);
                Mpol3 = V23*Xmax3-(fpol3*Xmax3*(Xmax3/2));
    
            resultM = Math.max(Mpol1, Mpol2, Mpol3) ;
            resultMp = Math.min(Mpod1, Mpod2, Mpod3) ;
            resultV = Math.max((V11 - Lk* fkon1 - Zb), (V12 - Lk* fkon2 - Zb), (V13 - Lk* fkon3 - Zb),);
    
            document.getElementById("M").value = resultM.toFixed(2);
            document.getElementById("Mp").value = resultMp.toFixed(2);
            document.getElementById("V").value = resultV.toFixed(2);
        // }

   
    }
    
    })
    document.getElementById("M").readOnly = true;
    document.getElementById("Mp").readOnly = true;
    document.getElementById("V").readOnly = true;
}

//------------DESKA-----------

if(document.getElementById("deskaSpojita")){
    document.getElementById("deskaSpojita").addEventListener("input", function () {
         // Načteme hodnoty ze vstupních polí
        const num8 = document.getElementById("pocetPoli").value.trim();
        const num1 = document.getElementById("rozpetiL").value.trim();
        const num2 = document.getElementById("stale").value.trim();
        const num3 = document.getElementById("promenne").value.trim();
        const num5 = document.getElementById("vyskaH").value.trim();
        const num6 = document.getElementById("M").value.trim();
        const num9 = document.getElementById("Mp").value.trim();
        const num4 = document.getElementById("Mpv").value.trim();
        const num7 = document.getElementById("V").value.trim();
         // Převést hodnoty na čísla, pokud nejsou prázdné
        const pocet = num8 !== "" ? parseFloat(num8) : null;
        const L = num1 !== "" ? parseFloat(num1) : null;
        const fgd = num2 !== "" ? parseFloat(num2) : null;
        const fqd = num3 !== "" ? parseFloat(num3) : null;
        const h = num5 !== "" ? parseFloat(num5) : null;
        const M = num6 !== "" ? parseFloat(num6) : null;
        const Mp = num9 !== "" ? parseFloat(num9) : null;
        const Mpv = num4 !== "" ? parseFloat(num4) : null;
        const V = num7 !== "" ? parseFloat(num7) : null;
        // Zkontrolujeme, zda jsou vyplněná povinná pole 1, 2, 3
        if (pocet >= 2){
            document.getElementById("pocetPoli").style.color = "white";
            document.getElementById("pocetPoli").style.caretColor = "white";
        } else{
            document.getElementById("pocetPoli").style.color = "red";
            document.getElementById("pocetPoli").style.caretColor = "white";
        }
    if (L !== null && pocet >= 2){

        document.getElementById("vyskaH").readOnly = false;
        H1 = (1/30)*L*1000;
        H2 = (1/25)*L*1000;
        document.getElementById("rozpetiVyska").textContent = `Rozpetí výšky desky ${H1.toFixed(0)} - ${H2.toFixed(0)} mm`;
    
        if (h > H1 && h < H2){
            document.getElementById("vyskaH").style.color = "#24A669";
            document.getElementById("vyskaH").style.caretColor = "white";
        } else{
            document.getElementById("vyskaH").style.color = "red";
            document.getElementById("vyskaH").style.caretColor = "white";
          
        }

    } 
    // else if( pocet < 2){
    //         document.getElementById("pocetPoli").style.color = "red";
    //         document.getElementById("pocetPoli").style.caretColor = "white";
    // }
     else{
        // Zabráníme uživateli upravovat výšku
     document.getElementById("vyskaH").readOnly = true;
    }
    if (L !== null && fgd !== null && fqd !== null && pocet >= 2) {
            f = fgd + fqd ;
        if(pocet == 2){
            resultM = 0;
            resultMp = 0;
            resultMpv = 0;
            resultV = 0;
        } else if(pocet == 3){
            resultM = 0;
            resultMp = 0;
            resultMpv = 0;
            resultV = 0;
        } else if(pocet == 4){
            resultM = (1/12)*f*L*L;
            resultMp = (1/10)*f*L*L;
            resultMpv = (1/12)*f*L*L;
            resultV = pocet*L*f/(pocet+1);
        } else if(pocet == 5){
            resultM = 0;
            resultMp = 0;
            resultMpv = 0;
            resultV = 0;
        } else if(pocet == 6){
            resultM = 0;
            resultMp = 0;
            resultMpv = 0;
            resultV = 0;
        }
    

            document.getElementById("M").value = resultM.toFixed(2);
            document.getElementById("Mp").value = resultMp.toFixed(2);
            document.getElementById("Mpv").value = resultMpv.toFixed(2);
            document.getElementById("V").value = resultV.toFixed(2);

   
    }
    
    })
    document.getElementById("M").readOnly = true;
    document.getElementById("Mp").readOnly = true;
    document.getElementById("Mpv").readOnly = true;
    document.getElementById("V").readOnly = true;
}