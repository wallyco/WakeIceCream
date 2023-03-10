const url = new URLSearchParams(window.location.search);
const roleValue = url.get('role');

function redirectUser(location){
  document.location.href = '/dashboard'+location+'.html?role='+roleValue;
}