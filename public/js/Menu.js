document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('Top').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    document.getElementById('AboutUs').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/#Desc';
    });

    document.getElementById('MenuLink').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('rowMenu').scrollIntoView({ behavior: 'smooth' });
    });

    document.getElementById('Review').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/reviews';
    });

    document.getElementById('insta').addEventListener('click', function() {
        window.location.href = 'https://www.instagram.com/pondokrumahdekor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==';
    });

    document.getElementById('fabo').addEventListener('click', function() {
        window.location.href = 'https://web.facebook.com/profile.php?id=61555359754066';
    });
});
