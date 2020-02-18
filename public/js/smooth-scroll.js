function scrollto(link){
    document.querySelector(link).scrollIntoView({behavior: 'smooth'});
}

var url = window.location.pathname;
var locationRegexLanding = new RegExp("landing*");
var locationRegexPreEvent= new RegExp("pre-event*");
var locationRegexSummit = new RegExp("summit*");

if (locationRegexLanding.test(url)){
    let navRegist = document.querySelectorAll("#navRegist");
    navRegist.forEach(elmt => {
        elmt.removeAttribute("href");
        elmt.addEventListener("click", function() {scrollto("#registration")}
        )
    });

    let navEvent = document.querySelectorAll("#navEvent");
    navEvent.forEach(elmt => {
        elmt.removeAttribute("href");
        elmt.addEventListener("click", function() {scrollto("#event")}
        )
    });

    let navSchedule = document.querySelectorAll("#navSchedule");
    navSchedule.forEach(elmt => {
        elmt.addEventListener("click", function() {scrollto("#schedule")}
        )
    });

    document.querySelector("#sideRegis").setAttribute('onclick', "hidesidebar()");
}

if (locationRegexSummit.test(url)){
    document.querySelector("#navRegist").setAttribute('href', "/summit/register");
}