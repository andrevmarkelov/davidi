document.addEventListener('DOMContentLoaded', function() {
	const organizationSchema = {
		"@context": "https://schema.org",
		"@type": "Organization",
		"name": "DaviDi Дом красивых волос в Молодечно",
		"url": "https://www.davidi.by/",
		"logo": "https://www.davidi.by/assets/img/logo.png",
		"contactPoint": {
			"@type": "ContactPoint",
			"telephone": "+375259882463",
			"contactType": "Customer Service"
		}
	};

	const localBusinessSchema = {
		"@context": "https://schema.org",
		"@type": "LocalBusiness",
		"name": "DaviDi Дом красивых волос в Молодечно",
		"image": "https://www.davidi.by/assets/img/logo.png",
		"@id": "https://www.davidi.by/",
		"url": "https://www.davidi.by/",
		"telephone": "+375259882463",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Богдана Хмельницкого 22Г",
			"addressLocality": "Молодечно",
			"addressRegion": "Минская область",
			"postalCode": "222306",
			"addressCountry": "Беларусь"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": 54.299866,
			"longitude": 26.841229
		},
		"openingHoursSpecification": {
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday",
				"Saturday",
				"Sunday"
			],
			"opens": "10:00",
			"closes": "22:00"
		}
	};

	const addSchema = (schema) => {
		const script = document.createElement('script');
		script.type = 'application/ld+json';
		script.text = JSON.stringify(schema);
		document.head.appendChild(script);
	}

	addSchema(organizationSchema);
	addSchema(localBusinessSchema);
});
