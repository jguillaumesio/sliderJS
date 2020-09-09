var width_img=650;
var nbr_img = document.getElementById("complete").childElementCount-1;
var base=2;
var basepx=-2*width_img;
var autoslide;

function autoSlide()
{   
    autoslide = setInterval(next, 2000);
}

function next(div){
    var div_id=div;
    if(base<nbr_img){
        base+=1;
        basepx=basepx-width_img;
        document.getElementById("complete").style.transform="translateX("+basepx+"px)";
    }
    if(base==nbr_img){
        base=0;
        basepx=0;
        document.getElementById("complete").style.transform="translateX("+basepx+"px)";
    }
}

function previous(div){
    if(base>0){
        base-=1;
        basepx=basepx+width_img;
        document.getElementById("complete").style.transform="translateX("+basepx+"px)";
    }
    if(base==0){
        base=nbr_img;
        basepx=-width_img*base;
        document.getElementById("complete").style.transform="translateX("+basepx+"px)";
    }
}

function stopSlide(){
    clearInterval(autoslide);
}

window.onload=autoSlide();