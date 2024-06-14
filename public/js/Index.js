document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('Top').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    document.getElementById('AboutUs').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('Desc').scrollIntoView({ behavior: 'smooth' });
    });

    document.getElementById('MenuLink').addEventListener('click', function(e) {
        e.preventDefault();
        redirectToMenu();
    });

    document.getElementById('viewMenu').addEventListener('click', function(e) {
        e.preventDefault();
        redirectToMenu();
    });

    document.getElementById('reviewS').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/reviews';
    });

    document.getElementById('insta').addEventListener('click', function() {
        window.open('https://www.instagram.com/pondokrumahdekor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', '_blank');
    });

    document.getElementById('fabo').addEventListener('click', function() {
        window.open('https://web.facebook.com/profile.php?id=61555359754066', '_blank');
    });

    document.getElementById('reviewS').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/reviews';
    });
});

function redirectToMenu() {
    window.location.href = '/menu';
}
