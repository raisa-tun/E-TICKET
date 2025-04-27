<div class="card">
    <div class="card-header text-center">
        <h3>Create new bus schedule</h3>


    </div>
    <div class="card-block">
        <form action="{{route('newSchedule.store')}}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <input type="text" class="form-control" name="bus_brand_name" placeholder="Bus Brand Name">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="total_bus_no" placeholder="Total Bus No.">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="available_bus_no" placeholder="Available Bus No.">
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <input type="text" class="form-control" name="code_no" placeholder="Code no.">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="total_bus_no" placeholder="Total Seats">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="price" placeholder="Price">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="available_seats" placeholder="Available Seats">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="start_point" placeholder="Start Point">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="end_point" placeholder="End Point">
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <input type="text" class="form-control" name="departure_time" placeholder="Departure Time">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="arrival_time" placeholder="Arrival Time">
                </div>
                <div class="col">
                    <select class="form-control" name="ac_or_non_ac" id="ac_or_non_ac">
                        <option value="AC">AC</option>
                        <option value="Non-AC">Non-AC</option>

                    </select>
                </div>
            </div>
            <div style="display:flex; justify-content:center">
                <button type="submit" class="btn btn-primary waves-effect">Submit</button>
            </div>
        </form>

    </div>

</div>
<div style="display:flex; justify-content:center">
    <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>