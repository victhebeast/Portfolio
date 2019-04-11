function myFunction(x) {
	if (x.matches) { // If media query matches
		$('body').removeClass('light');
		$('body').addClass('dark');
	} else {
		$('body').removeClass('dark');
		$('body').addClass('light');
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
			$('body').removeClass('light');
			$('body').addClass('dark');
		} else {
			$('body').removeClass('dark');
			$('body').addClass('light');
		}
	};
	sensor.onerror = (event) => {
		console.error(event.error);
	};
	sensor.start();
}

function manualDarkMode(checked) {
	if (checked) {
		$('body').removeClass('light');
		$('body').addClass('dark');
	} else {
		$('body').removeClass('dark');
		$('body').addClass('light');
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
			$('body').removeClass('light');
			$('body').addClass('dark');
		} else {
			$('body').removeClass('dark');
			$('body').addClass('light');
		}
	}
});