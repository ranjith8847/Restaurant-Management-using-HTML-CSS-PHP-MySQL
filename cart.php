<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/PaymentListSettings/searchInProducts.js?v=3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/stripeSCA.js?v=3.3.20811" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/stripe.js?v=3.3.20811" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
      productID = {"0":"input_24_1001","1":"input_24_1004","2":"input_24_1003","3":"input_24_1002"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_24_1001":{"price":"50.00","quantityField":"input_24_quantity_1001_0","specialPriceField":"input_24_custom_1001_1","specialPriceList":["50","60.00","70.00","80.00"]},"input_24_1004":{"price":"50.00","quantityField":"input_24_quantity_1004_0","specialPriceField":"input_24_custom_1004_1","specialPriceList":["12.00","10.00","15.00","20.00"]},"input_24_1003":{"price":"50.00","quantityField":"input_24_quantity_1003_0","specialPriceField":"input_24_custom_1003_1","specialPriceList":["7.5","10.00","15.00","20.00"]},"input_24_1002":{"price":"50.00","quantityField":"input_24_quantity_1002_0","specialPriceField":"input_24_custom_1002_1","specialPriceList":["7.5","10.00","15.00","20.00"]}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      JotForm.setStripeSettings('', 'none', 'none', '', 'none', '0');
      JotForm.handleProductLightbox();
      setTimeout(function() {
          $('input_23').hint('ex: myname@example.com');
       }, 20);
      JotForm.setPhoneMaskingValidator( 'input_22_full', '(###) ###-####' );
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Order","type":"control_button"},null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"fullName16","qid":"16","text":"Full Name","type":"control_fullname"},{"name":"address17","qid":"17","text":"Address","type":"control_address"},null,null,null,null,{"name":"phoneNumber22","qid":"22","text":"Phone Number","type":"control_phone"},{"name":"email23","qid":"23","subLabel":"example@example.com","text":"E-mail","type":"control_email"},{"name":"menu","qid":"24","text":"Menu","type":"control_stripe"},null,{"name":"onlineFood","qid":"26","text":"Online Food Order Form","type":"control_head"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Order","type":"control_button"},null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"fullName16","qid":"16","text":"Full Name","type":"control_fullname"},{"name":"address17","qid":"17","text":"Address","type":"control_address"},null,null,null,null,{"name":"phoneNumber22","qid":"22","text":"Phone Number","type":"control_phone"},{"name":"email23","qid":"23","subLabel":"example@example.com","text":"E-mail","type":"control_email"},{"name":"menu","qid":"24","text":"Menu","type":"control_stripe"},null,{"name":"onlineFood","qid":"26","text":"Online Food Order Form","type":"control_head"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.20811" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.20811" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.20811" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
*,
*:after,
*:before {
  box-sizing: border-box;
}
.button555 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.centre555{
margin:0 auto;
    display:block;
}
.form-all {
  font-family: "Inter", sans-serif;
}
.main .jotform-form {
  width: 100%;
  padding: 0 3%;
}
.form-all {
  display: flex;
  flex-direction: column;
  margin: 72px auto;
  width: 100%;
  max-width: 752px;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #f1f5ff;
}
.form-label-left,
.form-label-right {
  width: 230px;
}
.form-label {
  display: flex;
  font-size: 16px;
  font-weight: 500;
  word-break: break-word;
}
.form-label.form-label-auto {
  width: 100%;
  margin-bottom: 14px;
}
.form-label-top {
  width: 100%;
  margin-bottom: 14px;
}
.form-label:not(.form-label-top) {
  margin-right: 10px;
  margin-top: .625em;
  margin-bottom: .625em;
}
.form-label-right {
  justify-content: flex-end;
  text-align: right;
}
.form-all {
  font-size: 16px;
}
.supernova {
  background-color: #ffffff;
  background-color: #f1cbb5;
}
.supernova body {
  background-color: transparent;
}
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border-radius: 3px;
    box-shadow: 0 4px 4px rgba(87, 100, 126, 0.21);
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #2c3345;
}
.form-header-group .form-header {
  color: #2c3345;
}
.form-header-group .form-subHeader {
  color: #404a64;
}
.form-sub-label {
  color: #404a64;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #2c3345;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #404a64;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.radio-button-style-item {
  background-position: center;
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 0;
  margin: 0 12px 12px 0;
  background-color: #4E4E4E;
  border: 1px solid #696969;
}
.radio-button-style-item img {
  opacity: 0;
}
.radio-button-style-item:nth-child(1) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 62'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Ccircle cx='12.5' cy='49.5' r='8.5' fill='%232E69FF'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M43 49.5l3.3 3.5 6.7-7'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(2) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24.9' height='24.9' x='.2' y='37.1' fill='%232E69FF' rx='12.5'/%3E%3Ccircle cx='12.7' cy='49.6' r='3.7' fill='%23fff'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='7' height='7' x='44' y='46' fill='%23fff' rx='1'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(3) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 62 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='22' height='22' x='1.5' y='1.5' stroke='%23C3CAD8' stroke-width='3' rx='11'/%3E%3Cpath fill='%232E69FF' d='M9.3 47c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.4.4.8.6 1.3.6.6 0 1-.2 1.3-.6l12.9-13c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L11.7 49.3 9.3 47z'/%3E%3Cpath fill='%232E69FF' d='M12.7 62.1c7 0 12.6-5.5 12.6-12.5 0-1-.8-1.8-1.8-1.8-1.1 0-1.8.7-1.8 1.8 0 5-4 9-9 9s-8.9-4-8.9-9a8.8 8.8 0 0112-8.4c.9.4 2-.2 2.3-1 .4-1-.2-2-1-2.4a12 12 0 00-4.4-.7C5.7 37.1.2 42.7.2 49.6c0 7 5.6 12.5 12.5 12.5z'/%3E%3Cmask id='a' fill='%23fff'%3E%3Crect width='25' height='25' x='35' rx='2'/%3E%3C/mask%3E%3Crect width='25' height='25' x='35' fill='%23fff' stroke='%23C3CAD8' stroke-width='6' mask='url(%23a)' rx='2'/%3E%3Cpath fill='%232E69FF' d='M51.5 39.8a1.5 1.5 0 000-3v3zm8.1 9.3a1.5 1.5 0 10-3 0h3zm-3.5 10h-17v3h17v-3zm-17.6-.6V40.3h-3v18.2h3zm.5-18.7h12.5v-3H39v3zm20.6 18.7v-9.4h-3v9.4h3zM39 59a.5.5 0 01-.5-.5h-3c0 2 1.6 3.5 3.5 3.5v-3zm17.1 3c2 0 3.5-1.5 3.5-3.5h-3c0 .3-.2.5-.5.5v3zM38.5 40.3c0-.3.3-.5.5-.5v-3c-1.9 0-3.5 1.6-3.5 3.5h3zM44.8 46.8c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.3.3.7.5 1.3.5.5 0 .9-.2 1.2-.5l12.7-12.8c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L47.2 49l-2.4-2.3z'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(4) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 53 57'%3E%3Cdefs/%3E%3Ccircle cx='9' cy='9' r='9' fill='%23C3CAD8'/%3E%3Cpath stroke='%23C3CAD8' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37 9l4.3 5L50 4'/%3E%3Ccircle cx='9' cy='47.8' r='9' fill='%232E69FF'/%3E%3Cpath stroke='%232E69FF' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37.4 48.5l4.1 4.6 8.2-9.3'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(5) {
  display: none;
}
.radio-button-style-item:nth-child(6) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(7) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Ccircle cx='27.4' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Ccircle cx='34.5' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Cpath fill='%232E69FF' d='M31 56c2 0 3.5-1.3 3.5-3h-7c0 1.7 1.6 3 3.5 3z'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3Ccircle cx='10.4' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Ccircle cx='17.5' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Cpath fill='%23C3CAD8' d='M14 16c-2 0-3.5 1.3-3.5 3h7c0-1.7-1.6-3-3.5-3z'/%3E%3C/svg%3E");
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
li.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 10px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
.form-header-group {
  font-family: "Inter", sans-serif;
}
.form-section {
  padding: 0px 38px;
}
div.form-header-group {
  margin: 0px -38px;
}
div.form-header-group {
  padding: 40px 52px;
}
.form-textbox,
.form-textarea {
  border-width: 2px;
  width: 100% !important;
  border-color: #00474d;
  padding: 1px 10px -1px 10px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 310px !important;
}
.form-label {
  font-family: "Inter", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: calc(50% - 8px);
}
.form-line-column.form-line-column-clear {
  width: calc(43%);
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffeded;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  -webkit-box-shadow: 0 0 3px #f23a3c;
  -moz-box-shadow: 0 0 3px #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
}
#propsFormLayout #enableFormCols {
  display: none;
}
#propsLabels .sb-input-color + .sb-seperator + .sb-col-half + .sb-col-half.even {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color + .sb-seperator + .sb-option,
#propsRadio .sb-option + .sb-seperator + .sb-option.sb-col-half {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color {
  padding-left: 18px;
  padding-right: 12px;
}
#propsPageBreaks .sb-option:nth-child(20),
#propsPageBreaks .sb-seperator:nth-child(21) {
  display: none;
}
#propsButtons .sb-option:nth-child(20),
#propsButtons .sb-seperator:nth-child(21) {
  display: none;
}
#buttonSizeChangeContainer {
  display: none;
}
#buttonSizeChangeContainer + .sb-option.sb-col-half.even {
  padding-left: 18px;
  padding-right: 12px;
}


      
      
      
      /*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 756px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #FFFFFF;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #2c3345;
    }
    .form-header-group .form-header {
      color: #2c3345;
    }
    .form-header-group .form-subHeader {
      color: #2c3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2c3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: rgb(241, 203, 181);
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #FFFFFF;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-section.page-section {
    border : 10px solid #00474D;
}

.undefined strong {

}

.form-html p {
    font-size : 35px !important;
}


    /* Injected CSS Code */
