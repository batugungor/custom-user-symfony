window.addEventListener('load', function () {
    // get the canvas element and its context

    var canvas = document.getElementById('sketchpad-1');
    var context = canvas.getContext('2d');

    const position = {
        x: $(canvas).offset().left,
        y: $(canvas).offset().top
    };

    // create a drawer which tracks touch movements
    var drawer = {
        isDrawing: false,
        touchstart: function (coors) {
            context.beginPath();
            context.moveTo(coors.x, coors.y);
            this.isDrawing = true;
        },
        touchmove: function (coors) {
            if (this.isDrawing) {
                context.lineTo(coors.x, coors.y);
                context.stroke();
            }
        },
        touchend: function (coors) {
            if (this.isDrawing) {
                this.touchmove(coors);
                this.isDrawing = false;
                document.getElementById('apply_signature-1').value = canvas.toDataURL();
            }
        }
    };

    // create a function to pass touch events and coordinates to drawer
    function draw(event) {

        const mouse = getMousePos(canvas, event);

        var type = null;
        const rect = canvas.getBoundingClientRect();
        // map mouse events to touch events
        switch (event.type) {
            case "mousedown":
                event.touches = [];
                event.touches[0] = {
                    pageX: event.pageX,
                    pageY: event.pageY
                };
                type = "touchstart";
                break;
            case "mousemove":
                event.touches = [];
                event.touches[0] = {
                    pageX: event.pageX,
                    pageY: event.pageY
                };
                type = "touchmove";
                break;
            case "mouseup":
                event.touches = [];
                event.touches[0] = {
                    pageX: event.pageX,
                    pageY: event.pageY
                };
                type = "touchend";
                break;
        }

        // touchend clear the touches[0], so we need to use changedTouches[0]
        var coors;
        if (event.type === "touchend") {
            coors = {
                x: event.changedTouches[0].pageX - position.x,
                y: event.changedTouches[0].pageY - position.y
            };
        } else {
            // get the touch coordinates
            coors = {
                x: event.touches[0].pageX - position.x,
                y: event.touches[0].pageY - position.y
            };
        }
        type = type || event.type
        // pass the coordinates to the appropriate handler
        drawer[type](coors);
    }

    // detect touch capabilities
    var touchAvailable = ('createTouch' in document) || ('ontouchstart' in window);

    // attach the touchstart, touchmove, touchend event listeners.
    if (touchAvailable) {
        canvas.addEventListener('touchstart', draw, false);
        canvas.addEventListener('touchmove', draw, false);
        canvas.addEventListener('touchend', draw, false);
    }
    // attach the mousedown, mousemove, mouseup event listeners.
    else {
        canvas.addEventListener('mousedown', draw, false);
        canvas.addEventListener('mousemove', draw, false);
        canvas.addEventListener('mouseup', draw, false);
    }

    // prevent elastic scrolling
    //document.body.addEventListener('touchmove', function (event) {
    //    event.preventDefault();
    //}, false); // end body.onTouchMove

    const clear = document.getElementById('clear-1');

    clear.addEventListener('click', clearCanvas);

    function clearCanvas() {
        const context = canvas.getContext('2d');

        context.clearRect(0, 0, canvas.width, canvas.height);
    }

//Get Mouse Position
    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
            x: evt.clientX - rect.left,
            y: evt.clientY - rect.top
        };
    }

}, false); // end window.onLoad