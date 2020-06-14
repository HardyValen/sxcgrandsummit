
function changePreEvent(evt, pre, spk, dsc) {
    // clear
    // let i;
    Array.from(document.getElementsByClassName("pre-event-topics"))
        .forEach(elm => (elm.style.display = "none"));
    // let title = document.getElementsByClassName("pre-event-topics");
    // for (i = 0; i < title.length; i++) {
    //     title[i].style.display = "none";
    // }
    Array.from(document.getElementsByClassName("menu"))
        .forEach(elm => (elm.className = elm.className.replace(" active", "")));
    // let slides = document.getElementsByClassName("menu");
    // for (i = 0; i < slides.length; i++) {
    //     slides[i].className = slides[i].className.replace(" active","");
    // }
    Array.from(document.getElementsByClassName("pre-event-speakers"))
        .forEach(elm => (elm.style.display = "none"));
    let speakers = document.getElementsByClassName("pre-event-speakers");
    for (i = 0; i < speakers.length; i++) {
        speakers[i].style.display = "none";
    }
    Array.from(document.getElementsByClassName("pre-event-description"))
        .forEach(elm => (elm.style.display = "none"));
    let desc = document.getElementsByClassName("pre-event-description");
    for (i = 0; i < desc.length; i++) {
        desc[i].style.display = "none";
    }
    let regis = document.getElementsByClassName("pre-event-registration");

    // get content
    evt.currentTarget.className += " active";
    document.getElementById(pre).style.display = "flex";
    document.getElementById(spk).style.display = "flex";
    document.getElementById(dsc).style.display = "flex";
    if (pre == 'title2') {
        document.getElementById("pre-event-registration").style.display = "flex";
    } else if (pre == 'title3') {
        document.getElementById("pre-event-registration").style.display = "flex";
    }
}   

document.getElementById("3").click();
