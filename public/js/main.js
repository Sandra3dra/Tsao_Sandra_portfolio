(()=> {
    console.log("Fire!! Welcome to the wonderful inspection of Sandra's portfolio site:D");

    const tL = new TimelineMax({repeat:-1, delay:2});

    const sld1 = document.querySelector("#sld1"),
        sld2 = document.querySelector("#sld2"),
        sld3 = document.querySelector("#sld3"),
        sld4 = document.querySelector("#sld4"),
        sld5 = document.querySelector("#sld5"),
        sld6 = document.querySelector("#sld6"),
        stHov = document.querySelector("#nameHov"),
        stTag = document.querySelector("#nameTag");

    if (sld1, sld2, sld3, sld4, sld5, sld6 === null) {
        console.log("It's not home page:)");
    } else {
        tL.fromTo(sld1, 5, {opacity:1}, {opacity:0});
        tL.fromTo(sld2, 4, {opacity:1}, {opacity:0});
        tL.fromTo(sld3, 4, {opacity:1}, {opacity:0});
        tL.fromTo(sld4, 4, {opacity:1}, {opacity:0});
        tL.fromTo(sld5, 4, {opacity:1}, {opacity:0});
        tL.to(sld1, 3, {opacity:1});
        stTag.addEventListener("mouseover", function(){
            stHov.classList.add("showNameHov");
            console.log("You hovered my name!");
        });
        stTag.addEventListener("mouseout", function(){
            stHov.classList.remove("showNameHov");
        });
    }
    

    const ham = document.querySelector("#hamburger_menu"),
        navBox = document.querySelector(".mainNav"),
        pp = document.querySelector("#pp"),
        ppExit = document.querySelector("#ppExit"),
        ppOpen = document.querySelector("#openPP"),
        drExit = document.querySelector("#videoExit"),
        dr = document.querySelector("#videoWrapper"),
        drOpen = document.querySelector("#dr");

    function toggleNav() {
        navBox.classList.toggle("ococ");
        ham.classList.toggle("rot90");
        console.log("navvv");
    }

    ham.addEventListener("click", toggleNav);

    function openPP() {
        pp.classList.remove("hidden");
        console.log("read some nice pp:P");
    }

    function closePP() {
        pp.classList.add("hidden");
    }

    ppExit.addEventListener("click", closePP);
    ppOpen.addEventListener("click", openPP);

    // function openDR() {
    //     dr.classList.remove("hidden");
    //     console.log("demo reel play!");
    // }

    // function closeDR() {
    //     dr.classList.add("hidden");
    // }

    // if(typeof(dr) != 'undefined' && dr != null){
    //     console.log("demo reel is ready to play");
    // } else{
    //     console.log('something is wrong with demo reel:(');
    // }
    
    // drExit.addEventListener("click", closeDR);
    // drOpen.addEventListener("click", openDR);

    const prevB = document.querySelector("#p-page"),
        nextB = document.querySelector("#n-page");

    if (prevB, nextB === null) {
        console.log("It's not portfolio page:)");
    } else {
        const currentId = document.querySelector("#webID").innerHTML
        nextId = parseInt(currentId) + Number("1");
        prevId = parseInt(currentId) - Number("1");
        nextB.setAttribute("href", "portfolios.php?id=" + nextId);
        prevB.setAttribute("href", "portfolios.php?id=" + prevId);
        if (currentId > "1") {
            prevB.classList.remove("noNeed");
        } else {
            prevB.classList.add("noNeed");
        }
    
        if (currentId < "8") {
            nextB.classList.remove("noNeed");
        } else {
            nextB.classList.add("noNeed");
        }
    }

    

})();