function dropdowntoggle(e) {
    //document.getElementById("myDropdown").classList.toggle("show");
    var sender = e.srcElement || e.target;
    // document.getElementById(
    //     (sender.id == "myDropdownButton1" ? "myDropdown" :
    //         (sender.id == "myDropdownButton2" ? "myDropdown2":""))
    // ).classList.toggle("show");
    var targetId = (sender.id === "myDropdownButton1" ? "myDropdown" :
        (sender.id === "myDropdownButton2" ? "myDropdown2" :
            (sender.id === "myDropdownButton3" ? "myDropdown3" :
                (sender.id === "myDropdownButton4" ? "myDropdown4" : "") ) ) );

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show') && openDropdown.id != targetId){
            openDropdown.classList.remove('show');
        }
    }
    document.getElementById( targetId ).classList.toggle("show");
}

window.onclick = function(event) {
    if(!event.target.matches('.dropbtn1')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')){
                openDropdown.classList.remove('show');
            }
        }
    }
}