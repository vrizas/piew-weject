const rating = document.querySelectorAll('.form-ulasan .rating i');
const angkaRating = document.querySelector('.form-ulasan .rating .rating-angka');

rating[0].addEventListener('click', function() {
    if(rating[1].classList.contains('active')||rating[2].classList.contains('active')||rating[3].classList.contains('active')||rating[4].classList.contains('active')) {
        rating[1].classList.remove('active');
        rating[2].classList.remove('active');
        rating[3].classList.remove('active');
        rating[4].classList.remove('active');
    }
    rating[0].classList.add('active');
    angkaRating.setAttribute('value', '1');
});

rating[1].addEventListener('click', function() {
    if(rating[2].classList.contains('active')||rating[3].classList.contains('active')||rating[4].classList.contains('active')) {
        rating[2].classList.remove('active');
        rating[3].classList.remove('active');
        rating[4].classList.remove('active');
    }
    rating[0].classList.add('active');
    rating[1].classList.add('active');
    angkaRating.setAttribute('value', '2');
});

rating[2].addEventListener('click', function() {
    if(rating[3].classList.contains('active')||rating[4].classList.contains('active')) {
        rating[3].classList.remove('active');
        rating[4].classList.remove('active');
    }
    rating[0].classList.add('active');
    rating[1].classList.add('active');
    rating[2].classList.add('active');
    angkaRating.setAttribute('value', '3');
});

rating[3].addEventListener('click', function() {
    if(rating[4].classList.contains('active')) {
        rating[4].classList.remove('active');
    }
    rating[0].classList.add('active');
    rating[1].classList.add('active');
    rating[2].classList.add('active');
    rating[3].classList.add('active');
    angkaRating.setAttribute('value', '4');
});

rating[4].addEventListener('click', function() {
    rating[0].classList.add('active');
    rating[1].classList.add('active');
    rating[2].classList.add('active');
    rating[3].classList.add('active');
    rating[4].classList.add('active');
    angkaRating.setAttribute('value', '5');
});