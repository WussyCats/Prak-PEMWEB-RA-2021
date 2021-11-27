$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	$('.btn-tambah').click(function(){
		tambah();
	});
	
	$('.btn-batal').click(function(){
		tampil();
		reset();
	});

	$('.btn-ubah').click(function(){
		edit(dataHasil);
	});

	function tampil(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'tampil.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+response[i].adv_name+`</td>
					<td style="text-align: center;">`+response[i].adv_level+`</td>
					<td style="text-align: center;">`+response[i].adv_job+`</td>
					<td style="text-align: center;">`+response[i].adv_guild_rank+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].adv_level+`'>Ubah</button>
						<button class='btn-delete' id='`+response[i].adv_level+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					tampil_data($(this).attr('id'));
				})

				$('.btn-delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}

	function tambah(){
		var adv_level = $('.adv_level').val();
		var adv_name = $('.adv_name').val();
		var adv_job = $('.adv_job').val();
		var adv_guild_rank = $('.adv_guild_rank').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : 'adv_level='+adv_level+'&adv_name='+adv_name+'&adv_job='+adv_job+'&adv_guild_rank='+adv_guild_rank,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}

			}
		}
		)
	}

	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'tampil_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.adv_level;
				$('.adv_level').val(response.adv_level);
				$('.adv_name').val(response.adv_name);
				$('.adv_job').val(response.adv_job);
				$('.adv_guild_rank').val(response.adv_guild_rank);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function edit(x){
		var id = x;
		var adv_level = $('.adv_level').val();
		var adv_name = $('.adv_name').val();
		var adv_job = $('.adv_job').val();
		var adv_guild_rank = $('.adv_guild_rank').val();
		$.ajax({
			type : 'POST',
			url : 'edit.php',
			data : 'id='+id+'&adv_level='+adv_level+'&adv_name='+adv_name+'&adv_job='+adv_job+'&adv_guild_rank='+adv_guild_rank,
			success : function(response){
				tampil();
				reset();
			}
		})
	}

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'delete.php',
			data : 'adv_level='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.adv_level').val('');
		$('.adv_name').val('');
		$('.adv_job').val('');
		$('.adv_guild_rank').val('');
	}


});