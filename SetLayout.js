
var changeColorMenu = document.getElementById('menu');
var changeColorFooter = document.getElementById('foot');
var colorForm = document.getElementById('color');

if(!localStorage.getItem('color')) {
  populateStorage();
} else {
  setColor();
}

function populateStorage() {
  localStorage.setItem('color', document.getElementById('color').value);
  setColor();
}

function setColor() {
  var currentColor = localStorage.getItem('color');
  
  document.getElementById('color').value = currentColor;
  if(currentColor == "#CCE5FF"){
  	changeColorFooter.style.backgroundColor = '#FFB266';
  }
  else if(currentColor == "#e8f7da"){
    changeColorFooter.style.backgroundColor = '#abc791';
  }
  else if(currentColor == "#e8b7b0"){
    changeColorFooter.style.backgroundColor = '#ebc5e2';
  }
  changeColorMenu.style.backgroundColor = currentColor;
}

colorForm.onchange = populateStorage;