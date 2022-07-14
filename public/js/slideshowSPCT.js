var change = 0;
var slideshow = document.querySelector(".slideshow");
var product = document.querySelectorAll(".product");
var kichthuoc = product[0].clientWidth;
console.log(kichthuoc);
console.log(product.length);
var max = kichthuoc * (product.length - 2);
console.log(max);

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
