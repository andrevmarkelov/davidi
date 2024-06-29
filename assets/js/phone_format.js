function formatPhone(input) {
	let value = input.value.replace(/[^0-9]/g, '');
	if (value.startsWith('80')) {
		value = '375' + value.substring(1);
	}
	input.value = value;
}
