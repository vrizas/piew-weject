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

const ulasanOrang = document.querySelectorAll('.content-container .ulasan-orang');

for(var i = 1; i <= ulasanOrang.length; i++) {
    var ratingOrang = document.querySelectorAll('.content-container .ulasan-ke-'+i+' .rating i');
    var angkaRatingOrang = document.querySelector('.content-container .ulasan-orang .rating-angka-ke'+i).innerHTML;
    activeStar(ratingOrang, angkaRatingOrang);
}


// const tambahMenu = document.querySelectorAll('.menu .menu-kosong');
// const tombolTambahMenu = document.querySelectorAll('.menu .menu-kosong .tombol');
// const formMenu = document.querySelectorAll('.menu .menu-kosong .form-menu');
// const namaMenu = document.querySelectorAll('.daftar-menu h4.nama-menu');
// const imgMenu = document.querySelectorAll('.daftar-menu img.menu-img');
// const hargaMenu = document.querySelectorAll('.daftar-menu p.harga');
// const batalTambahMenu = document.querySelectorAll('.menu-kosong button.batal-tambah-menu');

// for(var i = 0; i < tambahMenu.length; i++) {
//     if(namaMenu[i].innerHTML.length == 0 || !imgMenu[i].hasAttribute('src') || hargaMenu[i].innerHTML.length == 0) {
//         document.querySelectorAll('.menu .daftar-menu')[i].style.display = 'none';
//         tambahMenu[i].style.display = 'flex';
//     }
// }

// tombolTambahMenu[0].addEventListener('click', function() {
//     tombolTambahMenu[0].style.display = 'none';
//     formMenu[0].style.display = 'flex';
//     tambahMenu[0].style.cursor = 'inherit';
// });

// tombolTambahMenu[1].addEventListener('click', function() {
//     tombolTambahMenu[1].style.display = 'none';
//     formMenu[1].style.display = 'flex';
//     tambahMenu[1].style.cursor = 'inherit';
// });

// tombolTambahMenu[2].addEventListener('click', function() {
//     tombolTambahMenu[2].style.display = 'none';
//     formMenu[2].style.display = 'flex';
//     tambahMenu[2].style.cursor = 'inherit';
// });

// tombolTambahMenu[3].addEventListener('click', function() {
//     tombolTambahMenu[3].style.display = 'none';
//     formMenu[3].style.display = 'flex';
//     tambahMenu[3].style.cursor = 'inherit';
// });

// batalTambahMenu[0].addEventListener('click', function() {
//     formMenu[0].style.display = 'none';
//     tombolTambahMenu[0].style.display = 'flex';
//     tambahMenu[0].style.cursor = 'pointer';
// });

// batalTambahMenu[1].addEventListener('click', function() {
//     formMenu[1].style.display = 'none';
//     tombolTambahMenu[1].style.display = 'flex';
//     tambahMenu[1].style.cursor = 'pointer';
// });

// batalTambahMenu[2].addEventListener('click', function() {
//     formMenu[2].style.display = 'none';
//     tombolTambahMenu[2].style.display = 'flex';
//     tambahMenu[2].style.cursor = 'pointer';
// });

// batalTambahMenu[3].addEventListener('click', function() {
//     formMenu[3].style.display = 'none';
//     tombolTambahMenu[3].style.display = 'flex';
//     tambahMenu[3].style.cursor = 'pointer';
// });


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