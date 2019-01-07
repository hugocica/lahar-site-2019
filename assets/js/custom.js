prices = {
	"5" : {
		"basic":{
			"month":229,
			"year":2290/12,
			"id_plano_month": 61,
			"id_plano_year": 62,
			"id_plano_config_month": 1,
			"id_plano_config_year": 1
		},
		"professional":{
			"month":349,
			"year":3490/12,
			"id_plano_month": 63,
			"id_plano_year": 64,
			"id_plano_config_month": 1,
			"id_plano_config_year": 1
		},
		"enterprise":{
			"month":979,
			"year":9790/12,
			"id_plano_month": 65,
			"id_plano_year": 66,
			"id_plano_config_month": 1,
			"id_plano_config_year": 1
		},
	},
	"10" : {
		"basic":{
			"month":275,
			"year":2750/12
		},
		"professional":{
			"month":389,
			"year":3890/12
		},
		"enterprise":{
			"month":1159,
			"year":11590/12
		},
	},
	"25" : {
		"basic":{
			"month":349,
			"year":3490/12
		},
		"professional":{
			"month":518,
			"year":5180/12
		},
		"enterprise":{
			"month":1239,
			"year":12390/12
		},
	},
	"50" : {
		"basic":{
			"month":525,
			"year":5250/12
		},
		"professional":{
			"month":660,
			"year":6600/12
		},
		"enterprise":{
			"month":1509,
			"year":15090/12
		},
	},
	"75" : {
		"basic":{
			"month":755,
			"year":7550/12
		},
		"professional":{
			"month":970,
			"year":9700/12
		},
		"enterprise":{
			"month":1769,
			"year":17690/12
		},
	},
	"100" : {
		"basic":{
			"month":950,
			"year":9500/12
		},
		"professional":{
			"month":1199,
			"year":11990/12
		},
		"enterprise":{
			"month":1969,
			"year":19690/12
		},
	},
	"125" : {
		"basic":{
			"month":1120,
			"year":11200/12
		},
		"professional":{
			"month":1319,
			"year":13190/12
		},
		"enterprise":{
			"month":2149,
			"year":21490/12
		},
	},
	"150" : {
		"basic":{
			"month":1350,
			"year":13500/12
		},
		"professional":{
			"month":1519,
			"year":15190/12
		},
		"enterprise":{
			"month":2549,
			"year":25490/12
		},

	},
	"200" : {
		"basic":{
			"month":1729,
			"year":17290/12
		},
		"professional":{
			"month":1929,
			"year":19290/12
		},
		"enterprise":{
			"month":2999,
			"year":29990/12
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
		document.getElementById('equivalentPrice-month-'+plan).innerHTML = prices[numberOfContacts][plan][paymentPeriod] * 12;
		document.querySelectorAll(".div-content-planos[data-plano="+ plan +"]")[0].setAttribute("data-plano-id", prices[numberOfContacts][plan]["id_plano_"+paymentPeriod]);
		document.querySelectorAll(".div-content-planos[data-plano="+ plan +"]")[0].setAttribute("data-plano-config-id", prices[numberOfContacts][plan]["id_plano_config_"+paymentPeriod]);
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

function isCpf(cpf) {
	var soma;
	var resto;
	var i;

	if ( (cpf.length != 11) ||
		(cpf == "00000000000") || (cpf == "11111111111") ||
		(cpf == "22222222222") || (cpf == "33333333333") ||
		(cpf == "44444444444") || (cpf == "55555555555") ||
		(cpf == "66666666666") || (cpf == "77777777777") ||
		(cpf == "88888888888") || (cpf == "99999999999")
	) {
		return false;
	}

	soma = 0;

	for (i = 1; i <= 9; i++) {
		soma += Math.floor(cpf.charAt(i-1)) * (11 - i);
	}

	resto = 11 - (soma - (Math.floor(soma / 11) * 11));

	if ( (resto == 10) || (resto == 11) ) {
		resto = 0;
	}

	if ( resto != Math.floor(cpf.charAt(9)) ) {
		return false;
	}

	soma = 0;

	for (i = 1; i<=10; i++) {
		soma += cpf.charAt(i-1) * (12 - i);
	}

	resto = 11 - (soma - (Math.floor(soma / 11) * 11));

	if ( (resto == 10) || (resto == 11) ) {
		resto = 0;
	}

	if (resto != Math.floor(cpf.charAt(10)) ) {
		return false;
	}

	return true;
}

function isCnpj(cnpj){
	var i;
	var c = cnpj.substr(0,12);
	var dv = cnpj.substr(12,2);
	var d1 = 0;

	for (i = 0; i < 12; i++){
		d1 += c.charAt(11-i)*(2+(i % 8));
	}

	if (d1 == 0) {
		return false;
	}

	d1 = 11 - (d1 % 11);

	if (d1 > 9) {
		d1 = 0;
	}

	if (dv.charAt(0) != d1){
		return false;
	}

	d1 *= 2;

	for (i = 0; i < 12; i++){
		d1 += c.charAt(11-i)*(2+((i+1) % 8));
	}

	d1 = 11 - (d1 % 11);

	if (d1 > 9) {
		d1 = 0;
	}

	if (dv.charAt(1) != d1){
		return false;
	}

	return true;
}

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;

	return re.test(email);
}
