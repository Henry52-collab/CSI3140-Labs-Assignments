var dragImage = document.getElementById("dragImage");
var container = document.getElementById("container");
var offsetX, offsetY,flag = false;

//Event handler for absolute position
function mouseOwn(e){
    flag = true;
    dragImage.style.position = "absolute";
    offsetX = e.clientX - dragImage.getBoundingClientRect().left;
    offsetY = e.clientY - dragImage.getBoundingClientRect().top;
    e.preventDefault();
}
//Event handler for start of dragging
function startDragging(e){
    flag = true;
    offsetX = e.clientX - dragImage.getBoundingClientRect().left;
    offsetY = e.clientY - dragImage.getBoundingClientRect().top;
}

//Event handler for dragging
function drag(e){
    if(flag){
        var x = e.clientX - offsetX;
        var y = e.clientY - offsetY;
        dragImage.style.left = x + "px";
        dragImage.style.top = y + "px";
    }
}

//Event handler for end of dragging
function stopDragging(){
    flag = false;
}

//Event handler for mouseleave
function mouseLeave(e){
    flag = false;
}

document.addEventListener("mouseup",stopDragging);
dragImage.addEventListener("mousedown",startDragging,false);
container.addEventListener("mousemove",drag,false);
dragImage.addEventListener("mouseup",stopDragging,false);
container.addEventListener("mouseleave",mouseLeave,false);
dragImage.addEventListener("mousedown",mouseOwn);