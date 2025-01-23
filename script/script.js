$(document).ready(function () {

    // let currentLang = "en";

    // function loadTranslations(lang) {
    //     $.getJSON("translations/translations.json", function (data) {
    //         const translations = data[lang];

    //         $("h1").text(translations.title);
    //         $("h2").text(translations.subtitle);
    //         $("h5").html(translations.design);

    //         $(".nav-link[data-section='section1']").text(translations.nav.about);
    //         $(".nav-link[data-section='section2']").text(translations.nav.projects);
    //         $(".nav-link[data-section='section3']").text(translations.nav.contact);

    //         $("#home").text(translations.sections.home);
    //         $("#section1").text(translations.sections.about);
    //         $("#section2").text(translations.sections.projects);
    //         $("#section3").text(translations.sections.contact);
    //     });
    // }

    // $("#lang-en").on("click", function () {
    //     if (currentLang !== "en") {
    //         currentLang = "en";
    //         loadTranslations(currentLang);
    //         $("#lang-en").hide();
    //         $("#lang-fr").show();
    //     }
    // });

    // $("#lang-fr").on("click", function () {
    //     if (currentLang !== "fr") {
    //         currentLang = "fr";
    //         loadTranslations(currentLang);
    //         $("#lang-fr").hide();
    //         $("#lang-en").show();
    //     }
    // });

    // loadTranslations(currentLang);
    // if (currentLang === "en") {
    //     $("#lang-en").hide();
    // }
    

    $(".section").hide();

    $("#home").css({
        display: "block",
        position: "absolute",
        top: "50%",
        left: "60%",
        transform: "translate(-50%, -50%)",
        opacity: 1,
        zIndex: 3
    });

    $(".nav-link").on("click", function (e) {
        e.preventDefault();

        const targetSectionID = $(this).data("section");
        const targetSection = $("#" + targetSectionID);
        const activeSection = $(".section:visible");

        if (targetSection.is(activeSection)) {
            console.log("active already");
            return;
        }

        activeSection.animate(
            { top: "60%", opacity: 0 },
            500,
            function () {
                activeSection.hide();
            }
        );

        targetSection.css({
            display: "block",
            position: "absolute",
            top: "50%",
            left: "100%",
            transform: "translate(-50%, -50%)",
            opacity: 0,
            zIndex: 1
        });

        targetSection.animate(
            { left: "60%", opacity: 1, zIndex: 3},
            500
        );
    });
});
