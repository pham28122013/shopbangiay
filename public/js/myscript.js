$(document).ready(function (){
    $(".updatecart").click(function (){
        var rowid = $(this).attr('id');
        var quantity =$(this).parent().parent().find(".quantity").val();
        var token = $("input[name='_token']").val();    
        var me = $(this);
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
         }
        $.ajax({
              url:'/updategiohang/'+rowid+'/'+quantity,
              type:'GET',
              cache:false,
              data:{},
              success: function(data){
                  if(data){
                    var product_price = formatNumber(data.get.price * data.get.quantity);
                    var product_total = formatNumber(data.total);
                    $(".product_price_"+ rowid).html(product_price + " " + "VNĐ") ;
                    $(".product_total_").html(product_total + " " + "VNĐ");
                  }
              }
        });
    });
});
