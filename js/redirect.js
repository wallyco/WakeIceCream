const url = new URLSearchParams(window.location.search);
const roleValue = localStorage.getItem("role");

function redirectUser(location,wholeURL=false){
  if(!wholeURL){
    document.location.href = '/dashboard'+location+'.html';
  }else{
    document.location.href = location;
  }
}
document.getElementById("username").innerHTML = `Hi, ${localStorage.getItem("username")}`
