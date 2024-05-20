let url = location.href;
const urlObj = new URL(url);

// Get the URLSearchParams object
const params = urlObj.searchParams;

// Extracting individual parameters
const productID = +params.get("product");

let info = {
	name: "Trading & Crypto",
	primaryImage: "https://img.freepik.com/free-vector/flat-computer-logo-template_23-2149008085.jpg",
	price: 299,
	discount: 0.9,
};

document.querySelector(".courseTitle").innerHTML = info.name;
document.querySelector(".courseDescription").innerHTML = info.description;
document.querySelector(".originalPrice").innerHTML = info.price + "$";
document.querySelector(".discountPrice").innerHTML = Math.round(info.price * info.discount) + "$";
document.querySelector(".coursePrimaryImg").style.backgroundImage = `url(${info.primaryImage})`;

let multi = 1;
document.querySelectorAll(".stepPrice").forEach((e) => {
	e.innerHTML = `
	<div class="coursePrice">
		<div class="price">Price: </div>
		<div class="originalPrice">${Math.round(info.price * multi)}$</div>
		<div class="discountPrice">${Math.round(info.price * multi * info.discount)}$</div>
	</div>`;
	multi += 0.2;
});


function displayInitInfo() {
	let step = document.querySelector(".step1");
	document.querySelectorAll(".step").forEach((step) => step.classList.remove("active"));
	step.classList.add("active");
	document.querySelector(".courseTitle").innerHTML = step.children[0].innerHTML.slice(6) + " " + info.name;
	document.querySelector(".courseDescription").innerHTML = step.children[1].innerHTML.slice(6);
	document.querySelector(".coursePrice").innerHTML = step.children[3].innerHTML;
}
displayInitInfo();

document.querySelectorAll(".step").forEach((step) => {
	step.addEventListener("click", (e) => {
		document.querySelectorAll(".step").forEach((step) => step.classList.remove("active"));
		step.classList.add("active");
		document.querySelector(".courseTitle").innerHTML = step.children[0].innerHTML.slice(6) + " " + info.name;
		document.querySelector(".courseDescription").innerHTML = step.children[1].innerHTML.slice(6);
		document.querySelector(".coursePrice").innerHTML = step.children[3].innerHTML;
	});
});
