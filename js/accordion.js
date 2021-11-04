var acc = document.getElementsByClassName("accordion__column__item");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    var panel = this.nextElementSibling;
    var coursePanel = document.getElementsByClassName("accordion__column__item__panel");
    var courseAccordion = document.getElementsByClassName("accordion__column__item");
    var courseAccordionActive = document.getElementsByClassName("accordion__column__item active");

    
    if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        this.classList.remove("active");
    } else { 
        for (var ii = 0; ii < courseAccordionActive.length; ii++) {
            courseAccordionActive[ii].classList.remove("active");
        }
        for (var iii = 0; iii < coursePanel.length; iii++) {
          this.classList.remove("active");
          coursePanel[iii].style.maxHeight = null;
        }
      panel.style.maxHeight = panel.scrollHeight + "px";
      this.classList.add("active");
    } 
  }
}



