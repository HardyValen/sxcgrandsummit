function scrollto(link){
    document.querySelector(link).scrollIntoView({behavior: 'smooth'});
}

var url = window.location.href;
var locationRegexLanding = new RegExp("landing*");

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
}