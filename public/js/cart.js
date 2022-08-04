var vc = document.querySelector("#color");
console.log(vc);

function change(selectObject) {
  var value = selectObject.value;
  var tc = document.querySelector("#tongcong").value;
  var total = document.querySelector("#totaltong");
  var totalall = document.querySelector("#totalall");
  console.log(tc);
  console.log(value);
  total.innerHTML = tc * (1 - value) + " VND";
  totalall.value = tc * (1 - value);
}
