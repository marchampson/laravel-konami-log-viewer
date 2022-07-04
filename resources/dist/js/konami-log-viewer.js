function launchLogViewer(url) {
    newwindow = window.open(url, 'log-viewer', 'height=300,width=650,screenX=400,screenY=350');
    if (window.focus) {
        newwindow.focus()
    }
    return false;
}

if (window.addEventListener) {
    var capturedkeys = [];
    var konami = "ArrowUp,ArrowUp,ArrowDown,ArrowDown,ArrowLeft,ArrowRight,ArrowLeft,ArrowRight,b,a"
    window.addEventListener("keydown", function (e) {
        capturedkeys.push(e.key);
        if (capturedkeys.toString().indexOf(konami) >= 0) {
            launchLogViewer('/konami-log-viewer');
            capturedkeys = [];
        }
    }, true);
}
