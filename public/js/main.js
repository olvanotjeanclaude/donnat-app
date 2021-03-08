$(document).ready(() => {
    $("#fullpage").fullpage({
        scrollingSpeed: 1000,
        autoScrolling: false,
        scrollHorizontally: true,
        // sectionsColor: ["#e23822", "#ccc", "pink", "lightblue"],
        navigation: true,
        navigationPosition: "right",
        showActiveTooltip: true,
        navigationTooltips: ["accueil", "about us", "our services", "contact"],
        showActiveTooltip: true,
    });

    //animate
    $(".toggleMenuBtn").click(handleMenu);
    $(".close-menu").click(closeMenu);
    $(".close-menu").mouseover(function() {
        $(this).addClass("fa fa-bars").removeClass("fas fa-times");
    });
    $(".close-menu").mouseout(function() {
        $(this).removeClass("fa fa-bars").addClass("fas fa-times");
    });
});

function handleMenu() {
    var isNavigationActive = $("#container-menu").hasClass("menu-active");
    if (!isNavigationActive) {
        $(".toggle-menu")
            .removeClass("fa fa-bars")
            .addClass("fas fa-times d-block d-sm-none");
        $("#container-menu").addClass("menu-active").animate({
            marginLeft: 0,
        });
        $(".navbar").addClass("menu-active");
        $(".logo").attr("src", "image/dna-black-logo.png");
        $(".left-menu").show();
    } else {
        closeMenu();
    }
}

function closeMenu() {
    $("#container-menu")
        .animate({
            marginLeft: "-100%",
        })
        .removeClass("menu-active");
    $(".navbar").removeClass("menu-active");
    $(".logo").attr("src", "image/logo-dna.png");
    $(".toggle-menu")
        .addClass("fa fa-bars")
        .removeClass("fas fa-times d-block d-sm-none");
    $(".left-menu").hide();
}