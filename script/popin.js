$(document).ready(function() {
    const popin = $('<div id="project_popin"></div>').css({
        position: 'fixed',
        top: '50%',
        left: '50%',
        transform: 'translate(-50%, -50%)',
        backgroundColor: '#141414',
        color: '#d6d6d6',
        boxShadow: '0 4px 8px rgba(0, 0, 0, 0.2)',
        padding: '20px',
        borderRadius: '10px',
        zIndex: '1000',
        display: 'none',
        width: '50%',
        maxWidth: '90%',
        height: '50%',
        maxHeight: '90%',
        overflowY: 'auto',
    });

    $('body').append(popin);

    const overlay = $('<div id="overlay"></div>').css({
        position: 'fixed',
        top: '0',
        left: '0',
        width: '100%',
        height: '100%',
        backgroundColor: 'rgba(0, 0, 0, 0.5)',
        zIndex: '999',
        display: 'none',
    });

    $('body').append(overlay);

    $('.project_block').on('click', function() {
        const projectId = $(this).attr('id');
        const projectFile = `projects/${projectId}.html`;
    
        $.ajax({
            url: projectFile,
            dataType: 'html',
            success: function(data) {
                popin.html(data).fadeIn();
                overlay.fadeIn();
                
                popin.append('<button id="close_popin" style="position: absolute; top: 10px; right: 10px; background: none; border: none; color: #d6d6d6; font-size: 24px; cursor: pointer;">&times;</button>');
    
                $('#close_popin').on('click', function() {
                    popin.fadeOut();
                    overlay.fadeOut();
                });
            },
            error: function() {
                popin.html('<p style="color: red;">Erreur de chargement du projet.</p>').fadeIn();
                overlay.fadeIn();
            }
        });
    });
    
    overlay.on('click', function() {
        popin.fadeOut();
        overlay.fadeOut();
    });
});    