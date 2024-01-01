const btnScrollToTop = document.getElementById("btnScrollToTop");

btnScrollToTop.addEventListener("click", function() {
    
    // VANILLA JAVASCTIPT (BELOW)
    // ref: https://www.youtube.com/watch?v=FK5DEa1Hvco&ab_channel=dcode
    
    // window.scrollTo(0, 0); (x-coord, y-coord)
    // window.scrollTo(options)

    /* window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    }); */ 

    // jQUERY (BELOW)

    $("html, body").animate({ scrollTop: 0}, "fast");

});
