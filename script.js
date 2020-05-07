let header =
document.querySelector("header");
window.addEventListener('scroll',function(){
if(window.pageYOffset > 100) {
header.className="small-header";
}else{
header.classList='standard-header';
}
}) 