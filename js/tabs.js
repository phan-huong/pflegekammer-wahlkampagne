function openTab(evt, tabGroup) {
    var i, tabcontent, tabBtns;
    tabcontent = document.getElementsByClassName("accordion__column");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tabBtns = document.getElementsByClassName("tab_btn");
    for (i = 0; i < tabBtns.length; i++) {
        tabBtns[i].className = tabBtns[i].className.replace(" active", "");
    }
    document.getElementById(tabGroup).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();