const form = document.getElementById('messageForm')

function addWaitIcon(){
  let icon  = document.getElementById('wait')
  icon.classList.remove('hidden')
}

function formSender(event){
  event.preventDefault()
  let mail = Object.values(event.target).reduce((obj,field) => { obj[field.name] = field.value; return obj }, {})
  let httpRequest = new XMLHttpRequest()

  httpRequest.open('POST','https://git.heroku.com/kanban-api-node.git',mail)
  httpRequest.send()
  addWaitIcon()
}

form.addEventListener('submit', formSender);

function uncheck() {
  document.getElementById("menu-btn").checked = false
}

function scroll2Proyects(classdiv) {
  /*close menu*/
  let place = document.getElementById(classdiv)
  uncheck()
  if (screen.width <= 768) {
    /* 48em resolution*/
    setTimeout(() => place.scrollIntoView(), 210)
  } else {
    place.scrollIntoView()
  }
}