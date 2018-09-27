var elements = document.getElementsByClassName('animate');
var current = 0;
var before = -1;
var imageChange = function changeCurrentimage() {
    // console.log(current);
    if (current >= elements.length)
        current = 0;

    if (before >= elements.length)
        before = 0;

    if (elements[before] != null)
        elements[before].classList.remove('current');
    elements[current].classList.add('current');
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

loopFunction(10000, imageChange);   
