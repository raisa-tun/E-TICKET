<div class="col-sm-12">
    <!-- List view card start -->
    <div class="card">
        <div class="card-header">
            <h5>List View</h5>

        </div>
        <div class="row card-block">
            <div class="col-md-12">
                <ul class="list-view">
    {{-- If bus_data is available --}}
    @if(!empty($bus_data))
        @foreach($bus_data as $bus_data_each)
            @foreach($bus_data_each->details as $bus_details_each)
                <li>
                    @include('layouts.contents.bus_list_item', [
                        'id' => $bus_data_each->id,
                        'brand' => $bus_data_each->bus_brand_name,
                        'code' => $bus_details_each->code_no,
                        'depart' => $bus_details_each->departure_time,
                        'start' => $bus_details_each->start_point,
                        'arrive' => $bus_details_each->arrival_time,
                        'end' => $bus_details_each->end_point,
                        'price' => $bus_details_each->price
                    ])
                </li>
            @endforeach
        @endforeach

    @else
        <p class="text-muted">No buses found.</p>
    @endif
</ul>

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

       /* $('.editable').on('click', function(e) {

            e.preventDefault();
            var $this = $(this); //this var contains the reference object of .editable class
            if ($this.find('input').length > 0) {
                return;
            }

            var currentText = $this.text().trim();
            var input = $('<input type="text" class="inline-input">').val(currentText);
            $this.empty().append(input);
            input.focus();
            console.log(input);



            input.on('blur keydown', function(e) {
                if (e.type === 'blur' || (e.type === 'keydown' && e.key === 'Enter')) {
                    e.preventDefault();

                    var newValue = $(this).val().trim(); //here this newValue represents the value of input 
                    var id = $this.parents('[data-id]').data('id');
                    var field = $this.data('field');
                    // Replace input with the updated text
                    $this.text(newValue);

                    console.log(id, field);
                    $.ajax({
                        url: '/bus_schedule/' + id,
                        type: 'PUT',
                        data: {
                            id: id,
                            field: field,
                            value: newValue
                        },
                        success: function(response) {

                            console.log('Updated Successfully');
                        },
                        error: function(err) {
                            console.log('Error:', err);
                        }

                    });
                }
            });
        });
*/

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