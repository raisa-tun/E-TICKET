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

                                            <div class="col-sm-1">
                                                <button class="d-inline-block btn btn-danger" style="padding:10px">
                                                    Book Now!
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

    $('.editable').on('blur keydown', function(e) {
                if (e.type === 'blur' || (e.type === 'keydown' && e.key === 'Enter')) {
                        e.preventDefault();

                        var id = $(this).parents('[data-id]').data('id');
                        var field = $(this).data('field');
                        var value = $(this).html().trim();
                        console.log(id,field,value);                       
                        $.ajax({
                            url: '/bus_schedule/' + id,
                            type: 'PUT',
                            data: {
                                id: id,
                                field: field,
                                value: value
                            },
                            success: function(response) {

                                console.log('Updated Successfully');
                            },
                            error: function(err) {
                                console.log('Error:',err);
                            }
                        
                        });
                    }
                    
                });
            });
</script>