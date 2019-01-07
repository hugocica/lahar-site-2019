prices = {
	"5" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"10" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"25" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"50" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"75" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"100" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"125" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	},
	"150" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},

	},
	"200" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":549,
			"year":5490/12
		},
	}
}


numberOfContacts = "5";
paymentPeriod = "month"
plans = [
	"basic",
	"professional",
	"enterprise"
];

function changeNumberOfContacts(e) {
	for (key in prices) {
		document.getElementById("contact"+key+"button").classList.remove("active");
	}
	e.target.classList.add("active");
	numberOfContacts = e.target.getAttribute("data-value");
	changePrice();
}

function changePaymentPeriod(e) {
	if (e.target.getAttribute("data-value")) {
		document.getElementById("paymentPeriodmonthButton").classList.remove("active");
		document.getElementById("paymentPeriodyearButton").classList.remove("active");
		e.target.parentNode.classList.add("active");

		paymentPeriod = e.target.getAttribute("data-value");

		for(j of document.querySelectorAll(".monthEquivalent")){
			j.style.display = paymentPeriod == "month" ? "none" : "block";
		}

		changePrice();
	}
}

function changePrice() {
	for (plan of plans) {
		document.getElementById("planPrice-"+plan).innerHTML = Math.ceil(prices[numberOfContacts][plan][paymentPeriod]);
		document.getElementById('equivalentPrice-month-'+plan).innerHTML = prices[numberOfContacts][plan][paymentPeriod] * 12
	}

}

function arrowFoward() {
	if(document.querySelector('.w-tab-link.w--current').nextElementSibling.classList && document.querySelector('.w-tab-link.w--current').nextElementSibling.classList.contains('tab-link')) {
		document.querySelector('.w-tab-link.w--current').nextElementSibling.click()
	}
}

function arrowBackwards() {
	if(document.querySelector('.w-tab-link.w--current').previousElementSibling.classList && document.querySelector('.w-tab-link.w--current').previousElementSibling.classList.contains('tab-link')) {
		document.querySelector('.w-tab-link.w--current').previousElementSibling.click()
	}
}

function changeLanguage(lng) {
	var url =  window.location.toString().replace(/\/en\/|\/es\//, '/');
	window.location = url.replace(/(\/[\w.-]+?)$/, (lng ? "/"+lng : '')+"$1");
}


$(document).ready(function(){
	var hBanner = $(".section-hero").height();
	var offPage = $(document).scrollTop();

	if((0.9*offPage) >= hBanner)
		$(".nav-off").css({"opacity":"1","display":"block","transform": "translate(0px, 0px)"})
});
