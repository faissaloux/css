jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.

/*
compenets :
1 : add to cart
2 : Remove from cart 
3 : update cart item
4 : remove cart item
5 : search Logic
6 : home header search Logic
7 : Make order
8 : order logic
9 : Count orders
*/


/***********************************************
1 : add to cart
/***********************************************/
$('body .caestus_add_to_cart').click(function(){
  
    var productname  = $(this).data('name');  
    var productID    = $(this).data('id');  
    var productImage = $(this).data('image'); 
    var category     = $(this).data('category'); 
    var formData     = new FormData();
  
    formData.append('name', productname);   
    formData.append('id', productID);   
    formData.append('image', productImage);   
    formData.append('category', category); 
    formData.append('action', 'add_to_cart');  
      
    $.ajax({
        url: varjs.caestus_ajax_url,
        type: 'POST',
        processData: false,
        contentType: false, 
        data: formData,
        cache:false,
        dataType: "JSON",
        success: function(data) {
           window.location.href = "";
        }
     });
});


/***********************************************
2 : Remove from cart
/***********************************************/
$('body .remove_from_cart').click(function(){
    
    var productID    = $(this).data('id');  
    var category     = $(this).data('category'); 
    var formData     = new FormData();
  
    
    formData.append('id', productID);  
    formData.append('category', category); 
    formData.append('action', 'remove_from_cart');  
      
    $.ajax({
        url: varjs.caestus_ajax_url,
        type: 'POST',
        processData: false,
        contentType: false, 
        data: formData,
        cache:false,
        dataType: "JSON",
        success: function(data) {
           window.location.href = "";
        }
     });
});


/***********************************************
3 : update cart item
/***********************************************/
$('body .product_quantity').change(function(){
  var quantity  = $(this).val();
  var id        = $(this).data('id');
  var category  = $(this).data('category')

  var formdata   = new FormData();
  formdata.append('id',id);
  formdata.append('quantity',quantity);
  formdata.append('category',category);
  formData.append('action', 'product_quantity'); 

  jQuery.ajax({
    url: varjs.caestus_ajax_url,
    type : 'post',
    contentType : false,
    processData : false,
    dataType : 'html',
    data : formdata,
  });

  return false;
});



/***********************************************
4 : remove cart item
/***********************************************/
$(document).on('keyup', 'input[name=shoting_days]', function () {
  var _this = $(this);
  var min = parseInt(_this.attr('min')) || 1;
  var max = parseInt(_this.attr('max')) || 100; 
  var val = parseInt(_this.val()) || (min - 1); 
  if(val < min)
      _this.val( min );
  if(val > max)
      _this.val( max );
});




/***********************************************
5 : search Logic
/***********************************************/
function caestus_search($query){
  
}




/***********************************************
6 : home header search Logic
/***********************************************/
$("body .home_search").bind("keyup", function(e) {
  
  var search_query = $(this).val();
  if( search_query ) {
      var count = search_query.length;
      if ( count > 1 ) {
          
          var search_wrapper = $('.home_search .home_search_results');
          var no_result = $('.home_search .home_search_results .no-reuslt');
          var search_result = $('.home_search .home_search_results ul');
          
          search_wrapper.show();
          no_result.html('');
          search_result.html('');
          
          var result = caestus_search(search_query);
          var json_result = JSON.parse(result);
          
          $.each( json_result, function(k, v) {
              
              var name  = v['name'];
              var id    = v['id'];
              var image = v['image'];
              var link  = v['link'];

              if ( k == 'error' ) {
                  search_result.html('<li style="text-align:center;">Non resultat </li>');
              }else {
                  var result_item = '<li><img src="'+image+'" /><a href="'+link+'">'+name+'</a></li>';
                  search_result.append(result_item);
              }
          });
      }
      return false;
  }
});

/***********************************************
7: Make order
/***********************************************/
$('body .make_order').click(function(e){

    e.preventDefault();

    var order_form      = $('body #checkoutForm');
    var name            = order_form.find('#first_name').val();
    var project_name    = order_form.find("#project_name").val();
    var phone           = order_form.find("#phone").val();
    var email           = order_form.find("#Email").val();
    var firstDate       = order_form.find("#firstDate").val();
    var secondDate      = order_form.find("#secondDate").val();
    var restDays        = order_form.find("#restDays").val();
    var notes           = order_form.find("#notes").val();
    console.log(notes);
        
    var formData     = new FormData();
  
    formData.append('name',         name);
    formData.append('project_name', project_name);
    formData.append('phone',        phone);
    formData.append('email',        email);
    formData.append('firstDate',    firstDate);
    formData.append('secondDate',   secondDate);
    formData.append('restDays',     restDays);
    formData.append('notes',        notes);
    formData.append('action',       'make_order');  
      
    $.ajax({
        url: varjs.caestus_ajax_url,
        type: 'POST',
        processData: false,
        contentType: false, 
        data: formData,
        cache:false,
        dataType: "JSON",
        success: function(data) {
           window.location.href = "";
        }
     });
});

/***********************************************
8 : order logic
/***********************************************/
function order(){
  
  var order_form = $('body #checkoutForm');
  var name = order_form.find('#first_name').val();
  
  
}

/***********************************************
9 : Count orders
/***********************************************/
$('body #cart').click(function(){
        var formData     = new FormData();
        formData.append('action', 'count_orders');  
          
        $.ajax({
            url: varjs.caestus_ajax_url,
            type: 'POST',
            processData: false,
            contentType: false, 
            data: formData,
            cache:false,
            dataType: "JSON"
         });
    
    });

});