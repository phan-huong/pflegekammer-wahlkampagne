const dropdownPflF = document.getElementById("dropdownPflF");
const dropdownMitF = document.getElementById("dropdownMitF");
const dropdownArbF = document.getElementById("dropdownArbF");
const dropdownThemF = document.getElementById("dropdownThemF");

const pflegeKFooter = document.getElementById("pflegeKFooter");
const pflegeKFootercontent = document.getElementById("pfKFooterContent");

pflegeKFooter.addEventListener("click", () => {
    if(pflegeKFootercontent.className === "pflegeKFootercontent") {
        pflegeKFootercontent.classList.add("pflegeKFootercontentDisplay");
        dropdownPflF.src = "assets/img/dropdown-up.svg";
        themenFooterContent.classList.remove("themenFooterContentIdDisplay");
        arbeitKFootercontent.classList.remove("arbeitKFootercontentCDisplay");
        mitgliedKFootercontent.classList.remove("mitgliedKFootercontentDisplay");
    } else {
        pflegeKFootercontent.classList.remove("pflegeKFootercontentDisplay");
        dropdownPflF.src = "assets/img/dropdown-down.svg";
    }
})


const mitgliedKFooter = document.getElementById("mitgliedKFooter");
const mitgliedKFootercontent = document.getElementById("mitgKFooterContent");

mitgliedKFooter.addEventListener("click", () => {
    if(mitgliedKFootercontent.className === "mitgliedKFootercontent") {
        mitgliedKFootercontent.classList.add("mitgliedKFootercontentDisplay");
        dropdownMitF.src = "assets/img/dropdown-up.svg";
        themenFooterContent.classList.remove("themenFooterContentIdDisplay");
        arbeitKFootercontent.classList.remove("arbeitKFootercontentCDisplay");
        pflegeKFootercontent.classList.remove("pflegeKFootercontentDisplay");
    } else {
        mitgliedKFootercontent.classList.remove("mitgliedKFootercontentDisplay");
        dropdownMitF.src = "assets/img/dropdown-down.svg";
    }
})

const arbKFooterButton = document.getElementById("arbKFooter");
const arbeitKFootercontent = document.getElementById("arKFooterContentId");

arbKFooterButton.addEventListener("click", () => {
    if(arbeitKFootercontent.className === "arbeitKFootercontentC") {
        arbeitKFootercontent.classList.add("arbeitKFootercontentCDisplay");
        dropdownArbF.src = "assets/img/dropdown-up.svg";
        themenFooterContent.classList.remove("themenFooterContentIdDisplay");
        mitgliedKFootercontent.classList.remove("mitgliedKFootercontentDisplay");
        pflegeKFootercontent.classList.remove("pflegeKFootercontentDisplay");
    } else {
        arbeitKFootercontent.classList.remove("arbeitKFootercontentCDisplay");
        dropdownArbF.src = "assets/img/dropdown-down.svg";
    }
})

const themenFooter = document.getElementById("themenFooter");
const themenFooterContent = document.getElementById("themenFooterContentId");

themenFooter.addEventListener("click", () => {
    if(themenFooterContent.className === "themenFooterContent") {
        themenFooterContent.classList.add("themenFooterContentIdDisplay");
        dropdownThemF.src = "assets/img/dropdown-up.svg";
        arbeitKFootercontent.classList.remove("arbeitKFootercontentCDisplay");
        mitgliedKFootercontent.classList.remove("mitgliedKFootercontentDisplay");
        pflegeKFootercontent.classList.remove("pflegeKFootercontentDisplay");
    } else {
        themenFooterContent.classList.remove("themenFooterContentIdDisplay");
        dropdownThemF.src = "assets/img/dropdown-down.svg";
    }
})