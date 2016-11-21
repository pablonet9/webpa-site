window.onresize = function() {
	if(document.body.clientWidth < 600) {
		document.getElementsByClassName("nav-bar-text-margins")[0].classList.remove('left');
		document.getElementsByClassName("nav-bar-text-margins")[0].classList.add('center');
	} else {
        document.getElementsByClassName("nav-bar-text-margins")[0].classList.remove('center');
        document.getElementsByClassName("nav-bar-text-margins")[0].classList.add('left');
    }
}
