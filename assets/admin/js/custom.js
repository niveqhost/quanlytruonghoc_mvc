$(document).ready(function(){

	// $.datepicker.regional["vi-VN"] =
	// {
	// 	closeText: "Đóng",
	// 	prevText: "Trước",
	// 	nextText: "Sau",
	// 	currentText: "Hôm nay",
	// 	monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
	// 	monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
	// 	dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
	// 	dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
	// 	dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
	// 	weekHeader: "Tuần",
	// 	dateFormat: "dd/mm/yy",
	// 	firstDay: 1,
	// 	isRTL: false,
	// 	showMonthAfterYear: false,
	// 	yearSuffix: ""
	// };
	//
	// $.datepicker.setDefaults($.datepicker.regional["vi-VN"]);
	//
	// $('#datepicker').datepicker();

	$('.btn-choose-avatar').click(function () {
		$('#edit-avatar').click();
	});

	$("#edit-avatar").change(function(e) {
		for (let i = 0; i < e.originalEvent.srcElement.files.length; i++) {

			let file = e.originalEvent.srcElement.files[i];

			let img = document.createElement("img");
			let reader = new FileReader();
			reader.onloadend = function() {
				 img.src = reader.result;
				 img.style.width = '100px';
			}
			reader.readAsDataURL(file);
			$("#edit-avatar").before(img);
		}
	});
});