const nextImage = document.getElementById("next-image")
const prevImage = document.getElementById("prev-image")

const imageSet = document.querySelector(".image-set")



let offset = 0

nextImage.addEventListener("click", () => {
    offset -= 100
    if (offset < -300) {
        offset = 0
    }
    imageSet.style.left = offset + "%"
})

prevImage.addEventListener("click", () => {
    offset +=100
    if (offset > 0) {
        offset = -400
    }
    imageSet.style.left = offset + "%"
})