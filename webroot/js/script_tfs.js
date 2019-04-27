
if ($('#purchase-form').find('.show__info').length == 0){
	$('#billing_address_address1').attr('placeholder','số nhà/đường/phường');
	var init_el_info = '<div class="show__info"><h2>Thông tin mua hàng của bạn</h2><ul>';
	init_el_info += '<li id="fullname">Họ và Tên: <span>' + $('#billing_address_full_name').val() + '</span></li>';
	init_el_info += '<li id="phone_number">Số điện thoại: <span>' + $('#billing_address_phone').val() + '</span></li>';
	init_el_info += '<li id="email_address">Email: <span></span>' + $('#order_email').val() + '</li>';
	init_el_info += '<li id="address_number">Số nhà/đường/phường: <span>' + $('#billing_address_address1').val() + '</span></li>';
	init_el_info += '<li id="province">Tỉnh/Thành phố: <span>' + $('#billing_address_province').find('option:selected').text() + '</span></li>';
	init_el_info += '<li id="district">Quận/Huyện: <span>' + $('#shipping_district').find('option:selected').text() + '</span></li>';
	init_el_info += '</ul></div>';
	$(init_el_info).insertAfter('.shiping-ajax');
}
$("#billing_address_full_name").keyup(function(){
	$("#fullname span").text(this.value);
});
$("#billing_address_phone").keyup(function(){
	$("#phone_number span").text(this.value);
});
$("#order_email").keyup(function(){
	$("#email_address span").text(this.value);
});
$("#billing_address_address1").keyup(function(){
	$("#address_number span").text(this.value);
});
$('#billing_address_province').bind('change', function(){
	$('#province span').text($(this).find('option:selected').text());
});
$('#shipping_district').bind('change', function(){
	$('#district span').text($(this).find('option:selected').text());
});
