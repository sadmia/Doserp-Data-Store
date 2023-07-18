"use strict";


let yourNameCopy = document.getElementById("yourNameCopy");
let fatherNameCopy = document.getElementById("fatherNameCopy");
let motherNameCopy = document.getElementById("motherNameCopy");
let dateOfBarthCopy = document.getElementById("dateOfBarthCopy");
let nidNumberCopy = document.getElementById("nidNumberCopy");
let phoneNumberCopy = document.getElementById("phoneNumberCopy");
let addressCopy = document.getElementById("addressCopy");


let yourNameInput = document.getElementById("yourNameInput");
let fatherNameInput = document.getElementById("fatherNameInput");
let motherNameInput = document.getElementById("motherNameInput");
let dateOfBarthInput = document.getElementById("dateOfBarthInput");
let nidNumberInput = document.getElementById("nidNumberInput");
let phoneNumberInput = document.getElementById("phoneNumberInput");
let addressInput = document.getElementById("addressInput");




yourNameCopy.addEventListener("click", function(){
	yourNameInput.select();
	yourNameInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(yourNameInput.value);
	alert("Copied the text: " + yourNameInput.value);
})

fatherNameCopy.addEventListener("click", function(){
	fatherNameInput.select();
	fatherNameInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(fatherNameInput.value);
	alert("Copied the text: " + fatherNameInput.value);
})

motherNameCopy.addEventListener("click", function(){
	motherNameInput.select();
	motherNameInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(motherNameInput.value);
	alert("Copied the text: " + motherNameInput.value);
})

dateOfBarthCopy.addEventListener("click", function(){
	dateOfBarthInput.select();
	dateOfBarthInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(dateOfBarthInput.value);
	alert("Copied the text: " + dateOfBarthInput.value);
})

nidNumberCopy.addEventListener("click", function(){
	nidNumberInput.select();
	nidNumberInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(nidNumberInput.value);
	alert("Copied the text: " + nidNumberInput.value);
})

phoneNumberCopy.addEventListener("click", function(){
	phoneNumberInput.select();
	phoneNumberInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(phoneNumberInput.value);
	alert("Copied the text: " + phoneNumberInput.value);
})

addressCopy.addEventListener("click", function(){
	addressInput.select();
	addressInput.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(addressInput.value);
	alert("Copied the text: " + addressInput.value);
})