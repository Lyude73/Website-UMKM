function toggleSelectionBox(event, id) {
    event.stopPropagation();
    var box = document.getElementById('selectionBox-' + id);
    if (box.style.display === 'block') {
        box.style.display = 'none';
    } else {
        box.style.display = 'block';
    }
}
document.addEventListener('click', function(event) {
    var boxes = document.querySelectorAll('.selection-box');
    boxes.forEach(function(box) {
        box.style.display = 'none';
    });
});
document.getElementById('insta').addEventListener('click', function () {
    window.location.href = 'https://www.instagram.com/pondokrumahdekor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==';
});

document.getElementById('fabo').addEventListener('click', function () {
    window.location.href = 'https://web.facebook.com/profile.php?id=61555359754066';
});

function redirectToReview() {
    window.location.href = '/reviews/create';
}
