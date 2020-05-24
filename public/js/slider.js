
function changePreEvent(evt, pre) {
    var i;
    var title = document.getElementsByClassName("pre-event-topics");
    for (i = 0; i < title.length; i++) {
        title[i].style.display = "none";
    }
    var slides = document.getElementsByClassName("menu");
    for (i = 0; i < slides.length; i++) {
        slides[i].className = slides[i].className.replace(" active","");
    }
    document.getElementById("pre-event-registration").style.display = "none";
    
    evt.currentTarget.className += " active";
    document.getElementById(pre).style.display = "flex";
    if (pre == 'title2') {
        document.getElementById("pre-event-registration").style.display = "flex";
    }
}   

document.getElementById("2").click();
