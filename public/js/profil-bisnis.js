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


const headerRating = document.querySelectorAll('.header-container .rating i');
const headerAngkaRating = document.querySelector('.header-container .rating-angka').innerHTML;
activeStar(headerRating, headerAngkaRating);

for(var i = 1; i <= 5; i++) {
    var ratingOrang = document.querySelectorAll('.content-container .ulasan-ke-'+i+' .rating i');
    var angkaRatingOrang = document.querySelector('.content-container .ulasan-orang .rating-angka-ke'+i).innerHTML;
    activeStar(ratingOrang, angkaRatingOrang);
}

function activeStar(rating, angkaRating) {
    if(angkaRating == 0) {
    } else if(angkaRating < 1) {
        rating[0].className = 'bx bxs-star-half';
        rating[1].className = 'bx bx-star';
        rating[2].className = 'bx bx-star';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star'; 
    } else if(angkaRating == 1) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bx-star';
        rating[2].className = 'bx bx-star';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating < 2) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star-half';
        rating[2].className = 'bx bx-star';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating == 2) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bx-star';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating < 3) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star-half';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating == 3) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star';
        rating[3].className = 'bx bx-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating < 4) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star';
        rating[3].className = 'bx bxs-star-half';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating == 4) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star';
        rating[3].className = 'bx bxs-star';
        rating[4].className = 'bx bx-star';
    } else if(angkaRating < 5) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star';
        rating[3].className = 'bx bxs-star';
        rating[4].className = 'bx bxs-star-half';
    } else if(angkaRating == 5) {
        rating[0].className = 'bx bxs-star';
        rating[1].className = 'bx bxs-star';
        rating[2].className = 'bx bxs-star';
        rating[3].className = 'bx bxs-star';
        rating[4].className = 'bx bxs-star';
    } 
}

