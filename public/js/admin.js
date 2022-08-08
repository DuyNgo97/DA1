function loadFunction() {
  // body...
  var today = new Date();
  today.toLocaleString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  var time =
    today.getHours() +
    "h-" +
    today.getMinutes() +
    "m-" +
    today.getSeconds() +
    "s";

  if (dd < 10) {
    dd = "0" + dd;
  }
  if (mm < 10) {
    mm = "0" + mm;
  }

  today = yyyy + "-" + mm + "-" + dd + "-" + time;
  return today;
}
document.getElementById("today").innerHTML =
  '<input type="text" name="dateTao" value="' + loadFunction() + '" ><br>';

function preimg() {
  var inputIMG = document.querySelector(".imgPre").files;
  console.log(inputIMG.length);
  if (inputIMG.length > 0) {
    var fileToLoad = inputIMG[0];
    console.log(fileToLoad);
    var reader = new FileReader();
    reader.onload = function (event) {
      var src = event.target.result;
      var newIMG = document.createElement("img");
      newIMG.src = src;
      newIMG.style.width = "200px";
      newIMG.style.height = "100px";
      console.log(src);
      document.querySelector(".img_upp").innerHTML = newIMG.outerHTML;
    };
    reader.readAsDataURL(fileToLoad);
  }
}

function preimg1() {
  var inputIMG = document.querySelector(".imgPre1").files;
  console.log(inputIMG.length);
  if (inputIMG.length > 0) {
    var fileToLoad = inputIMG[0];
    console.log(fileToLoad);
    var reader = new FileReader();
    reader.onload = function (event) {
      var src = event.target.result;
      var newIMG = document.createElement("img");
      newIMG.src = src;
      newIMG.style.width = "200px";
      newIMG.style.height = "100px";
      console.log(src);
      document.querySelector(".img_upp1").innerHTML = newIMG.outerHTML;
    };
    reader.readAsDataURL(fileToLoad);
  }
}

function preimg2() {
  var inputIMG = document.querySelector(".imgPre2").files;
  console.log(inputIMG.length);
  if (inputIMG.length > 0) {
    var fileToLoad = inputIMG[0];
    console.log(fileToLoad);
    var reader = new FileReader();
    reader.onload = function (event) {
      var src = event.target.result;
      var newIMG = document.createElement("img");
      newIMG.src = src;
      newIMG.style.width = "200px";
      newIMG.style.height = "100px";
      console.log(src);
      document.querySelector(".img_upp2").innerHTML = newIMG.outerHTML;
    };
    reader.readAsDataURL(fileToLoad);
  }
}

function preimg3() {
  var inputIMG = document.querySelector(".imgPre3").files;
  console.log(inputIMG.length);
  if (inputIMG.length > 0) {
    var fileToLoad = inputIMG[0];
    console.log(fileToLoad);
    var reader = new FileReader();
    reader.onload = function (event) {
      var src = event.target.result;
      var newIMG = document.createElement("img");
      newIMG.src = src;
      newIMG.style.width = "200px";
      newIMG.style.height = "100px";
      console.log(src);
      document.querySelector(".img_upp3").innerHTML = newIMG.outerHTML;
    };
    reader.readAsDataURL(fileToLoad);
  }
}

function preimg4() {
  var inputIMG = document.querySelector(".imgPre4").files;
  console.log(inputIMG.length);
  if (inputIMG.length > 0) {
    var fileToLoad = inputIMG[0];
    console.log(fileToLoad);
    var reader = new FileReader();
    reader.onload = function (event) {
      var src = event.target.result;
      var newIMG = document.createElement("img");
      newIMG.src = src;
      newIMG.style.width = "200px";
      newIMG.style.height = "100px";
      console.log(src);
      document.querySelector(".img_upp4").innerHTML = newIMG.outerHTML;
    };
    reader.readAsDataURL(fileToLoad);
  }
}

// fetch("https://api2.binance.com/api/v3/ticker/24hr")
//   .then((response) => response.json())
//   .then((data) => {
//     let rows = data.map(
//       (row) => `
//     <tr>
//       <td>${row.symbol}</td>
//       <td>${row.priceChange}</td>
//     </tr>`
//     ).catch((error) => {if (error) lasdfj;lkasdkjf});

//     document.getElementById("table-data").innerHTML = rows.join("");
//   });
