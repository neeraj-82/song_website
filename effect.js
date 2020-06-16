function typing(element,speed)
{
    debugger
    var text=element.innerHTML;
    element.innerHTML="";
    var i=0;
    var timer= setInterval(function()
    {
        if(i<text.length)
        {
            element.append(text.charAt(i));
            i++;
        }
        else{
                clearInterval(timer);
            }
    },speed);
}

    var speed=200;
    var h1=document.querySelector(".heading");
    var p=document.querySelector(".subheading");
    var delay=speed*50+75;
    debugger;
    typing(h1,speed);
    setTimeout(function(){
    p.style.display="inline-block";
    typing(p,speed);
    },delay);

