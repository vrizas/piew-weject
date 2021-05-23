for(var i = 1; i <= 4; i++) {
    var ratingRestaurant = document.querySelectorAll('.content-container .content-pilihan-kami .rating-ke-'+i+' i');
    var angkaRatingRestaurant = document.querySelector('.content-container .content-pilihan-kami .rating-angka-ke-'+i).innerHTML;
    activeStar(ratingRestaurant, angkaRatingRestaurant);
}

for(var i = 1; i <= 4; i++) {
    var ratingRestaurant = document.querySelectorAll('.content-container .content-random .rating-ke-'+i+' i');
    var angkaRatingRestaurant = document.querySelector('.content-container .content-random .rating-angka-ke-'+i).innerHTML;
    activeStar(ratingRestaurant, angkaRatingRestaurant);
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