let inputLeft = document.querySelector('#min');
let inputRight = document.querySelector('#max');
let minVal = parseInt(inputLeft.value);
let maxVal = parseInt(inputRight.value);

/*inputRight.oninput = function() {
    minVal = parseInt(inputLeft.value);
    maxVal = parseInt(inputRight.value);
    if(maxVal <= minVal){
        inputLeft.value = maxVal;
    }
}
inputLeft.oninput = function() {
    minVal = parseInt(inputLeft.value);
    maxVal = parseInt(inputRight.value);
    if(minVal >= maxVal){
        inputRight.value = minVal;

    }
}
function getMinVal(){
    return minVal;
}
function getMaxVal(){
    return maxVal;
}*/

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

function setLeftValue() {
	var _this = inputLeft,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbLeft.style.left = percent + "%";
	range.style.left = percent + "%";
}

function setRightValue() {
	var _this = inputRight,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbRight.style.right = (100 - percent) + "%";
	range.style.right = (100 - percent) + "%";
}

setLeftValue();
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function() {
	thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function() {
	thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function() {
	thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function() {
	thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function() {
	thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function() {
	thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function() {
	thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function() {
	thumbRight.classList.remove("active");
});

let leftVal = document.querySelector('#minval');
let rightVal = document.querySelector('#maxval');
inputLeft.oninput = function() {
    minVal = parseInt(inputLeft.value);
    maxVal = parseInt(inputRight.value);
    rightVal.value = maxVal;
    leftVal.value = minVal;
}
inputRight.oninput = function() {
    minVal = parseInt(inputLeft.value);
    maxVal = parseInt(inputRight.value);
    rightVal.value = maxVal;
    leftVal.value = minVal;
    
}
rightVal.onchange = () => {
    if(rightVal.value < leftVal.value)
    {
        rightVal.value = leftVal.value;
    }
};
leftVal.onchange = () => {
    if(rightVal.value < leftVal.value)
    {
        rightVal.value = leftVal.value;
    }
};