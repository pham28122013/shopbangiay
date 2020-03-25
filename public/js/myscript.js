import { Module } from "module";

$(document).ready(function (){
    // function getDataToSession (condition) {
    //     var returnData;
    //     switch (condition) {
    //         case "listOrder":
    //             // Neu thang list oder co kieu la object
    //             returnData = sessionStorage.getItem(condition);

    //             if (returnData)
    //             {
    //                 // Co san pham
    //                 returnData = JSON.parse(returnData);

    //                 // danh sach san phan
    //             }
    //             else
    //             {
    //                 // khong co san pham
    //                 returnData = [];
    //             }

    //             break;
    //         case "sanpham":
    //             // Neu thang san pham co kieu la string hoac la kieu so
    //             returnData = sessionStorage.getItem(condition);
    //             break;
    //     }

    //     return returnData;
    // }

    // function setItemToSessionStore(key, value, condition, callback) {
    //     switch(condition) {
    //         case "tang1GiatriChoSanPham" :
    //             if (listOder["sanPham" + obj.id]){
    //                 // San pham da ton tai trong list
    //                 var currentObj = listOder["sanPham" + obj.id];
    //                 currentObj.soLuong = currentObj.soLuong + 1;
    //                 currentObj.tongTienSp = currentObj.tongTienSp + currentObj.giaTien;
        
    //                 // Luu lai gia tri moi cho san pham trong gio hang
    //                 listOder["sanPham" + obj.id] = currentObj;
    //                 sessionStorage.setItem(listOrder, JSON.stringify(listOder));
    //             }
    //             else
    //             {
    //                 // San pham chua co trong gio hang
    //                 obj.soLuong = 1;
    //                 obj.tongTienSp = obj.giaTien;
        
    //                 listOrder["sanPham" + obj.id] = obj;
        
    //                 sessionStorage.setItem(listOrder, JSON.stringify(listOder));
    //             }
    //             break;
    //         case "giam1GiaTriChoSanpham":
    //             if (listOder["sanPham" + obj.id]){
    //                 // San pham da ton tai trong list
    //                 var currentObj = listOder["sanPham" + obj.id];
    //                 currentObj.soLuong = parseInt(currentObj.soLuong) - 1;

    //                 if (currentObj.soLuong == 0)
    //                 {
    //                     // Xoa san pham nay trong danh sach san pham cua gio hang
    //                     var idxSp = listOder.findIndex(item => item.id == obj.id);

    //                     if (idxSp >= 0) {
    //                         // Voi idxSp: Vi tri can xoa, 1 : so luong can xoa
    //                         listOder = listOder.splice(idxSp, 1);

    //                     }
    //                 }
    //                 else
    //                 {
    //                     currentObj.tongTienSp = currentObj.tongTienSp - currentObj.giaTien;
        
    //                     // Luu lai gia tri moi cho san pham trong gio hang
    //                     listOder["sanPham" + obj.id] = currentObj;
    //                 }
                    
    //                 sessionStorage.setItem(listOrder, JSON.stringify(listOder));
    //             }
    //             break;
    //     }
        
    //     if (callback) {
    //         callback();
    //     }
    // } 

    // // them san pham tu trang index
    // function addToCard(this) {
    //     var listOder = getDataToSession("listOrder");

    //     var idSanPham = $(this).data("idSanPham");

    //     $.ajax({
    //         type: "POST",
    //         url: "/url?idSanpHam="+idSanPham,
    //         data: {"idSanPham" : idSanPham},
    //         success: function (response) {
    //             if (response) {
    //                 response = JSON.parse(response);

    //                 if (response.status == "success") {
    //                     // response.data = thong tin san pham can lay
    //                     // var obj = {
    //                     //     "id": 1,
    //                     //     "tenSanPham": "a",
    //                     //     "giaTien": 100000
    //                     // };
    //                     var obj = response.data;

    //                     setItemToSessionStore("listOrder", obj, "tang1GiatriChoSanPham", function () {
    //                         var listOder = getDataToSession(listOrder);
    //                     });
    //                 }
    //             }
    //         }
    //     })
    // }
    $(".updatecart").click(function (){
        console.log("vao1");
        var vitri0 = 1;
    var vitri1 = 2;
    var soCanTim = 0;

    var giatriOvitricantim = 5;

    for(var i = 2; i < giatriOvitricantim; i++)
    {
        // neu i = 2 tuc la vi tri thu 3
        soCanTim =  vitri0 + vitri1;

        // gan lai gia tri vi tri thu 1 = gia tri o vi tri 2
        vitri0 = vitri1;
        // gan gia tri vi tri thu 2 = gia moi vua tim dc
        vitri1 = soCanTim;
    }

    obj1->id

    obj1["id"]

    $arr = [
        "0" => [
            "id" => 1,
            "ten" => "ten1"
        ],
        "2" => [
            "id" => 2,
            "ten" => "ten2"
        ],
    ];

    // lay gia tri o cot "ten" trong mang 2 chieu
    var data = array_collumn($arr, "ten");
    
    // return = ["ten1", "ten2"]

    var user = new Users();

// Mang co san
    $arr = ["ten1", "ten2"];

    // Them mot doi tuong vao mang
    $arr[] = "ten3";

    // Voi mang 1 chieu
    // De xoa 1 doi tuong trong mang
    $key = array_search("ten3", $arr);

    if (false === $key) {
        // doi tuong ko nam trong mang
    }
    else
    {
        // doi tuong nam trong mang tai vi tri cua $key
        var obj = $arr[$key];
    }

    // Mang 2 chieu
    // Trong do "ten3" => gia tri can tim
    // "ten" => cot chua gia tri can tim
    $key = array_search("ten3", array_collumn($arr, "ten"));

    $arr = array();

    console.log(soCanTim);

    return;





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


