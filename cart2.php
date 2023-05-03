<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/payments/PaymentListSettings/searchInProducts.js?v=3.3.21513" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21513" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/paypalcomplete.js?v=3.3.21513" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/paymentUtils.js?v=3.3.21513" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/libraries/promise-polyfill.js"></script>
<script src="https://cdn.jotfor.ms/js/payments/payment_form_embedded.js?v=3.3.21513" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_0_1594143321636","visibility":"Show","isError":false,"field":"14"}],"id":"1594143304509","index":"0","link":"Any","priority":"0","terms":[{"id":"term_0_1594143321636","field":"13","operator":"equals","value":"Yes.","isError":false}],"type":"field"},{"action":[{"id":"action_0_1594143320310","visibility":"Show","isError":false,"field":"12"}],"id":"1594143320309","index":"1","link":"Any","priority":"1","terms":[{"id":"term_0_1594143320310","field":"13","operator":"equals","value":"No, I request for a delivery.","isError":false}],"type":"field"}]);
	JotForm.init(function(){
      productID = {"1":"input_22_1000","2":"input_22_1001","3":"input_22_1002","5":"input_22_1004","6":"input_22_1005","8":"input_22_1006","9":"input_22_1007","10":"input_22_1008","12":"input_22_1009","13":"input_22_1010","15":"input_22_1013","16":"input_22_1014","18":"input_22_1021","19":"input_22_1022","21":"input_22_1025","22":"input_22_1026","24":"input_22_1028","25":"input_22_1029"};
      paymentType = "product";
      JotForm.setCurrencyFormat('INR',true, 'point');
      JotForm.totalCounter({"input_22_1000":{"price":"40","quantityField":"input_22_quantity_1000_0","specialPriceField":"input_22_custom_1000_1","specialPriceList":["40","60.00","50.00","60.00"]},"input_22_1001":{"price":"70.00","quantityField":"input_22_quantity_1001_0","specialPriceField":"input_22_custom_1001_1","specialPriceList":["70.00","90.00","70.00"]},"input_22_1002":{"price":"60.00","quantityField":"input_22_quantity_1002_0","specialPriceField":"input_22_custom_1002_1","specialPriceList":["60.00","70.00","65.00","80.00"]},"input_22_1004":{"price":"40.00","quantityField":"input_22_quantity_1004_0","specialPriceField":"input_22_custom_1004_1","specialPriceList":["40.00","50.00","50.00","50.00"]},"input_22_1005":{"price":"40.00","quantityField":"input_22_quantity_1005_0","specialPriceField":"input_22_custom_1005_1","specialPriceList":["40.00","50.00","50.00","50.00"]},"input_22_1006":{"price":"70.00","quantityField":"input_22_quantity_1006_0","specialPriceField":"input_22_custom_1006_1","specialPriceList":["70.00","90.00","80.00","75.00"]},"input_22_1007":{"price":"80.00","quantityField":"input_22_quantity_1007_0","specialPriceField":"input_22_custom_1007_1","specialPriceList":["80.00","90","90","90"]},"input_22_1008":{"price":"90","quantityField":"input_22_quantity_1008_0","specialPriceField":"input_22_custom_1008_1","specialPriceList":["90","110","100","100"]},"input_22_1009":{"price":"90.00","quantityField":"input_22_quantity_1009_0","specialPriceField":"input_22_custom_1009_1","specialPriceList":["90.00","100.00","110.00","110"]},"input_22_1010":{"price":"90","quantityField":"input_22_quantity_1010_0","specialPriceField":"input_22_custom_1010_1","specialPriceList":["90","100","100","100"]},"input_22_1013":{"price":"100.00","quantityField":"input_22_quantity_1013_0","specialPriceField":"input_22_custom_1013_1","specialPriceList":["100","120","110","110"]},"input_22_1014":{"price":"90.00","quantityField":"input_22_quantity_1014_0","specialPriceField":"input_22_custom_1014_1","specialPriceList":["90.00","95","95","95"]},"input_22_1021":{"price":"30","quantityField":"input_22_quantity_1021_0","specialPriceField":"input_22_custom_1021_1","specialPriceList":["30","35","35","35"]},"input_22_1022":{"price":"30","quantityField":"input_22_quantity_1022_0","specialPriceField":"input_22_custom_1022_1","specialPriceList":["30","35","35","35"]},"input_22_1025":{"price":"50","quantityField":"input_22_quantity_1025_0","specialPriceField":"input_22_custom_1025_1","specialPriceList":["50","50","50","55","50"]},"input_22_1026":{"price":"80","quantityField":"input_22_quantity_1026_0","specialPriceField":"input_22_custom_1026_1","specialPriceList":["80","80","90"]},"input_22_1028":{"price":"30.00","quantityField":"input_22_quantity_1028_0","specialPriceField":"input_22_custom_1028_1","specialPriceList":["30","50"]},"input_22_1029":{"price":"50","quantityField":"input_22_quantity_1029_0","specialPriceField":"input_22_custom_1029_1","specialPriceList":["50.00","80"]}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
JotForm.paymentCategoryHandler(true, true);
      JotForm.handleProductLightbox();
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
      JotForm.alterTexts(undefined);
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"restaurantOrder","qid":"1","text":"Restaurant Order Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Order Now!","type":"control_button"},null,null,null,null,null,null,{"name":"name","qid":"9","text":"Name","type":"control_fullname"},{"name":"email","qid":"10","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"phoneNumber","qid":"11","text":"Phone Number","type":"control_phone"},{"name":"deliveryAddress","qid":"12","text":"Delivery Address","type":"control_address"},null,null,null,null,null,null,null,null,null,{"name":"menu","qid":"22","text":"Menu","type":"control_paypalcomplete"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"restaurantOrder","qid":"1","text":"Restaurant Order Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Order Now!","type":"control_button"},null,null,null,null,null,null,{"name":"name","qid":"9","text":"Name","type":"control_fullname"},{"name":"email","qid":"10","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"phoneNumber","qid":"11","text":"Phone Number","type":"control_phone"},{"name":"deliveryAddress","qid":"12","text":"Delivery Address","type":"control_address"},null,null,null,null,null,null,null,null,null,{"name":"menu","qid":"22","text":"Menu","type":"control_paypalcomplete"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21513" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21513" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21513" />
<form class="jotform-form" action="cartvalnew.php" method="post" name="form_203118555950455" id="203118555950455" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="203118555950455" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">
             Ordering Form
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line card-3col" data-type="control_paypalcomplete" id="id_22" data-payment="true">
        <label class="form-label form-label-top search-enabled category-enabled" id="label_22" for="input_22"> Menu </label>
        <div id="cid_22" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div class="filter-container">
                <div class="multi-select-dropdown category-title-enabled hasSelectAll" id="payment-category-dropdown">
                  <div class="dropdown-container">
                    <div class="select-area">
                      <span class="dropdown-hint">
                        Categories:
                      </span>
                      <span class="selected-values">
                        All
                      </span>
                      <i class="icon">
                      </i>
                    </div>
                    <div class="select-content">
                      <div class="options">
                        <div class="option selected">
                          <input type="checkbox" checked="" value="All" />
                          <span>
                            All
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2001" />
                          <span>
                            Appetizers
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2002" />
                          <span>
                            Soups
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2003" />
                          <span>
                            Salads
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2004" />
                          <span>
                            Sandwiches
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2005" />
                          <span>
                            Burgers
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2007" />
                          <span>
                            Sides
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2008" />
                          <span>
                            Drinks
                          </span>
                        </div>
                        <div class="option ">
                          <input type="checkbox" value="2009" />
                          <span>
                            Desserts
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="text" name="productSearch-input" class="form-textbox" id="productSearch-input" size="15" placeholder="Search" autoComplete="off" />
              </div>
              <input type="hidden" name="simple_fpc" data-payment_type="paypalcomplete" data-component="payment1" value="22" />
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
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.39.20.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.40.35.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.42.33.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.43.34.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.45.47.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.47.28.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 20.57.11.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.02.49.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.03.40.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.10.24.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.13.19.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.14.19.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.19.57.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.23.26.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.25.10.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.25.51.png?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="false">
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://i.pinimg.com/originals/30/87/fa/3087faf467ae87c6d051256709373faf.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/BellatrixL/form_files/Screen Shot 2020-07-07 at 21.27.35.png?nc=1" />
                    </li>
                  </ul>
                </span>
              </div>
              <div data-wrapper-react="true">
                <span class="form-product-category-item  " category="2001">
                  <b>
                    Appetizers
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2001" active-category="2001" pid="1000">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1000" name="q22_menu[][id]" value="1000" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.39.20.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1000" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1000">
                            Crispy Onion Rings
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1000">
                            Deep fried vidalia onion rings served with a tangy dipping sauce
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1000_price">
                                40.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1000_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itone" id="input_22_quantity_1000_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1000_1" style="min-height:13px" aria-hidden="false"> Diet-Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietone" id="input_22_custom_1000_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Gastric"> Gastric </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1000_2" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavourone" id="input_22_custom_1000_2">
                            <option value="Regular"> Regular </option>
                            <option value="Exra Spicy"> Exra Spicy </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2001" active-category="2001" pid="1001">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1001" name="q22_menu[][id]" value="1001" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.40.35.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1001" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1001">
                            Thai Spring Rolls
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1001">
                            Crispy Thai spring rolls filled with vegetables and served with sweet and sour dipping sauce
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1001_price">
                                70.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1001_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemtwo" id="input_22_quantity_1001_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1001_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="diettwo" id="input_22_custom_1001_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1001_2" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavourtwo" id="input_22_custom_1001_2">
                            <option value="Regular"> Regular </option>
                            <option value="Extra Spicy"> Extra Spicy </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col3 show_image show_desc show_option new_ui" categories="2001" active-category="2001" pid="1002">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1002" name="q22_menu[][id]" value="1002" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.42.33.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1002" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1002">
                            Ancho Chili Cheese Quesadilla
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1002">
                            Served with sour cream, guacamole, and salsa
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1002_price">
                                60.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1002_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemthree" id="input_22_quantity_1002_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1002_1" style="min-height:13px" aria-hidden="false"> Diet type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietthree" id="input_22_custom_1002_1">
                            <option value="Regular"> Regular </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2002">
                  <b>
                    Soups
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2002" active-category="2002" pid="1004">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1004" name="q22_menu[][id]" value="1004" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.43.34.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1004" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1004">
                            Cream of Wild Mushroom
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1004">
                            A bowl of our house special creamy mushroom soup
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1004_price">
                                40.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1004_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemfour" id="input_22_quantity_1004_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1004_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietfour" id="input_22_custom_1004_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2002" active-category="2002" pid="1005">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1005" name="q22_menu[][id]" value="1005" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.45.47.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1005" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1005">
                            Tasty Chicken Noodle soup
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1005">
                            A bowl of our classic chicken noodle made from grandma&#x27;s recipe
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1005_price">
                                40.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1005_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemfive" id="input_22_quantity_1005_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1005_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietfive" id="input_22_custom_1005_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1005_2" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavourfive" id="input_22_custom_1005_2">
                            <option value="Regular"> Regular </option>
                            <option value="Less Soup"> Less Soup </option>
                            <option value="Spicy"> Spicy </option>
                            <option value="More Soup"> More Soup </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2003">
                  <b>
                    Salads
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2003" active-category="2003" pid="1006">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1006" name="q22_menu[][id]" value="1006" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.47.28.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1006" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1006">
                            Classic Caesar Salad
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1006">
                            Classic caesar served with our house made garlic croutons
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1006_price">
                                70.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1006_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemsix" id="input_22_quantity_1006_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1006_1" style="min-height:13px" aria-hidden="false"> Diet-Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietsix" id="input_22_custom_1006_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1006_2" style="min-height:13px" aria-hidden="false"> Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavoursix" id="input_22_custom_1006_2">
                            <option value="Regular"> Regular </option>
                            <option value="More Lemon"> More Lemon </option>
                            <option value="Less Lemon"> Less Lemon </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2003" active-category="2003" pid="1007">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1007" name="q22_menu[][id]" value="1007" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2020.57.11.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1007" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1007">
                            Cranberry Pecan Blue
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1007">
                            A mixed green salad toped with spiced pecans, blue cheese, and cranberries served with a balsamic vinaigrette
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1007_price">
                                80.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1007_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemseven" id="input_22_quantity_1007_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1007_1" style="min-height:13px" aria-hidden="false"> Diet type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietseven" id="input_22_custom_1007_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col3 show_image show_desc show_option new_ui" categories="2003" active-category="2003" pid="1008">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1008" name="q22_menu[][id]" value="1008" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.02.49.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1008" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1008">
                            Spinach Salad
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1008">
                            Served with crumbled bacon and an orange vinaigrette
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1008_price">
                                90.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1008_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemeight" id="input_22_quantity_1008_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1008_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dieteight" id="input_22_custom_1008_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2004">
                  <b>
                    Sandwiches
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2004" active-category="2004" pid="1009">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1009" name="q22_menu[][id]" value="1009" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.03.40.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1009" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1009">
                            Roasted Turkey Club
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1009">
                            With bacon, cheddar, avocado, lettuce, and tomato. Served with chips
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1009_price">
                                90.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1009_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemnine" id="input_22_quantity_1009_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1009_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietnine" id="input_22_custom_1009_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Gastric"> Gastric </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1009_2" style="min-height:13px" aria-hidden="false"> Extras </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavournine" id="input_22_custom_1009_2">
                            <option value="Regular"> Regular </option>
                            <option value="Less chips"> Less chips </option>
                            <option value="More Chips"> More Chips </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2004" active-category="2004" pid="1010">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1010" name="q22_menu[][id]" value="1010" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.10.24.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1010" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1010">
                            Hot Italian Grinder
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1010">
                            Salami, ham, and provolone, oven toasted in a grinder roll and served with chips
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1010_price">
                                90.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1010_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemten" id="input_22_quantity_1010_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1010_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietten" id="input_22_custom_1010_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1010_2" style="min-height:13px" aria-hidden="false"> Extras </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavourten" id="input_22_custom_1010_2">
                            <option value="Regular"> Regular </option>
                            <option value="Extra Chips"> Extra Chips </option>
                            <option value="Less Chips"> Less Chips </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2005">
                  <b>
                    Burgers
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2005" active-category="2005" pid="1013">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1013" name="q22_menu[][id]" value="1013" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.13.19.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1013" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1013">
                            Classic Chicken burger
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1013">
                            A half pound of flame broiled Chicken served with french fries
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1013_price">
                                100.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1013_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemeleven" id="input_22_quantity_1013_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1013_1" style="min-height:13px" aria-hidden="false"> Diet type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dieteleven" id="input_22_custom_1013_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1013_2" style="min-height:13px" aria-hidden="false"> Extra </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavoureleven" id="input_22_custom_1013_2">
                            <option value="Regular"> Regular </option>
                            <option value="Less Fries"> Less Fries </option>
                            <option value="More Fries"> More Fries </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2005" active-category="2005" pid="1014">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1014" name="q22_menu[][id]" value="1014" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.14.19.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1014" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1014">
                            Classic Cheeseburger
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1014">
                            A half pound of flame broiled angus beef topped with Cheddar
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1014_price">
                                90.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1014_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemtwelve" id="input_22_quantity_1014_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1014_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="diettwelve" id="input_22_custom_1014_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2007">
                  <b>
                    Sides
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2007" active-category="2007" pid="1021">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1021" name="q22_menu[][id]" value="1021" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.19.57.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1021" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1021">
                            French Fries
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1021">
                            Deep fried golden and delicious
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1021_price">
                                30.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1021_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemthirteen" id="input_22_quantity_1021_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1021_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietthirteen" id="input_22_custom_1021_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2007" active-category="2007" pid="1022">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1022" name="q22_menu[][id]" value="1022" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.23.26.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1022" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1022">
                            Corn on the Cobb
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1022">
                            Three grilled ears of sweet local corn
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1022_price">
                                30.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1022_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemfourteen" id="input_22_quantity_1022_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1022_1" style="min-height:13px" aria-hidden="false"> Diet type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietfourteen" id="input_22_custom_1022_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                            <option value="Low Residue / Modified Fiber"> Low Residue / Modified Fiber </option>
                            <option value="Gastric"> Gastric </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  " category="2008">
                  <b>
                    Drinks
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2008" active-category="2008" pid="1025">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1025" name="q22_menu[][id]" value="1025" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.25.10.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1025" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1025">
                            Lemonade
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1025">
                            A half gallon jug of our famous lemonade
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1025_price">
                                50.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1025_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemfifteen" id="input_22_quantity_1025_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1025_1" style="min-height:13px" aria-hidden="false"> Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietfifteen" id="input_22_custom_1025_1">
                            <option value="Regular"> Regular </option>
                            <option value="No Sugar"> No Sugar </option>
                            <option value="Less Sugar"> Less Sugar </option>
                            <option value="Sugar Substitutes"> Sugar Substitutes </option>
                            <option value="More sugar"> More sugar </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2008" active-category="2008" pid="1026">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1026" name="q22_menu[][id]" value="1026" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.25.51.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1026" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1026">
                            Ice Tea
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1026">
                            A half gallon jug of our famous iced tea
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1026_price">
                                80.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1026_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemsixteen" id="input_22_quantity_1026_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1026_1" style="min-height:13px" aria-hidden="false"> Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietsixteen" id="input_22_custom_1026_1">
                            <option value="Regular"> Regular </option>
                            <option value="No Sugar"> No Sugar </option>
                            <option value="ADD Sugar Substitute"> ADD Sugar Substitute </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator last_p_seperator">
                </div>
                <span class="form-product-category-item  last_p_category" category="2009">
                  <b>
                    Desserts
                  </b>
                  <span class="selected-items-icon">
                  </span>
                </span>
                <span class="form-product-item hover-product-item on_col1 show_image show_desc show_option new_ui" categories="2009" active-category="2009" pid="1028">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1028" name="q22_menu[][id]" value="1028" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://i.pinimg.com/originals/30/87/fa/3087faf467ae87c6d051256709373faf.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1028" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1028">
                            Ice Cream
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1028">
                            A slice of our homemade apple pie
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1028_price">
                                30.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1028_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemseventeen" id="input_22_quantity_1028_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1028_1" style="min-height:13px" aria-hidden="false"> Diet type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dietseventeen" id="input_22_custom_1028_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1028_2" style="min-height:13px" aria-hidden="false"> Flavour </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavourseventeen" id="input_22_custom_1028_2">
                            <option value="Vanilla"> Vanilla </option>
                            <option value="Chocolate"> Chocolate </option>
                            <option value="Strawberry"> Strawberry </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item on_col2 show_image show_desc show_option new_ui" categories="2009" active-category="2009" pid="1029">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_22_1029" name="q22_menu[][id]" value="1029" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/BellatrixL/form_files/Screen%20Shot%202020-07-07%20at%2021.27.35.png?nc=1&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_22_1029" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_22_1029">
                            German Chocolate Cake
                          </span>
                          <span class="form-product-description" id="product-name-description-input_22_1029">
                            A slice of our rich three layer chocolate cake
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              <span id="input_22_1029_price">
                                50.00
                              </span>
                              <span class="currency_abr">
                                INR
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_quantity_1029_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="itemeighteen" id="input_22_quantity_1029_0">
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1029_1" style="min-height:13px" aria-hidden="false"> Diet Type </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="dieteighteen" id="input_22_custom_1029_1">
                            <option value="Regular"> Regular </option>
                            <option value="Diabetic 1800 ADA"> Diabetic 1800 ADA </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_22_custom_1029_2" style="min-height:13px" aria-hidden="false"> Add </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="flavoureighteen" id="input_22_custom_1029_2">
                            <option value="Regular"> Regular </option>
                            <option value="Less Cream"> Less Cream </option>
                            <option value="More cream"> More cream </option>
                          </select>
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
                          <span id="payment_total">
                            0.00
                          </span>
                          <span class="currency_abr">
                            INR
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="first_9"> Username </label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_9" name="username" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_9 sublabel_9_first" />
              <label class="form-sub-label" for="first_9" id="sublabel_9_first" style="min-height:13px" aria-hidden="false"> Enter Username </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="hidden" id="last_9" name="q9_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_9 sublabel_9_last" />
              <label class="form-sub-label" for="last_9" id="sublabel_9_last" style="min-height:13px" aria-hidden="false">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_10">
        <label class="form-label form-label-left" id="label_10" for="input_10"> Email </label>
        <div id="cid_10" class="form-input" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_10" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_10 sublabel_input_10" />
            <label class="form-sub-label" for="input_10" id="sublabel_input_10" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          
</span>
        </div>
      </li>


<li class="form-line" data-type="control_email" id="id_10">
        <label class="form-label form-label-left" id="label_10" for="input_10"> Phone Number </label>
        <div id="cid_10" class="form-input" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_10" name="phone" class="form-textbox" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_10 sublabel_input_10" />
            <label class="form-sub-label" for="input_10" id="sublabel_input_10" style="min-height:13px" aria-hidden="false"> XXXXXXXXXX </label>
          
</span>
        </div>
      </li>


<li class="form-line" data-type="control_email" id="id_10">
        <label class="form-label form-label-left" id="label_10" for="input_10"> Address </label>
        <div id="cid_10" class="form-input" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_10" name="address" class="form-textbox" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_10 sublabel_input_10" />
            <label class="form-sub-label" for="input_10" id="sublabel_input_10" style="min-height:13px" aria-hidden="false"> Delivery address </label>
          
</span>
        </div>
      </li>



      
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_address" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12_addr_line1"> Delivery Address </label>
        <div id="cid_12" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_12_addr_line1" name="q12_deliveryAddress[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_12 sublabel_12_addr_line1" required="" />
                  <label class="form-sub-label" for="input_12_addr_line1" id="sublabel_12_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField" style="display:none">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_12_addr_line2" name="q12_deliveryAddress[addr_line2]" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_12 sublabel_12_addr_line2" />
                  <label class="form-sub-label" for="input_12_addr_line2" id="sublabel_12_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField" style="display:none">
              <span class="form-address-line form-address-city-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_12_city" name="q12_deliveryAddress[city]" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_12 sublabel_12_city" />
                  <label class="form-sub-label" for="input_12_city" id="sublabel_12_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_12_state" name="q12_deliveryAddress[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_12 sublabel_12_state" />
                  <label class="form-sub-label" for="input_12_state" id="sublabel_12_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField" style="display:none">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_12_postal" name="q12_deliveryAddress[postal]" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_12 sublabel_12_postal" />
                  <label class="form-sub-label" for="input_12_postal" id="sublabel_12_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      


















      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Order Now!
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
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203118555950455" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='203118555950455'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "203118555950455-203118555950455";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <div class="formFooter-wrapper formFooter-leftSide">
      
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        
      </span>
      
    </div>
  </div>
</form>
