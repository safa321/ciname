const nextDom = document.getElementById('next');
const prevDom = document.getElementById('prev');

let sliderDom = document.querySelector('.slider');
let sliderListDom = sliderDom.querySelector('.list');
let boxsliderBorderDom = document.querySelector('.slider .boxslider');
let boxsliderItemsDom = boxsliderBorderDom.querySelectorAll('.item');
let timeDom = document.querySelector('.slider .time');

if (boxsliderItemsDom.length > 0) {
    boxsliderBorderDom.appendChild(boxsliderItemsDom[0]);
}

let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function() {
    showSlider('next');
}

prevDom.onclick = function() {
    showSlider('prev');
}

let runTimeOut;
let runNextAuto = setTimeout(() => {
    nextDom.click();
}, timeAutoNext);

function showSlider(type) {
    let sliderItemsDom = sliderListDom.querySelectorAll('.item');
    let boxsliderItemsDom = document.querySelectorAll('.slider .boxslider .item');

    if (sliderItemsDom.length === 0 || boxsliderItemsDom.length === 0) return;

    if (type === 'next') {
        sliderListDom.appendChild(sliderItemsDom[0]);
        boxsliderBorderDom.appendChild(boxsliderItemsDom[0]);
        sliderDom.classList.add('next');
    } else {
        sliderListDom.prepend(sliderItemsDom[sliderItemsDom.length - 1]);
        boxsliderBorderDom.prepend(boxsliderItemsDom[boxsliderItemsDom.length - 1]);
        sliderDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        sliderDom.classList.remove('next');
        sliderDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        nextDom.click();
    }, timeAutoNext);
}

document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way

    // Get the selected value
    const selectedValue = document.getElementById('browser').value;

    // Redirect based on the selected value
    if (selectedValue === "حيرة") {
        window.location.href = "series1.html";
    } else if (selectedValue === "بنات صالح") {
        window.location.href = "series5.html";
    } else if (selectedValue === "ستيلتو") {
        window.location.href = "series9.html";
    } else if (selectedValue === "باي ذنب قتلت") {
        window.location.href = "film1.html";
    } else if (selectedValue === "عدنان ولينا") {
        window.location.href = "series.html";
    } else {
        alert('No matching page found for the selected option.');
    }
});
function changeVideo(newVideoSrc) {
    var videoPlayer = document.getElementById('video-player');
    videoPlayer.src = newVideoSrc;
    videoPlayer.load();
    videoPlayer.play();
}
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});