</style>

<form class="jotform-form" action="cartval.php" method="post" name="form_202811779150454" id="202811779150454" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="202811779150454" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_26" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Right">
            <div class="header-text httac htvam">
              <h1 id="header_26" class="form-header" data-component="header">
                ORDER FORM
              </h1>
            </div>
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/handekocer/form_files/plate-cuttlery-graphic-illustration_53876-9118.5f077161d80522.90194454.jpg" alt="" width="182" class="header-logo-right" />
            </div>
          </div>
        </div>
      </li>
      <li class="form-line card-3col" data-type="control_stripe" id="id_24" data-payment="true">
        <label class="form-label form-label-top search-enabled" id="label_24" for="input_24"> Menu </label>
        <div id="cid_24" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="stripe-payment-wrapper" data-stripe-currency="USD">
            <div data-wrapper-react="true">
              <div class="filter-container">
                <input type="text" name="productSearch-input" class="form-textbox" id="productSearch-input" size="15" placeholder="Search" autoComplete="off" />
              </div>
              <input type="hidden" name="simple_fpc" data-payment_type="stripe" data-component="payment1" value="24" />
              <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
              <div id="image-overlay" class="overlay-content" style="display:none">
                <img id="current-image" />
                <span class="lb-prev-button">
                  prev
                </span>
                <span class="lb-next-button">
                  next
                </span>
                <span class="lb-close-button">
                  ( X )
                </span>
                <span class="image-overlay-product-container">
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://static.toiimg.com/thumb/54308405.cms?width=1200&amp;height=900" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://images.unsplash.com/photo-1574126154517-d1e0d89ef734?ixlib=rb-1.2.1&amp;w=1000&amp;q=80" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="data:image/jpeg;base64,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"
                      />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://i2.wp.com/www.vegrecipesofindia.com/wp-content/uploads/2013/09/mushroom-fried-rice-recipe-36a.jpg" />
                    </li>
                  </ul>
                </span>
              </div>
              <div data-wrapper-react="true">
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1001" style="display:block">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_24_1001" name="q24_menu[][id]" value="1001" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://static.toiimg.com/thumb/54308405.cms?width=1200&amp;height=900&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_24_1001" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_24_1001">
                            Biryani
                          </span>
                          <span class="form-product-description" id="product-name-description-input_24_1001">
                            Bacon Tapas, Vegan Tapas, Salami Sandwich, Croissant &amp; Cookies, Salty Cookies
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_24_1001_price">
                                00.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_quantity_1001_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <input type="text" size="3" class="form-textbox form-product-custom_quantity" name="itone" id="input_24_quantity_1001_0" value="0" />
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_custom_1001_1" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itonesel" id="input_24_custom_1001_1">
                            <option value="Regular"> Regular </option>
                            <option value="f1"> f1 </option>
                            <option value="f2"> f2 </option>
                            <option value="f3"> f3 </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_24_1001_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1004" style="display:block">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_24_1004" name="q24_menu[][id]" value="1004" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://images.unsplash.com/photo-1574126154517-d1e0d89ef734?ixlib=rb-1.2.1&amp;w=1000&amp;q=80&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_24_1004" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_24_1004">
                            Pizza
                          </span>
                          <span class="form-product-description" id="product-name-description-input_24_1004">
                            Bacon Tapas, Vegan Tapas, Salami Sandwich, Croissant &amp; Cookies, Salty Cookies
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_24_1004_price">
                                00.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_quantity_1004_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <input type="text" size="3" class="form-textbox form-product-custom_quantity" name="ittwo" id="input_24_quantity_1004_0" value="0" />
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_custom_1004_1" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="ittwosel" id="input_24_custom_1004_1">
                            <option value="Regular"> Regular </option>
                            <option value="f1"> f1 </option>
                            <option value="f2"> f2 </option>
                            <option value="f3"> f3 </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_24_1004_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col3 show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1003" style="display:block">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_24_1003" name="q24_menu[][id]" value="1003" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;data:image/jpeg;base64,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&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_24_1003" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_24_1003">
                            Veg Salad
                          </span>
                          <span class="form-product-description" id="product-name-description-input_24_1003">
                            Bacon Tapas, Vegan Tapas, Salami Sandwich, Croissant &amp; Cookies, Salty Cookies
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_24_1003_price">
                                00.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_quantity_1003_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <input type="text" size="3" class="form-textbox form-product-custom_quantity" name="itthree" id="input_24_quantity_1003_0" value="0" />
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_custom_1003_1" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itthreesel" id="input_24_custom_1003_1">
                            <option value="Regular"> Regular </option>
                            <option value="f1"> f1 </option>
                            <option value="f2"> f2 </option>
                            <option value="f3"> f3 </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_24_1003_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1002" style="display:block">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_24_1002" name="q24_menu[][id]" value="1002" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://i2.wp.com/www.vegrecipesofindia.com/wp-content/uploads/2013/09/mushroom-fried-rice-recipe-36a.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_24_1002" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_24_1002">
                            mushroom rice
                          </span>
                          <span class="form-product-description" id="product-name-description-input_24_1002">
                            Bacon Tapas, Vegan Tapas, Salami Sandwich, Croissant &amp; Cookies, Salty Cookies
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_24_1002_price">
                                00.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_quantity_1002_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <input type="text" size="3" class="form-textbox form-product-custom_quantity" name="itfour" id="input_24_quantity_1002_0" value="0" />
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_24_custom_1002_1" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itfoursel" id="input_24_custom_1002_1">
                            <option value="Regular"> Regular </option>
                            <option value="f1"> f1 </option>
                            <option value="f2"> f2 </option>
                            <option value="f3"> f3 </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_24_1002_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="payment_footer new_ui ">
                  <div class="total_area">
                    <div class="form-payment-total">
                      <div id="total-text">
                        Total
                      </div>
                      <div class="form-payment-price">
                        <span data-wrapper-react="true">
                          $
                          <span id="payment_total" name="payment_total">
                            0.00
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr/>
            </div>
            <div id="stripe-templates">
              <div class="stripe-sca-template">
                <div>
                  <table class="payment-up-form-table" style="border:0;margin-bottom:10px" cellPadding="0" cellSpacing="0">
                    <tbody>
                      <tr>
                        <td width="50%">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="first_16"> username </label>
        <div id="cid_16" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_16" name="name" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_16 sublabel_16_first" />
              
            </span>
           
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23"> E-mail </label>
        <div id="cid_23" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="email" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_23 sublabel_input_23" />
            <label class="form-sub-label" for="input_23" id="sublabel_input_23" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_22">
        <label class="form-label form-label-top form-label-auto" id="label_22" for="input_22_full"> Phone Number </label>
        <div id="cid_22" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
	<input type="text" id="input_17_addr_line1" name="phone" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_17 sublabel_17_addr_line1" required="" />
            <label class="form-sub-label is-empty" for="input_22_full" id="sublabel_22_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17_addr_line1"> Address </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_17_addr_line1" name="address" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_17 sublabel_17_addr_line1" required="" />
                 
                </span>
              </span>
            </div>
            
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_rose submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Order
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="202811779150454" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='202811779150454'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "202811779150454-202811779150454";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <div class="formFooter-wrapper formFooter-leftSide">
      
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      
      
    </div>
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.20811"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.20811"></script>