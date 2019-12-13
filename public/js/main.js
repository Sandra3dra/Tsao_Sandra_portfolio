(()=> {
    console.log("Fire!! Welcome to the wonderful inspection of Sandra's portfolio site:D");

    const tL = new TimelineMax({repeat:-1, delay:2});

    const sld1 = document.querySelector("#sld1"),
        sld2 = document.querySelector("#sld2"),
        sld3 = document.querySelector("#sld3"),
        sld4 = document.querySelector("#sld4"),
        sld5 = document.querySelector("#sld5"),
        sld6 = document.querySelector("#sld6");

    tL.fromTo(sld1, 5, {opacity:1}, {opacity:0});
    tL.fromTo(sld2, 4, {opacity:1}, {opacity:0});
    tL.fromTo(sld3, 4, {opacity:1}, {opacity:0});
    tL.fromTo(sld4, 4, {opacity:1}, {opacity:0});
    tL.fromTo(sld5, 4, {opacity:1}, {opacity:0});
    tL.to(sld1, 3, {opacity:1});

    const ham = document.querySelector("#hamburger_menu"),
        navBox = document.querySelector(".mainNav");

    function openNav() {
        navBox.classList.toggle("ococ");
        ham.classList.toggle("rot90");
    }

    ham.addEventListener("click", openNav);

})();