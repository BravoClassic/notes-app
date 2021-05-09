const button = document.querySelector(".form-options button"),
regForm = document.querySelector(".register"),
logForm = document.querySelector(".login"),
btnReg = document.querySelector(".register-btn"),
btnLogin = document.querySelector(".login-btn"),
closeBtn=document.querySelector(".modal-overlay span"),
modalOverlay=document.querySelector(".modal-overlay"),
regLogLink=document.querySelector(".regLog"),
regLogLink1=document.querySelector(".regLog1");

window.onload = ()=>{
  document.body.style.backgroundImage = "url('https://source.unsplash.com/random')";
}
regLogLink.onclick = launchModal;
regLogLink1.onclick=launchModal;
function launchModal(){
  modalOverlay.classList.add("display");
}

closeBtn.onclick = ()=>{
  modalOverlay.classList.remove('display');
}

btnReg.onclick = () =>{
  if (regForm.style.display == "none" ) {
    regForm.style.display = "flex";
    logForm.style.display = "none";
    btnReg.classList.add("active");
    btnLogin.classList.remove("active");
  }
}

btnLogin.onclick = () =>{
  if (logForm.style.display == "none" ) {
    regForm.style.display = "none";
    logForm.style.display = "flex";
    btnLogin.classList.add("active");
    btnReg.classList.remove("active");
  }
}