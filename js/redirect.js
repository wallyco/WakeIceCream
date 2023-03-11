const url = new URLSearchParams(window.location.search);
const roleValue = url.get('role');

function redirectUser(location,wholeURL=false){
  if(!wholeURL){
    document.location.href = '/dashboard'+location+'.html?role='+roleValue;
  }else{
    document.location.href = location+'?role='+roleValue;
  }
}

