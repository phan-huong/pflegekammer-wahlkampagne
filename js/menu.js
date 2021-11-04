const hamburger = document.getElementById("hamburger");
const menuIcon = document.getElementById("menuIcon");
const menu = document.getElementById("menu");
const login = document.getElementById("login");
const suche = document.getElementById("suche");

menuIcon.addEventListener("click", () => {

    if(hamburger.className === "hamburger") {
        hamburger.className = "cross";
        menu.style.display = "block";
        suche.style.display = "none";
        login.style.display = "none";
        hamburger.style.backgroundColor = "transparent"
    } else {
        hamburger.className = "hamburger";
        menu.style.display = "none";
        suche.style.display = "block";
        login.style.display = "block";
        hamburger.style.backgroundColor = "#42259A";
    }
   
    // hamburger.classList.toggle("cross");
    // if(menu.style.display ==="none") {
    //     hamburger.className = "cross";
    //     menu.className = "menuOpen"
    // } else {
    //     hamburger.className = "hamburger";
    //     menu.className = "none"
    // }
})


// -------- Mobile menu --------  PROBAR CON CLASSLIST //

const dropdownPfK = document.getElementById("dropdownPfK");
const dropdownMit = document.getElementById("dropdownMit");
const dropdownAr = document.getElementById("dropdownAr");
const dropdownTh = document.getElementById("dropdownTh");

const pflegeKammer = document.getElementById("pflegeKammer");
const pflegeKammerContent = document.getElementById("pflegeKammerContent");

pflegeKammer.addEventListener("click", () => {
    if(pflegeKammerContent.className === "pflegeKammerContent") {
        pflegeKammerContent.classList.add("pflegeKammerContentDisplay");
        dropdownPfK.src = "assets/img/dropdown-up.svg";
        mitgliedContent.classList.remove("mitgliedContentDisplay");
        arbeitContent.classList.remove("arbeitContentDisplay");
        themenContent.classList.remove("themenContentDisplay");
    } else {
        pflegeKammerContent.classList.remove("pflegeKammerContentDisplay");
        dropdownPfK.src = "assets/img/dropdown-down.svg";
    }
    
})

const mitgliederbereich = document.getElementById("mitgliederbereich");
const mitgliedContent = document.getElementById("mitgliedContent");

mitgliederbereich.addEventListener("click", () => {
    if(mitgliedContent.className === "mitgliedContent") {
        mitgliedContent.classList.add("mitgliedContentDisplay");
        dropdownMit.src = "assets/img/dropdown-up.svg";
        arbeitContent.classList.remove("arbeitContentDisplay");
        themenContent.classList.remove("themenContentDisplay");
        pflegeKammerContent.classList.remove("pflegeKammerContentDisplay");
    } else {
        mitgliedContent.classList.remove("mitgliedContentDisplay");
        dropdownMit.src = "assets/img/dropdown-down.svg";
    }
    
})

const arbeitgeberbereich = document.getElementById("arbeitgeberbereich");
const arbeitContent = document.getElementById("arbeitContent");

arbeitgeberbereich.addEventListener("click", () => {
    if(arbeitContent.className === "arbeitContent") {
        arbeitContent.classList.add("arbeitContentDisplay");
        dropdownAr.src = "assets/img/dropdown-up.svg";
        mitgliedContent.classList.remove("mitgliedContentDisplay");
        themenContent.classList.remove("themenContentDisplay");
        pflegeKammerContent.classList.remove("pflegeKammerContentDisplay");
    } else {
        arbeitContent.classList.remove("arbeitContentDisplay");
        dropdownAr.src = "assets/img/dropdown-down.svg";
    }
    
})

const themen = document.getElementById("themen");
const themenContent = document.getElementById("themenContent");

themen.addEventListener("click", () => {
    if(themenContent.className === "themenContent") {
        themenContent.classList.add("themenContentDisplay");
        dropdownTh.src = "assets/img/dropdown-up.svg";
        mitgliedContent.classList.remove("mitgliedContentDisplay");
        arbeitContent.classList.remove("arbeitContentDisplay");
        pflegeKammerContent.classList.remove("pflegeKammerContentDisplay");
    } else {
        themenContent.classList.remove("themenContentDisplay");
        dropdownTh.src = "assets/img/dropdown-down.svg";
    }
    
})

