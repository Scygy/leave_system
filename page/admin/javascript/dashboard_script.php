<script type="text/javascript">
	
	const search =()=>{
		var emp_id = document.getElementById('emp_id').value;
		var emp_name = document.getElementById('emp_name').value;
		console.log(emp_id)
		console.log(emp_name)

		$.ajax({
			url:'../../process/admin/backend_dashboard.php',
			type: 'POST',
			cache: false,
			data:{
				method: 'fetch_data',
				emp_id:emp_id,
				emp_name:emp_name
			},success:function (x) {
				document.getElementById('sample_table').innerHTML = x;
				// $('#spinner').fadeOut(function(){                       
                //    });
			
			}
		});

	}

	const details_leave =(param)=>{
		var data =  param.split('~!~');
		var id = data[0];
		var id_no = data[1];
		var full_name = data[2];
		var department = data[3];
		var date_hired = data[4];
		var remaining_leaves = data[5];

		$('#leave_id').val(id);
		$('#leave_id_no').val(id_no);
		$('#leave_full_name').val(full_name);
		$('#leave_department').val(department);
		$('#leave_date_hired').val(date_hired);
		$('#leave_remaining_leaves').val(remaining_leaves);

		console.log(param)
	}


</script>