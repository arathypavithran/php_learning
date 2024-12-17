but=document.getElementById("sh")
but.addEventListener("click",showhide)
function showhide(){

 var sh=document.getElementById("showhide")
 if( sh.style.display== "block"){
    document.getElementById("showhide").style.display = "none"
 }
 else { 
document.getElementById("showhide").style.display="block"
 }
}



function clock() {
const now = new Date();
document.getElementById('clock').innerText = now.toLocaleString();
}
setInterval(clock,1000);
clock();