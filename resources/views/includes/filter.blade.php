    {{-- Sidebar //--}}
    <div id="filter" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h4 class="pl-3 pr-1">Filters <a href="#" class="float-right text-primary" style="font-size: 13px;">reset filter</a></h4>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <p> <i class="fa fa-calendar-check-o mr-2" aria-hidden="true"></i>Available Reservation</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <form class="form-inline px-3">
            <div class="custom-control custom-checkbox my-1 mr-sm-2 mx-2">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label text-muted" for="customControlInline">Day</label>
            </div>
            <div class="custom-control custom-checkbox my-1 mr-sm-2 mx-2">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label text-muted" for="customControlInline">This week</label>
            </div>
          </form>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class='col-12'>
                <div class="form-group">
                  <input type="date" class="form-control date-picker" id="example">
                </div>
            </div>
            <div class="col-12">
              <p> <i class="fa fa-flag mr-2 text-dark" aria-hidden="true"></i>Country</p>
              <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Select Country...</option>
                  <option value="1">...</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <p> <i class="fas fa-globe-americas mr-2 text-dark" aria-hidden="true"></i>Languages</p>
              <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Select Languages...</option>
                  <option value="1">...</option>
                </select>
              </div>
            </div>
            
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p> <i class="fas fa-mars mr-2 text-dark" aria-hidden="true"></i>Gender</p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

         <form class="form-inline px-3">
           <div class="custom-control custom-checkbox my-1 mr-sm-2 mx-2">
             <input type="checkbox" class="custom-control-input" id="customControlInline">
             <label class="custom-control-label text-muted" for="customControlInline">Male</label>
           </div>
           <div class="custom-control custom-checkbox my-1 mr-sm-2 mx-2">
             <input type="checkbox" class="custom-control-input" id="customControlInline">
             <label class="custom-control-label text-muted" for="customControlInline">Female</label>
           </div>
         </form>
       </div>
       <div class="col-12">
        <p> <i class="far fa-clock mr-2 text-dark" aria-hidden="true"></i>Duration</p>
        <div class="input-group mb-3">
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Select Languages...</option>
            <option value="1">...</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <p> <i class="far fa-money-bill-alt mr-2 text-dark" aria-hidden="true"></i>Session Rate</p>
        <section class="range-slider">
          <input value="5" min="0" max="15" step="0.5" type="range">
          <input value="10" min="0" max="15" step="0.5" type="range">
        </section>
      </div>
      <div class="col-12">
        <div class="filter-btn mt-3">
        <div class="btn btn-primary btn-sm">Apply</div>
        <div class="btn btn-light btn-sm">Reset Filter</div>
      </div>
      </div>
        </div>
    </div>
        {{-- <hr class="w-75 mx-auto"> 
        <div class="row">
          <div class="col-12 ">
            <div class="fees w-100 text-center">
              <div class="time ">
                60 Minutes
              <label for="" class="bg-success p-2 text-light">350EGP</label>
            </div>
            <div class="time text-center">
              60 Minutes
            <label for="" class="bg-success p-2 text-light">350EGP</label>
          </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <h4 class="title-text">Available Timeslots</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h6 class="date">Friday, July 24, 2020</h6>
          </div>
          <div class="col-12">
            <div class="row date-row">
              <div class="col-8"><h6 class="date"><i class="far fa-clock text-muted"></i> 07:20 PM - 08:20 PM (60 Min)</h6></div>
              <div class="col-4"><a href="#" type="button" class="btn btn-primary text-light side-book-btn">Book Now</a></div>
              <hr width="80%">
            </div>
            <div class="row date-row">
              <div class="col-8"><h6 class="date"><i class="far fa-clock text-muted"></i> 07:20 PM - 08:20 PM (60 Min)</h6></div>
              <div class="col-4"><a href="#" type="button" class="btn btn-primary text-light side-book-btn">Book Now</a></div>
            </div>
            <hr width="80%">
            <div class="row date-row">
              <div class="col-8"><h6 class="date"><i class="far fa-clock text-muted"></i> 07:20 PM - 08:20 PM (60 Min)</h6></div>
              <div class="col-4"><a href="#" type="button" class="btn btn-primary text-light side-book-btn">Book Now</a></div>
              <hr width="80%">
            </div>
            <div class="row date-row">
              <div class="col-8"><h6 class="date"><i class="far fa-clock text-muted"></i> 07:20 PM - 08:20 PM (60 Min)</h6></div>
              <div class="col-4"><a href="#" type="button" class="btn btn-primary text-light side-book-btn">Book Now</a></div>
              <hr width="80%">
            </div>
            <div class="row date-row">
              <div class="col-8"><h6 class="date"><i class="far fa-clock text-muted"></i> 07:20 PM - 08:20 PM (60 Min)</h6></div>
              <div class="col-4"><a href="#" type="button" class="btn btn-primary text-light side-book-btn">Book Now</a></div>
              <hr width="80%">
            </div>
            <div class="row">
              <div class="col-12">
                <p class="more-slots"><a href="#">See More Timeslots</a></p>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      {{--// Sidebar--}}