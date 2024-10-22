// Header //

let nav = document.getElementById("headernav");
let cls = document.getElementById("close");
let menubar = document.getElementById("iconbar");

menubar.addEventListener("click", (event) => {
  menubar.style.display = "none";
  nav.style.display = "flex";
  cls.style.display = "flex";
});

cls.addEventListener("click", (event) => {
  cls.style.display = "none";
  nav.style.display = "none";
  menubar.style.display = "flex";
});

menubar.style.display = "flex";
//slider

let btns = document.querySelectorAll("#btn");
let sld1 = document.getElementById("sld1");
let sld2 = document.getElementById("sld2");
let sld3 = document.getElementById("sld3");
let sld4 = document.getElementById("sld4");

sld1.style.display = "flex";
sld2.style.display = "none";
sld3.style.display = "none";
sld4.style.display = "none";

btns[0].classList.add("btnactive");

function remactive() {
  btns.forEach((btn) => {
    if (btn.classList.contains("btnactive")) {
      btn.classList.remove("btnactive");
    }
  });
}

let index = -1;
let nextslide = function () {
  if (index == -1) {
    index++;

    btn0();
  } else if (index == 0) {
    index++;

    btn1();
  } else if (index == 1) {
    index++;

    btn2();
  } else if (index == 2) {
    index++;

    btn3();
  } else {
    index = -1;
  }
};

let intervalid = setInterval(nextslide, 7000);

let btn0 = function () {
  sld1.style.display = "flex";
  sld2.style.display = "none";
  sld3.style.display = "none";
  sld4.style.display = "none";
  remactive();
  btns[0].classList.add("btnactive");
};

let btn1 = function () {
  sld1.style.display = "none";
  sld2.style.display = "flex";
  sld3.style.display = "none";
  sld4.style.display = "none";
  remactive();
  btns[1].classList.add("btnactive");
};

let btn2 = function () {
  sld1.style.display = "none";
  sld2.style.display = "none";
  sld3.style.display = "flex";
  sld4.style.display = "none";
  remactive();
  btns[2].classList.add("btnactive");
};

let btn3 = function () {
  sld1.style.display = "none";
  sld2.style.display = "none";
  sld3.style.display = "none";
  sld4.style.display = "flex";
  remactive();
  btns[3].classList.add("btnactive");
};

btns[0].addEventListener("click", (event) => {
  btn0();
  index = -1;
});

btns[1].addEventListener("click", (event) => {
  btn1();
  index = 0;
});
btns[2].addEventListener("click", (event) => {
  btn2();
  index = 2;
});
btns[3].addEventListener("click", (event) => {
  btn3();
  index = -1;
});
