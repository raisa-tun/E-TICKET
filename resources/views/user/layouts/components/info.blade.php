<div class="col-sm-12">
    <!-- List view card start -->
    <div class="card">
        <div class="card-header">
            <h5 id="info-tag">Current Info</h5>

        </div>
        <div class="row card-block">
            <div class="col-md-12 profile_info" id="profile_info" style="display:none">
                <h4>Name:&nbsp;Raisa Tabassum</h4>
                <div class="row">
                    <div class="col-4">

                        <h6>E-mail:&nbsp;raisa26tabaddum@gmail.com</h6>
                        <h6>Phone:&nbsp;01631663679</h6>

                    </div>
                    <div class="col-4">

                        <h6>Address:&nbsp;****</h6>
                        <h6>Shipping type:&nbsp;Card</h6>

                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary edit-button" style="padding:5px;margin:5px;">Edit</button>
                        <button class="btn btn-success save-button" style="padding:5px;margin:5px; display:none;">Save</button>
                    </div>
                </div>
               

            </div>
            <div class="col-md-12 current_info" id="current_info">
                
                <div class="row">
                    <div class="col-2">



                    </div>
                    <div class="col-3">

                        <h6>Purchased Item:&nbsp;****</h6>
                        <h6>Quantity:&nbsp;2</h6>
                        <h6>Date:&nbsp;04-06-2025</h6>
                        

                    </div>
                      <div class="col-3">

                        <h6>orderId:&nbsp;456</h6>
                        <h6>Shipping type:&nbsp;Card</h6>

                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary clear" style="padding:5px;margin:5px;">Clear!</button>
                      
                    </div>
                </div>
               

            </div>
        </div>
    </div>
    <!-- List view card end -->
</div>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        // When clicking Edit button
        $('.edit-button').on('click', function() {
            var $row = $(this).closest('.row');

            // For each editable field, replace text with input field
            $row.find('.editable').each(function() {
                var $field = $(this);
                if ($field.find('input').length === 0) { // Avoid duplicate inputs
                    var currentText = $field.text().trim();
                    var input = $('<input type="text" class="inline-input form-control" style="min-width:100px;">').val(currentText);
                    $field.data('original-text', currentText); // store original text if needed
                    $field.empty().append(input);
                }
            });

            // Show Save button, hide Edit button
            $row.find('.edit-button').hide();
            $row.find('.save-button').show();

            // Focus the first input
            $row.find('.editable input').first().focus();
        });

        // When clicking Save button
        $('.save-button').on('click', function() {
            var $row = $(this).closest('.row');
            var id = $row.data('id');
            var updates = {};

            // For each editable field, get input value and replace input with text
            $row.find('.editable').each(function() {
                var $field = $(this);
                var input = $field.find('input');
                if (input.length) {
                    var newValue = input.val().trim();
                    var fieldName = $field.data('field');

                    // Replace input with text
                    $field.empty().text(newValue);

                    // Store for ajax update
                    updates[fieldName] = newValue;
                }
            });

            // Show Edit button, hide Save button
            $row.find('.save-button').hide();
            $row.find('.edit-button').show();

            // Send AJAX PUT with all updated fields at once
            $.ajax({
                url: '/bus_schedule/' + id,
                type: 'PUT',
                data: updates,
                success: function(response) {
                    console.log('Updated successfully:', response);
                },
                error: function(err) {
                    console.error('Update error:', err);
                    alert('Failed to update data, please try again.');
                }
            });
        });
        $(".delete-button").on("click", function() {


            var row = $(this).closest('.row');
            var id = row.data('id');

            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: '/bus_schedule/' + id,
                    type: 'DELETE',

                    success: function(response) {
                        console.log(response);
                        alert(response.success);
                        //Remove the row
                        row.remove();
                    },
                    error: function(xhr) {
                        console.log();
                        alert('Something went wrong. Please try again.');
                    }
                });
            }
        });


    });
</script>