/*
bseCustom.js Created to store custom Javascript functions for personal Wordpress site.
Advanced Web Development. Project: Javascript Demo
Bradley Erickson. Email: ericksob1@csp.edu
Created: 7/21/16
Revision: Brad Erickson added popuateDropdown and getSelected functions
*/

//This function populates a dropdown select box that will appear  on the page
function populateDropdown() {
var select = document.getElementById("selectDog");
var options = ["Moose", "Dobie", "Rory", "Milo"];
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}
}
//this function will add a picture and description based upon the dropdown item that is selected.
function getSelected(){
var sel = document.getElementById("selectDog");
var selected = sel.options[sel.selectedIndex].text;
switch(selected) {
case "Moose":
document.getElementById('myImage').src='http://brader.byethost33.com/wordPress/wp-content/uploads/2016/07/moose.jpg';
document.getElementById('dogInfo').innerHTML = "Meet Moose! Moose is a 3 year old Newfoundland mix rescued in 2014. He loves to swim, play fetch and go for walks!"
break;
case "Dobie":
document.getElementById('myImage').src='http://brader.byethost33.com/wordPress/wp-content/uploads/2016/07/dobie.jpg';
document.getElementById('dogInfo').innerHTML = "Meet Dobie! Dobie is a 4 year old Doberman mix rescued in 2012. She loves to take naps, go to the dog park and chase the cats!"
break;
case "Rory":
document.getElementById('myImage').src='http://brader.byethost33.com/wordPress/wp-content/uploads/2016/07/rory.jpg';
document.getElementById('dogInfo').innerHTML = "Meet Rory! Rory is a 1 year old Doberman rescued in 2015. Rory loves to play at the dog park, bark at the wind and nap in the sun."
break;
case "Milo":
document.getElementById('myImage').src='http://brader.byethost33.com/wordPress/wp-content/uploads/2016/07/milo.jpg';
document.getElementById('dogInfo').innerHTML = "Meet foster puppy Milo! Milo is a 9 week old Doberman/Black Lab mix. Milo loves to snuggle with his foster dog siblings, terrorize the foster cat siblings, and play fetch!";
break;
default:
document.getElementById('dogInfo').innerHTML = "Hello, please select an option from the drop down menu.";
}
}
function alertTest(params) {
    alert("Hey Im working");
}