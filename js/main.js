var page = window.location;
//================================================================
//		 			configurations for JAVASCRIPT
//================================================================

var base_url = "localhost";
var about = document.getElementById("about");
var apply = document.getElementById("apply");
var contact = document.getElementById("contact");
var home = document.getElementById("home");
var screen = window.matchMedia("(max-width: 1250px)");
var aboutPeople = document.getElementById("aboutRow");

//================================================================
//		 		END configurations for JAVASCRIPT
//================================================================

//////////////////////////////////////////////////////////////////
//				Calling listeners/functions
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////
if(page == "http://" + base_url + "/signal100/#home" || "https://" + base_url + "/signal100/index.php") {
		document.getElementById("home").className += " " + "active";
} 

apply.addEventListener("click", addClassApply);
home.addEventListener("click", addClassHome);
about.addEventListener("click", addClassAbout);
contact.addEventListener("click", addClassContact);

function addClassApply() {
	apply.className += " " + "active";
	home.classList.remove("active");
	about.classList.remove("active");
	contact.classList.remove("active");
}

function addClassHome() {
	home.className += " " + "active";
	about.classList.remove("active");
	contact.classList.remove("active");
	apply.classList.remove("active");
}

function addClassAbout() {
	about.className += " " + "active";
	home.classList.remove("active");
	contact.classList.remove("active");
	apply.classList.remove("active");
}

function addClassContact() {
	contact.className += " " + "active";
	home.classList.remove("active");
	about.classList.remove("active");
	apply.classList.remove("active");
}


