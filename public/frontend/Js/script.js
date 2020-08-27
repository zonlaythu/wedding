$(document).ready(function(){

	getData();
	count();

	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


	// Count
	function count(){
		var shopString = localStorage.getItem("wedding");
		if (shopString) {
			var shopArray = JSON.parse(shopString);
			if (shopArray!=0) {
				var count=shopArray.length;
				$("#item_count").text('('+count+')');
			}else {
				$("#item_count").text('()');	
			}

		}else {
			$("#item_count").text('()');	
		}
	};


	// Add To Cart
	$(".myItems").on('click','.order',function(){
		// alert();
		var item_qty=parseInt($('#qty').val());
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		// var qty=1;
		// if (item_qty) {
		// 	qty+=item_qty;
		// }

		var shop_item = {
			id:id,
			name:name,
			price:price,
			photo:photo
		}

		var shopString = localStorage.getItem("wedding");
		var shopArray;
		if (shopString==null) {
			shopArray=Array();
		}else {
			shopArray=JSON.parse(shopString);
		}

		var status = false;
		$.each(shopArray,function(i,v){
			if (id==v.id) {
				status = true;
				if (!item_qty) {
					v.qty++;
				}else{
					v.qty+=item_qty;
				}
			}
		})

		if (status==false) {
			shopArray.push(shop_item);

		}

		var shopData = JSON.stringify(shopArray);
		localStorage.setItem("wedding", shopData);
		count();

	});

	// Show to Table Data
	function getData(){
		var shopString = localStorage.getItem("wedding");
		if (shopString) {
			var shopArray = JSON.parse(shopString);
			console.log(shopArray);
			var html='';
			var no=1;
			var total=0;
			$.each(shopArray,function(i,v){
				var name = v.name;
				var photo = v.photo;
				var unit_price = v.price;
				
				// if (discount) {
				// 	var price_show=discount+'<del class="d-block">'+unit_price+'</del>';
				// 	var price = discount;
				// }else{
				// 	var price_show = unit_price;
				// 	var price = unit_price;
				// }

				html += `<tr>
						<td>${no++}</td>
						<td>${name}</td>
						<td><img src="${photo}" width="100" height="100"></td>
						<td>${unit_price}</td>
					</tr>`;	

					total +=unit_price;
			});

			html+=`<tr>
				<td colspan="3">Total</td>
				<td>${total}</td>
				</tr>`

			$("tbody").html(html);
			$(".total").val(total);

		}else{
			html='';
			$("tbody").html(html);
		}

	}



	$("tbody").on('click','.max',function(){

		var item_i = $(this).data('item_i');

		var shopString = localStorage.getItem("wedding");
		if (shopString) {

			var shopArray = JSON.parse(shopString);

			$.each(shopArray,function(i,v){
				if (item_i==i) {
					v.qty++;
				}

			})

			var shopData=JSON.stringify(shopArray);
			localStorage.setItem("wedding",shopData);
			getData();
			count();

		}

	});

	$("tbody").on('click','.min',function(){
		var item_i = $(this).data('item_i');

		var shopString = localStorage.getItem("wedding");
		if (shopString) {

			var shopArray = JSON.parse(shopString);

			$.each(shopArray,function(i,v){
				if (item_i==i) {
					v.qty--;
					if (v.qty==0) {
						shopArray.splice(item_i,1);
					}
				}

			})

			var shopData=JSON.stringify(shopArray);
			localStorage.setItem("wedding",shopData);
			getData();
			count();

		}
	})


		// for buy now
		$('.buy_now').on('click',function(){
			// alert();
			var notes = $('.notes').val();
			// alert(notes);
			// var total = $('.total').val();
			
			var shopString = localStorage.getItem("wedding");
			// alert (shopString);
			if (shopString){
				// var shopArray = JSON.parse(shopString);
				$.post('custompackages',{shop_data:shopString,notes:notes},function(response){
					 console.log(response);
					if(response) {
						// alert(response);
						localStorage.clear();
						getData();
						location.href = "/";
					}
				})
			}
		})


	})