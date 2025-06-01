<form class="search" action="{{route('search.schedule')}}" method=GET>
<div class="col-lg-12 ">
    <div class="card card-main">

        <div class="card-block">
            <div class="input-group">
                <input class="form-control" name='from' type="text" placeholder="From">
            </div>
            <div class="input-group">
                <input class="form-control" name='to' type="text" placeholder="To">
            </div>
            
            <div class="input-group">
                <input class="form-control" name='date' type="date" placeholder="Date">
            </div>
          
                    <button type="submit" class="btn btn-primary">Search</button>
                
        </div>
            
        </div>
    </div>
</div>
</form>
