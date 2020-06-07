let url = window.location.pathname;
let locationRegexLanding = new RegExp("landing*");
let locationRegexPreEvent= new RegExp("pre-event*");
let locationRegexSummit = new RegExp("summit*");
let locationRegexBusinessCase = new RegExp("business-case*");
// let linkRegisSummit = "https://sxcgrandsummit.com/summit/register"
// let linkRegisBCC = "https://sxcgrandsummit.com/business-case/register"
// let linkRegisPreEvent = "https://sxcgrandsummit.com/pre-event/register"
let linkRegisSummit = "summit/register"
let linkRegisBCC = "business-case/register"
let linkRegisPreEvent = "pre-event/register"


// $ Link to registers
function update(classname, property, value) {
    Array.from(document.getElementsByClassName(classname)).forEach(elm => (elm[property] = value));
}

update("preLink", "href", linkRegisPreEvent);
update("bccLink", "href", linkRegisBCC);
update("summitLink", "href", linkRegisSummit);


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
        elmt.removeAttribute("href");
        elmt.addEventListener("click", function() {scrollto("#schedule")}
        )
    });
    
    let sideHome = document.querySelectorAll("#sideHome");
    sideHome.forEach(elmt => {
        elmt.removeAttribute("href");
        elmt.addEventListener("click", function() {hidesidebar()});
    });

    let sideSchedule = document.querySelectorAll("#sideSchedule");
    sideSchedule.forEach(elmt => {
        elmt.addEventListener("click", function() {hidesidebar()});
    });
    
    let sideRegist = document.querySelectorAll("#sideRegist");
    sideRegist.forEach(elmt => {
        elmt.addEventListener("click", function() {hidesidebar()});
    });
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
