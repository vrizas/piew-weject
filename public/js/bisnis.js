const headerRating = document.querySelectorAll('.header-container .rating i');
const headerAngkaRating = document.querySelector('.header-container .rating-angka').innerHTML;
activeStar(headerRating, headerAngkaRating);

const ulasanOrang = document.querySelectorAll('.content-container .ulasan-orang');

for(var i = 1; i <= ulasanOrang.length; i++) {
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