$(document).ready(function(){
	// getData();
	// count();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

	// Count
	// function count(){
	// 	var shopString = localStorage.getItem("shop");
	// 	if (shopString) {
	// 		var shopArray = JSON.parse(shopString);
	// 		if (shopArray!=0) {
	// 			var count=shopArray.length;
	// 			$("#item_count").text('('+count+')');	
				
	// 		}else {
	// 			$("#item_count").text('()');	
	// 		}

	// 	}else {
	// 			$("#item_count").text('()');	
				
	// 	}
	// };


	// Add To Cart
	$(".addtocart").on('click',function(){
		// alert("hi");
		var id= $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		
		var shop_package= {
			id:id,
			name:name,
			price:price,
			photo:photo,	
		}

		var shopString = localStorage.getItem("wedding");
		var shopArray;
		if (shopString==null) {
			shopArray=Array();
		}else {		
			shopArray=JSON.parse(shopString);
			}
			shopArray.push(shop_package);

		var shopData = JSON.stringify(shopArray);
		localStorage.setItem("wedding", shopData);
		// console.log(shopData);
		// count();

	});

	// Show to Table Data
	// function getData(){
	// 	var shopString = localStorage.getItem("shop");
	// 	if (shopString) {
	// 		var shopArray = JSON.parse(shopString);

	// 		var html='';
	// 		var no=1;
	// 		var total=0;
	// 		$.each(shopArray,function(i,v){
	// 			var photo=v.photo;
	// 			var name = v.name;
	// 			var unit_price = v.price;
	// 			var discount = v.discount;
	// 			var qty = v.qty;
	// 			console.log(name,unit_price,discount,qty);

	// 			if (discount) {
	// 				var price_show=discount+'<del class="d-block">'+unit_price+'</del>';
	// 				var price = discount;
	// 				// console.log(price);					
	// 			}else{
	// 				var price_show = unit_price;
	// 				var price = unit_price;
	// 			}
	// 				// console.log(price);					
				

	// 			html += `<tr>
	// 					<td>${no++}</td>
	// 					<td><img src="${photo}" class="w-25"></td>
	// 					<td>${name}</td>
	// 					<td>${price_show}</td>
	// 					<td><button class="btn btn-light btn-sm min" data-item_i="${i}">-</button> ${qty} <button class="btn btn-light btn-sm max" data-item_i="${i}">+</button></td>
	// 					<td>${price*qty}</td>

	// 				</tr>`;	

	// 				total += price*qty;
	// 		})

	// 		html+=`<tr>
	// 			<td colspan="4">Total</td>
	// 			<td>${total}</td>
	// 			</tr>`

	// 		$("tbody").html(html);

	// 	}else{
	// 		html='';
	// 		$("tbody").html(html);
	// 	}
	// }

// For Book now
// $(".buy_now").on('click',function(){
// 	// alert("Lol");
// 	var shopString=localStorage.getItem("wedding");
// 	// console.log(shopString);
// 	if (shopString) {	
// 		$.post('/orders',{shop_data:shopString},function(response){
// 			if(response) {
// 			alert(response);
// 				// localStorage.clear();
				
// 			}
// 		})
// 	}
// })

  // For But Now
  $('.buy_now').on('click',function(){
  	// alert('ok');
    // var notes = $('.notes').val();
    // var total = $('.total').val();
    var shopString = localStorage.getItem("wedding");
    // alert(shopString);
    if (shopString) {
      var shopArray = JSON.parse(shopString);
      $.post('/orders',{shop_data:shopArray},function(response){
        if (response) {
          alert(response);
          console.log(response);
          // localStorage.clear();
          // getData();
          // location.href="/";
        }
      })

    }

  })

})
