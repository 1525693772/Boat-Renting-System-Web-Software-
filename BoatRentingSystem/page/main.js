var winWidth = 0;
var winHeight = 0;
function findDimensions() {
    if (document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth) {
        winHeight = document.documentElement.clientHeight;
        winWidth = document.documentElement.clientWidth;
        console.log(winWidth)
        console.log(winHeight)
    }
    return {
        'width': winHeight,
        'height': winWidth
    };
}
