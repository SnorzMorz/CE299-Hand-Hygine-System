// Toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navSmall");
    if(x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

const labelArray = [];
const dataArray = [];

function pushLabelArray(value) {
    labelArray.push(value);
}

function pushDataArray(value) {
    dataArray.push(value);
}




