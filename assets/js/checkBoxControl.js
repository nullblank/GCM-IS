var notapplicable = $("#h_kmsdrinkrel_na");
notapplicable.on("click", checkStatus);

function checkStatus() {
	if ($(notapplicable).is(":checked")) {
		$("#h_kmsdrinkrel_f").prop("disabled", true);
		$("#h_kmsdrinkrel_f").prop("checked", false);

		$("#h_kmsdrinkrel_m").prop("disabled", true);
		$("#h_kmsdrinkrel_m").prop("checked", false);

		$("#h_kmsdrinkrel_bs").prop("disabled", true);
		$("#h_kmsdrinkrel_bs").prop("checked", false);

		$("#h_kmsdrinkrel_ua").prop("disabled", true);
		$("#h_kmsdrinkrel_ua").prop("checked", false);

		$("#h_kmsdrinkrel_me").prop("disabled", true);
		$("#h_kmsdrinkrel_me").prop("checked", false);

		$("#h_kmsdrinkrel_g").prop("disabled", true);
		$("#h_kmsdrinkrel_g").prop("checked", false);
	} else {
		$("#h_kmsdrinkrel_f").prop("disabled", false);
		$("#h_kmsdrinkrel_m").prop("disabled", false);
		$("#h_kmsdrinkrel_bs").prop("disabled", false);
		$("#h_kmsdrinkrel_ua").prop("disabled", false);
		$("#h_kmsdrinkrel_me").prop("disabled", false);
		$("#h_kmsdrinkrel_g").prop("disabled", false);
	}
}

