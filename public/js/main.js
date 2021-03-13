$(document).ready(() => {
    //validation form
    var form = new FormValidation();
    form.setFormList("#guest", form.getGuestTypeList());
    form.setFormList("#messageObject", form.getMessageList());
    $(document).on("input", "textarea,input", form.handleInputActive);
    $("#sendMessage").click((e) => form.sendForm(e));

    //flage html
    var input = document.querySelector("#telephone");
    window.intlTelInput(input, {
        initialCountry: "mg",
    });

    //fullpage
    $("#fullpage").fullpage({
        autoScrolling: false,
        scrollHorizontally: true,
        anchors: ["home", "about_us", "our_service", "our_contact"],
        navigation: true,
        navigationPosition: "right",
        showActiveTooltip: true,
        navigationTooltips: ["Accueil", "About us", "Our services", "Contact"],
        showActiveTooltip: true,
    });

    //animate
    // $(".toggleMenuBtn").click(handleMenu);
    // $(".close-menu").click(closeMenu);
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