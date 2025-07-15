const slides = document.querySelectorAll('.container')

let current = 0

function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active')
        }else{
            slide.classList.remove('active')
        }
    })
}

function nextSlide(){
    current = (current + 1) % slides.length
    showSlide(current)
}

showSlide(current)

setInterval(nextSlide, 8000)

