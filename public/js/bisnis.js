const akun = document.querySelector('.akun');
const drop = document.querySelector('button.drop');
const dropContent = document.querySelector('.drop-content');
akun.addEventListener('click', function() {
    drop.classList.toggle('active');
    dropContent.classList.toggle('active');
});

const pilihan = document.querySelector('.pilihan');
const tentang = document.querySelector('.tentang');
const ulasan = document.querySelector('.ulasan');
const menu = document.querySelector('.menu');
const p1 = document.querySelector('h3.pilihan-tentang');
const p2 = document.querySelector('h3.pilihan-ulasan');
const p3 = document.querySelector('h3.pilihan-menu');

pilihan.addEventListener('click', function(e) {
	if(e.target.innerHTML === 'Tentang') {
        console.log('ok');
		tentang.style.display = 'block';
		ulasan.style.display = 'none';
		menu.style.display = 'none';
		p1.classList.add('active');
		p2.classList.remove('active');
		p3.classList.remove('active');
		tentang.style.transform = 'translateY(-20px)';
		tentang.style.opacity = '0';
		tentang.style.animation = 'fadeIn .3s forwards ease-out';
	}
	if(e.target.className === 'pilihan-ulasan') {
		tentang.style.display = 'none';
		ulasan.style.display = 'block';
		menu.style.display = 'none';
		p2.classList.add('active');
		p1.classList.remove('active');
		p3.classList.remove('active');
		ulasan.style.transform = 'translateY(-20px)';
		ulasan.style.opacity = '0';
		ulasan.style.animation = 'fadeIn .3s forwards ease-out';
	}
	if(e.target.className === 'pilihan-menu') {
		tentang.style.display = 'none';
		ulasan.style.display = 'none';
		menu.style.display = 'flex';
		p3.classList.add('active');
		p2.classList.remove('active');
		p1.classList.remove('active');
		menu.style.transform = 'translateY(-20px)';
		menu.style.opacity = '0';
		menu.style.animation = 'fadeIn .3s forwards ease-out';
	}
});