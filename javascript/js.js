const form = document.getElementById('messageForm')
let divMailResponse  = document.getElementById('wait')

 function addWaitIcon(){
  divMailResponse.classList.remove('hidden')
  divMailResponse.innerHTML = ''
  divMailResponse.classList.add('loader')
}
 async function responseHandler(res){
  if(res.ok)
    okResponse()
  else{
    let err  = await res.json()
    errResponse(err)
  }
}
function okResponse(){
  divMailResponse.classList.remove('loader')
  let tag = document.createElement("p")
  tag.classList.add('success')
  let text = document.createTextNode("Se envio con exito")
  tag.appendChild(text)
  divMailResponse.appendChild(tag)
}
function errResponse(err){
  divMailResponse.classList.remove('loader')
  let tag = document.createElement("p")
  tag.classList.add('error')
  let text = document.createTextNode("Ups... "+err.message)
  tag.appendChild(text)
  divMailResponse.appendChild(tag)

}
function formSender(event){
  event.preventDefault()
  let mail = Object.values(event.target).reduce((obj,field) => { obj[field.name] = field.value; return obj }, {})

  fetch('https://git.heroku.com/kanban-api-node.git/sendMail',{
    method: 'POST',
    body: JSON.stringify(mail),
    headers:{
      'Content-Type': 'application/json'
    }
  }).then(res =>responseHandler(res))
    .catch( (err) => console.log('Hubo un problema con la petición Fetch:' + err.message) )

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