function uncheck() {
  document.getElementById("menu-btn").checked = false;
}

function scroll2Proyects(classdiv) {
  /*close menu*/
  let place = document.getElementById(classdiv);
  uncheck();
  if (screen.width <= 768) {
    /* 48em resolution*/
    setTimeout(() => place.scrollIntoView(), 210);
  } else {
    place.scrollIntoView();
  }
}

