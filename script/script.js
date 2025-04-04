$(document).ready(function () {
    
     $(".section").hide();

    function setInitialPosition() {
        const isMobile = window.innerWidth <= 768;
        $(".section").hide();
        $("#home").css({
            display: "block",
            position: "absolute",
            top: isMobile ? "50%" : "50%",
            left: isMobile ? "50%" : "60%",
            transform: "translate(-50%, -50%)",
            opacity: 1,
            zIndex: 3
        });
    }

    setInitialPosition(); 

    $(window).on("resize", setInitialPosition);

    $(".nav-link").on("click", function (e) {
        e.preventDefault();

        const targetSectionID = $(this).data("section");
        const targetSection = $("#" + targetSectionID);
        const activeSection = $(".section:visible");

        if (targetSection.is(activeSection)) {
            console.log("Déjà actif");
            return;
        }

        activeSection.animate(
            { top: "60%", opacity: 0 },
            500,
            function () {
                activeSection.hide();
            }
        );

        const isMobile = window.innerWidth <= 768;

        targetSection.css({
            display: "block",
            position: "absolute",
            top: "50%",
            left: isMobile ? "100%" : "100%",
            transform: "translate(-50%, -50%)",
            opacity: 0,
            zIndex: 1
        });

        targetSection.animate(
            { left: isMobile ? "50%" : "60%", opacity: 1, zIndex: 3 },
            500
        );
    });
});
