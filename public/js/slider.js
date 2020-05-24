
function changePreEvent(evt, pre, spk) {
    // clear
    var i;
    var title = document.getElementsByClassName("pre-event-topics");
    for (i = 0; i < title.length; i++) {
        title[i].style.display = "none";
    }
    var slides = document.getElementsByClassName("menu");
    for (i = 0; i < slides.length; i++) {
        slides[i].className = slides[i].className.replace(" active","");
    }
    var speakers = document.getElementsByClassName("pre-event-speakers");
    for (i = 0; i < speakers.length; i++) {
        speakers[i].style.display = "none";
    }
    document.getElementById("pre-event-registration").style.display = "none";

    // get content
    evt.currentTarget.className += " active";
    document.getElementById(pre).style.display = "flex";
    document.getElementById(spk).style.display = "flex";
    if (pre == 'title2') {
        document.getElementById("pre-event-registration").style.display = "flex";
    }
}   

document.getElementById("2").click();
