function ageCalculator() {
	var userinput = document.getElementById("DOB").value;
	var dob = new Date(userinput);
	var month_diff = Date.now() - dob.getTime();
	var age_dt = new Date(month_diff);
	var year = age_dt.getUTCFullYear();
	var age = Math.abs(year - 1970);
	return document.getElementById("age").value = age;
}