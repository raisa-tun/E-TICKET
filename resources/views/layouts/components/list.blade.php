<div class="col-sm-12">
    <!-- List view card start -->
    <div class="card">
        <div class="card-header">
            <h5>List View</h5>

        </div>
        <div class="row card-block">
            <div class="col-md-12">
                <ul class="list-view">
                    @foreach($bus_data as $bus_data_each )
                    @foreach($bus_data_each->details as $bus_details_each )
                    <li>
                        <div class="card list-view-media">
                            <div class="card-block">
                                <div class="media">

                                    <div class="media-body">
                                        <div class="row" data-id="{{$bus_data_each->id}}">
                                            <div class="col-sm-2">
                                                <h6 class="d-inline-block">
                                                    <div class="f-13 text-muted m-b-15">
                                                        Bus Brand Name
                                                    </div>
                                                    <div class="editable" contenteditable="true" data-field='bus_brand_name' data-value="{{$bus_data_each->bus_brand_name}}">
                                                        {{$bus_data_each->bus_brand_name}}
                                                    </div>
                                                </h6><br>
                                                <label class="label label-info editable" contenteditable="true" data-field='code_no' data-value="{{$bus_details_each->code_no}}">{{$bus_details_each->code_no}}</label>

                                            </div>
                                            <div class="col-sm-2">
                                                <h6 class="d-inline-block">
                                                    <div class="f-13 text-muted m-b-15">
                                                        Depart
                                                    </div>
                                                    <div class="editable" contenteditable="true" data-field='departure_time' data-value="{{$bus_details_each->departure_time}}">
                                                        {{$bus_details_each->departure_time}}
                                                    </div>
                                                </h6><br>
                                                <label class="label label-info editable" contenteditable="true" data-field='start_point' data-value="{{$bus_details_each->start_point}}">{{$bus_details_each->start_point}}</label>

                                            </div>
                                            <div class="col-sm-2">
                                                <div class="f-13 text-muted m-b-15">
                                                    Time span
                                                </div>
                                                <label class="label label-info">----</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 class="d-inline-block">
                                                    <div class="f-13 text-muted m-b-15">
                                                        Arrive
                                                    </div>
                                                    <div class="editable" contenteditable="true" data-field='arrival_time' data-value="{{$bus_details_each->arrival_time}}">
                                                        {{$bus_details_each->arrival_time}}
                                                    </div>
                                                </h6><br>
                                                <label class="label label-info editable" contenteditable="true" data-field='end_point' data-value="{{$bus_details_each->end_point}}">{{$bus_details_each->end_point}}</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 class="d-inline-block">

                                                    <div class="f-13 text-muted m-b-15">
                                                        Price
                                                    </div>
                                                    <div class="editable" contenteditable="true" data-field='price' data-value="{{$bus_details_each->price}}">
                                                        {{$bus_details_each->price}}
                                                    </div>
                                                </h6>

                                            </div>

                                            <div class="col-sm-2 d-inline">
                                                <button class=" btn btn-danger" style="padding:5px;margin:5px;">
                                                    Book Now!
                                                </button>
                                                <button type="button" class="delete-button" style="margin:5px">
                                                    <span aria-hidden="true">×</span>
                                                </button>

                                            </div>
                                        </div>
                                        <!--    <div class="f-13 text-muted m-b-15">
                                            Software Engineer
                                        </div>-->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endforeach
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

        $('.editable').on('click', function() {

            var $this = $(this); //this var contains the reference object of .editable class
            if ($this.find('input').length > 0) {
                return;
            }

            var currentText = $this.text().trim();
            var input = $('<input type="text" class="inline-input">').val(currentText);
            $this.empty().append(input);
            input.focus();



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

        $(".delete-button").on("click",function(){


            var row= $(this).closest('.row');
            var id = row.data('id');

            if(confirm("Are you sure you want to delete this?")){
                $.ajax({
                    url:'/bus_schedule/'+id,
                    type:'DELETE',
                    
                    success:function(response){
                        console.log(response);
                        alert(response.success);
                        //Remove the row
                        row.remove();
                    },
                    error:function(xhr){
                        console.log();
                        alert('Something went wrong. Please try again.');
                    }
                });
            }
        });

        
    });
</script>