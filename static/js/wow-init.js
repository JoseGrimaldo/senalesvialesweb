wow = new WOW(
    {
        animateClass: 'animated',
        offset:       100,
        mobile:       false,
        callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    }
);
wow.init();