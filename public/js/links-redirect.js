var url = window.location.pathname;
var locationRegexLanding = new RegExp("landing*");
var locationRegexPreEvent= new RegExp("pre-event*");
var locationRegexSummit = new RegExp("summit*");
var locationRegexBusinessCase = new RegExp("business-case*");
var linkRegisSummit = "http://bit.ly/thesummitsxc"
var linkRegisBCC = "http://bit.ly/getbccsummit"
var linkRegisPreEvent = "http://bit.ly/PreEvent1SXCGrandSummit"

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
    
    let sideButton = document.querySelector("#sideButton");
    sideButton.forEach(elmt => {
        //elmt.addEventListener("hover", function() {setAttribute('src', "{{URL::asset('assets/registration/MoreIcon-Fill.svg')}}")}
        elmt.removeAttribute("onclick");
        elmt.addEventListener("click", function() {scrollto("schedule")}
        )
    });
    let sideHome = document.querySelector("#sideHome");
    sideHome.forEach(elmt => {
        elmt.removeAttribute("href");
        elmt.addEventListener("click", function() {"hidesidebar()"});
    });
    let sideSchedule = document.querySelector("#sideSchedule");
    sideSchedule.forEach(elmt => {
        elmt.addEventListener("onclick", "hidesidebar()");
    });
    let sideEvent = document.querySelector("#sideEvent");
    sideEvent.forEach(elmt => {
        elmt.addEventListener("click", "hidesidebar()");
    });
    document.querySelector("#sideRegist").addEventListener("onclick", "hidesidebar()");
}

if (locationRegexSummit.test(url)){
    document.querySelector("#navRegist").setAttribute('href', linkRegisSummit);
    document.querySelector("#sideRegist").setAttribute('href', linkRegisSummit);
}

if (locationRegexPreEvent.test(url)){
    document.querySelector("#navRegist").setAttribute('href', linkRegisPreEvent);
    document.querySelector("#sideRegist").setAttribute('href', linkRegisPreEvent);
}

if (locationRegexBusinessCase.test(url)){
    document.querySelector("#navRegist").setAttribute('href', linkRegisBCC);
    document.querySelector("#sideRegist").setAttribute('href', linkRegisBCC);
}
