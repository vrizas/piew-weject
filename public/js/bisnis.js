// const pilihan = document.querySelector('.pilihan');
// const tentang = document.querySelector('.tentang');
// const ulasan = document.querySelector('.ulasan');
// const menu = document.querySelector('.menu');
// const p1 = document.querySelector('h3.pilihan-tentang');
// const p2 = document.querySelector('h3.pilihan-ulasan');
// const p3 = document.querySelector('h3.pilihan-menu');

// pilihan.addEventListener('click', function(e) {
// 	if(e.target.innerHTML === 'Tentang') {
// 		tentang.style.display = 'block';
// 		ulasan.style.display = 'none';
// 		menu.style.display = 'none';
// 		p1.classList.add('active');
// 		p2.classList.remove('active');
// 		p3.classList.remove('active');
// 		tentang.style.transform = 'translateY(-20px)';
// 		tentang.style.opacity = '0';
// 		tentang.style.animation = 'fadeIn .3s forwards ease-out';
// 	}
// 	if(e.target.className === 'pilihan-ulasan') {
// 		tentang.style.display = 'none';
// 		ulasan.style.display = 'block';
// 		menu.style.display = 'none';
// 		p2.classList.add('active');
// 		p1.classList.remove('active');
// 		p3.classList.remove('active');
// 		ulasan.style.transform = 'translateY(-20px)';
// 		ulasan.style.opacity = '0';
// 		ulasan.style.animation = 'fadeIn .3s forwards ease-out';
// 	}
// 	if(e.target.className === 'pilihan-menu') {
// 		tentang.style.display = 'none';
// 		ulasan.style.display = 'none';
// 		menu.style.display = 'flex';
// 		p3.classList.add('active');
// 		p2.classList.remove('active');
// 		p1.classList.remove('active');
// 		menu.style.transform = 'translateY(-20px)';
// 		menu.style.opacity = '0';
// 		menu.style.animation = 'fadeIn .3s forwards ease-out';
// 	}
// });

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