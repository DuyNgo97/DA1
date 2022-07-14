var change = 0;
var slideshow = document.querySelector(".slideshow");
var product = document.querySelectorAll(".product");
var kichthuoc = product[0].clientWidth;
// console.log(kichthuoc);
// console.log(product.length);
var max = kichthuoc * (product.length - 2);
// console.log(max);

function next() {
  // console.log(max)
  if (change < max) {
    change = change + kichthuoc;
  } else {
    change = 0;
  }

  slideshow.style.marginLeft = `-${change}px`;
}

function back() {
  if (change < 1) {
    change = max;
  } else {
    change -= kichthuoc;
  }
  slideshow.style.marginLeft = `-${change}px`;
}

// slick image

var arrIMG = document.querySelectorAll(".img-bot img");
console.log(arrIMG);

var mainIMG = document.querySelector(".img-top img");
console.log(mainIMG.src);

arrIMG.forEach((img) => {
  img.addEventListener("click", () => {
    imgSRC = img.src;
    mainIMG.src = imgSRC;
  });
});

// Zoom IMG
var imgTop = document.querySelector(".img-top");
var img = document.querySelector(".img-top img");
// var cursor = document.querySelector(".cursor");

imgTop.addEventListener("mousemove", (e) => {
  var x = e.clientX - imgTop.style.left - 125;
  var y = e.clientY - imgTop.style.top - 200;
  console.log(x, y);
  var mWidth = imgTop.offsetWidth;
  var mHeight = imgTop.offsetHeight;
  x = (x / mWidth) * 100;
  y = (y / mHeight) * 100;
  // console.log(x, y);
  // imgTop.style.left = x + "px";
  // imgTop.style.top = y + "px";
  // imgTop.style.width = `${x}px`;
  // imgTop.style.height = `${y}px`;
  img.style.transform = `translate(-${x}%,-${y}%) scale(2)`;
  // img.style.transform = "translate(-50%,-50%) scale(2)";
});

imgTop.addEventListener("mouseleave", (e) => {
  img.style.transform = "translate(-50%,-50%) scale(1)";
});
