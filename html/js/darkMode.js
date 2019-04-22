function makeDark() {
	$('body').removeClass('light');
	$('body').addClass('dark');
	$('div.row div.card').addClass('bg-dark');
	$('div.row div.card').addClass('text-white');
}

function makeLight() {
	$('body').removeClass('dark');
	$('body').addClass('light');
	$('div.row div.card').removeClass('bg-dark');
	$('div.row div.card').removeClass('text-white');
}

function myFunction(x) {
	if (x.matches) {
		makeDark();
	} else {
		makeLight();
	}
}

var x = window.matchMedia("(prefers-color-scheme: dark)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

if ('AmbientLightSensor' in window) {
	const sensor = new AmbientLightSensor();
	sensor.onreading = () => {
		console.log('Current light level:', sensor.illuminance);
		if (10 > sensor.illuminance) {
			makeDark();
		} else {
			makeLight();
		}
	};
	sensor.onerror = (event) => {
		console.error(event.error);
	};
	sensor.start();
}

function manualDarkMode(checked) {
	if (checked) {
		makeDark();
	} else {
		makeLight();
	}
	if (typeof(Storage) !== "undefined") {
		var retrievedSettings = JSON.parse(localStorage.getItem('siteSettings')) || {};
		retrievedSettings.darkMode = checked;
		localStorage.setItem('siteSettings', JSON.stringify(retrievedSettings));
	}
}

$(function() {
	if (typeof(Storage) !== "undefined") {
		// Code for localStorage/sessionStorage.
		var retrievedSettings = JSON.parse(localStorage.getItem('siteSettings'));
		$('header nav label input:checkbox').prop('checked', retrievedSettings.darkMode);
		if (retrievedSettings.darkMode) {
			makeDark();
		} else {
			makeLight();
		}
	}
});