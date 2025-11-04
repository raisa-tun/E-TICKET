<div class="card list-view-media">
    <div class="card-block">
        <div class="media">
            <div class="media-body">
                <div class="row" data-id="{{ $id }}">
                    <div class="col-sm-2">
                        <h6 class="d-inline-block">
                            <div class="f-13 text-muted m-b-15">Bus Brand Name</div>
                            <div class="editable"  data-field="bus_brand_name" data-value="{{ $brand }}">
                                {{ $brand }}
                            </div>
                        </h6><br>
                        <label class="label label-info editable"  data-field="code_no" data-value="{{ $code }}">
                            {{ $code }}
                        </label>
                    </div>

                    <div class="col-sm-2">
                        <h6 class="d-inline-block">
                            <div class="f-13 text-muted m-b-15">Depart</div>
                            <div class="editable"  data-field="departure_time" data-value="{{ $depart }}">
                                {{ $depart }}
                            </div>
                        </h6><br>
                        <label class="label label-info editable"  data-field="start_point" data-value="{{ $start }}">
                            {{ $start }}
                        </label>
                    </div>

                    <div class="col-sm-2">
                        <div class="f-13 text-muted m-b-15">Time span</div>
                        <label class="label label-info">----</label>
                    </div>

                    <div class="col-sm-2">
                        <h6 class="d-inline-block">
                            <div class="f-13 text-muted m-b-15">Arrive</div>
                            <div class="editable"  data-field="arrival_time" data-value="{{ $arrive }}">
                                {{ $arrive }}
                            </div>
                        </h6><br>
                        <label class="label label-info editable" contenteditable="true" data-field="end_point" data-value="{{ $end }}">
                            {{ $end }}
                        </label>
                    </div>

                    <div class="col-sm-2">
                        <h6 class="d-inline-block">
                            <div class="f-13 text-muted m-b-15">Price</div>
                            <div class="editable"  data-field="price" data-value="{{ $price }}">
                                {{ $price }}
                            </div>
                        </h6>
                    </div>

                    <div class="col-sm-2 d-inline">
                        <button class="btn btn-danger" style="padding:5px;margin:5px;">Book Now!</button>
                        <button class="btn btn-primary edit-button" style="padding:5px;margin:5px;">Edit</button>
                        <button class="btn btn-success save-button" style="padding:5px;margin:5px; display:none;">Save</button>
                        <button type="button" class="delete-button" style="margin:5px">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>