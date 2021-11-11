const order = () => {
	let form = document.getElementById("form"),
		data = new FormData(form);
	let candy = data.get("candy"),
		quantity = Number(data.get("quantity"));
	console.log(form, data);
	console.log(candy, quantity);
};
