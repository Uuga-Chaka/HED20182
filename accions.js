var elements = document.getElementsByClassName('animate');
var elementss = document.getElementsByClassName('animated');
var current = 0;
var before = -1;
var imageChange = function changeCurrentimage() {
    console.log(current);
    if (current >= elements.length)
        current = 0;

    if (before >= elements.length)
        before = 0;

    if (elements[before] != null) {
        elements[before].classList.remove('current');
        elementss[before].classList.remove('current');
    }
    elements[current].classList.add('current');
    elementss[current].classList.add('current');
    current++;
    before++;
}

function loopFunction(delay, callback) {
    var loop = function () {
        callback();
        setTimeout(loop, delay);
    };
    loop();
};
//https://stackoverflow.com/questions/995168/textarea-to-resize-based-on-content-length
function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (25+o.scrollHeight)+"px";
  }

loopFunction(10000, imageChange);
