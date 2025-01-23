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

    const projectDetails = {
        stinger: {
            title: 'Stinger Transition',
            description: 'A transition project created with After Effects. Focused on smooth animations and effects.',
            duration: '4 hours',
            image: 'content/projects/stinger/main.png',
        },
        piwigo: {
            title: 'Piwigo Internship',
            description: '6-month remote full-stack development internship focused on enhancing the Piwigo platform.',
            duration: '6 months',
            image: 'content/projects/piwigo/main.png',
        },
        riot_api: {
            title: 'Riot Games API app',
            description: 'An ongoing project using React and Tailwind to integrate Riot Games API features.',
            duration: 'Ongoing',
            image: 'content/projects/riot_api/main.png',
        },
    };

    $('.project_block').on('click', function() {
        const projectId = $(this).attr('id');
        const details = projectDetails[projectId];

        if (details) {
            popin.html(`
                <div style="display: flex; align-items: flex-start; height: 100%;">
                    <img src="${details.image}" alt="${details.title}" style="width: 40%; height: auto; margin-right: 20px; border-radius: 8px;">
                    <div style="flex: 1; overflow-y: auto;">
                        <h2>${details.title}</h2>
                        <p>${details.description}</p>
                        <p><strong>Duration:</strong> ${details.duration}</p>
                    </div>
                </div>
                <button id="close_popin" style="position: absolute; top: 10px; right: 10px; background: none; border: none; color: #d6d6d6; font-size: 24px; cursor: pointer;">&times;</button>
            `).fadeIn();

            overlay.fadeIn();

            $('#close_popin').on('click', function() {
                popin.fadeOut();
                overlay.fadeOut();
            });
        }
    });

    overlay.on('click', function() {
        popin.fadeOut();
        overlay.fadeOut();
    });
});
