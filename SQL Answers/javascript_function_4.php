<script>
	function submit_form() {
		var comment = document.getElementById("comment").value;
			if(comment != '')
			{	
				document.getElementById("form_id").submit(); //form submission
				alert("Form Submitted Successfully......");
			}else{
				alert("Form is not submitted");
				return false;
			}
	}
</script>
