// --------address form----------
const addressbtn = document.querySelector('#address-form')
const addressclose = document.querySelector('#address-close')
let index=0
// console.log(rightbtn)
addressbtn.addEventListener("click", function(){
    document.querySelector(".address-form").style.display = "flex"
})

addressclose.addEventListener("click", function(){
    document.querySelector(".address-form").style.display = "none"
})
// -------------slider---------------

const rightbtn = document.querySelector('.ti-angle-right')
const leftbtn = document.querySelector('.ti-angle-left')
const imgnumber = document.querySelectorAll('.slider-content-left-top img')
console.log(imgnumber.length)

rightbtn.addEventListener("click", function(){
    index=index+1
    if ( index > imgnumber.length - 1) {
        index = 0
    }
    // console.log("ok")
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%"
})

leftbtn.addEventListener("click", function(){
    index=index-1
    if ( index <= 0 ) {
        index = imgnumber.length - 1
    }

    // console.log("ok")
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%"
})
// ------tiêu đề slider------
const imgnumberli = document.querySelectorAll('.slider-content-left-bottom li')
// console.log(imgnumberli)
imgnumberli.forEach(function(image,index){
    image.addEventListener("click",function() {
        removeactive ()
        document.querySelector(".slider-content-left-top").style.right = index * 100 + "%"
        image.classList.add("active")
    })
})
function removeactive (){
    let imgactive = document.querySelector('.active')
    imgactive.classList.remove("active")

}
//  slider automatic slide

function imgAuto () {
    index = index + 1
    if ( index > imgnumber.length - 1) {
        index = 0
    }
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%"

    console.log(index)
}

setInterval(imgAuto,2000)



// slider product animation
const rightbtntwo = document.querySelector('.ti-angle-right-two')
const leftbtntwo = document.querySelector('.ti-angle-left-two')
const imgnumbertwo = document.querySelectorAll('.slider-product-one-content-items')

// console.log(rightbtntwo)
// console.log(leftbtntwo)
rightbtntwo.addEventListener("click",function(){
    index = index + 1
    if(index>imgnumbertwo.length-1) {
        index=0
    }
    document.querySelector(".slider-product-one-content-items-content").style.right = index *100+"%"

})
leftbtntwo.addEventListener("click", function(){
    index = index - 1
    if(index<=0) {
        index=imgnumbertwo.length-1
    }
    document.querySelector(".slider-product-one-content-items-content").style.right = index *100+"%"

})



