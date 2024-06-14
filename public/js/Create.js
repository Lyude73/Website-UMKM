document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.fa-star');
    const bintangInput = document.getElementById('bintang');
    const cancelButton = document.querySelector('.cancel');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            let rating = this.getAttribute('data-rating');
            bintangInput.value = rating;

            stars.forEach(s => s.classList.remove('checked'));
            this.classList.add('checked');
            let clickedIndex = Array.from(stars).indexOf(this);
            for (let i = 0; i <= clickedIndex; i++) {
                stars[i].classList.add('checked');
            }
        });

        star.addEventListener('mouseover', function() {
            stars.forEach(s => s.classList.remove('hovered'));
            this.classList.add('hovered');
            this.previousElementSibling && this.previousElementSibling.classList.add('hovered');
        });

        star.addEventListener('mouseout', function() {
            stars.forEach(s => s.classList.remove('hovered'));
        });
    });
    cancelButton.addEventListener('click', () => {
        window.location.href = '/reviews';
    });
});
