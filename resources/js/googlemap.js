import { Loader } from "@googlemaps/js-api-loader";

const loader = new Loader({
	apiKey: document.getElementById('map').getAttribute('data-api-key'),
	version: "weekly",
});

loader.load().then(async () => {
	const { Map } = await google.maps.importLibrary("maps");

	const map = new Map(document.getElementById("map"), {
		center: { lat: 38.9025274, lng: -77.0656669 },
		zoom: 8,
	});

	const image = document.getElementById('map').getAttribute('data-marker');
	const marker = new google.maps.Marker({
		position: { lat: 38.9025274, lng: -77.0656669 },
		map,
		icon: image,
	});
});