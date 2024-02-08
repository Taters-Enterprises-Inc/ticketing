

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/template/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/vendor/simple-datatables/simple-datatables.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/template/assets/js/main.js"></script>

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
                    'The ticket has been created.',
                    'success',
                    ).then(function() {
                        $("#ticketForm")[0].reset();
                        //console.log(response);
                        //window.location.href = "<?php echo base_url('dashboard'); ?>";
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
                        'The ticket has been triaged to the right department.',
                        'success',
                        ).then(function() {
                            window.location.href = "<?php echo base_url('dashboard'); ?>";
                        })
                    }
                })
        })
        
    })

    $("#resolved-ticket").click(function(event) {
        event.preventDefault();

        var currentURL = window.location.href;
        var urlObject = new URL(currentURL);
        var pathname = urlObject.pathname;
        var pathParts = pathname.split("/");
        var value = pathParts[pathParts.length - 1];

        $.ajax({
            url: "<?php echo base_url('ticket/tag_ticket_as_resolved'); ?>",
            data: '&ticket_id=' + value,
            type: "post",
            async: false,
            success: function(response) {
                Swal.fire(
                    'You are done!',
                    'The ticket has been tagged as resolved.',
                    'success',
                    ).then(function() {
                        //$("#ticketForm")[0].reset();
                        //console.log(response);
                        window.location.href = "<?php echo base_url('your_tickets'); ?>";
                    })
                }
            })
    })

    $("#closed-ticket").click(function(event) {
        event.preventDefault();

        var currentURL = window.location.href;
        var urlObject = new URL(currentURL);
        var pathname = urlObject.pathname;
        var pathParts = pathname.split("/");
        var value = pathParts[pathParts.length - 1];

        $.ajax({
            url: "<?php echo base_url('ticket/tag_ticket_as_closed'); ?>",
            data: '&ticket_id=' + value,
            type: "post",
            async: false,
            success: function(response) {
                Swal.fire(
                    'You are done!',
                    'The ticket has been tagged as closed.',
                    'success',
                    ).then(function() {
                        //$("#ticketForm")[0].reset();
                        //console.log(response);
                        window.location.href = "<?php echo base_url('your_tickets'); ?>";
                    })
                }
            })
    })

    $("#commentForm").submit(function(event) {
        event.preventDefault();

        var currentURL = window.location.href;
        var urlObject = new URL(currentURL);
        var pathname = urlObject.pathname;
        var pathParts = pathname.split("/");
        var value = pathParts[pathParts.length - 1];

        $.ajax({
            url: "<?php echo base_url('ticket/submit_comment'); ?>",
            data: $("#commentForm").serialize() + '&ticket_id=' + value,
            type: "post",
            async: false,
            success: function(response) {
                Swal.fire(
                    'You are done!',
                    'Your comment has been submitted.',
                    'success',
                    ).then(function() {
                        //$("#ticketForm")[0].reset();
                        //console.log(response);
                        //window.location.href = "<?php echo base_url('dashboard'); ?>";
                        window.location.reload();
                    })
                }
            })
    })

  </script>
</body>
</html>