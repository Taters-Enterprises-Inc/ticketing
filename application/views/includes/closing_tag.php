<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function() {
		setTimeout(function() {
			$('.preloader').fadeOut('slow');
		}, 3000);
	});

	$("#ticketForm").submit(function(event) {
		event.preventDefault();

		$.ajax({
			url: "<?php echo base_url('ticket/store'); ?>",
			data: $("#ticketForm").serialize(),
			type: "post",
			async: false,
			success: function(response) {
				Swal.fire(
					'You are done!',
					'The ticket has been made.',
					'success',
					).then(function() {
						//$("#ticketForm")[0].reset();
						//console.log(response);
						window.location.href = "<?php echo base_url('dashboard'); ?>";
					})
				}
			})
	})

	$('.tag-ticket').click(function(event){
		event.preventDefault();
		var dataId = $(this).attr("data-id");

		var myModal = document.getElementById("deptModal");
		var modal = new bootstrap.Modal(myModal);
		modal.show();

		$("#triageForm").submit(function(event) {
			event.preventDefault();

			$.ajax({
				url: "<?php echo base_url('ticket/triage'); ?>",
				data: $("#triageForm").serialize() + '&ticket_id=' + dataId,
				type: "post",
				async: false,
				success: function(response) {
					Swal.fire(
						'You are done!',
						'The ticket has been made.',
						'success',
						).then(function() {
							window.location.href = "<?php echo base_url('dashboard'); ?>";
						})
					}
				})
		})
		
	})
</script>
</body>
</html>