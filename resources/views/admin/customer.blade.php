@extends('layouts.master')


@section('title','Client Registration')



@section('content')

<style type="text/css">
    * {
  box-sizing: border-box;
}

input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 0px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  
  padding: 20px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
      <link rel="stylesheet" type="text/css" href="{{ url('assets/login/style.css') }}">
             

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Add Customer</strong></h4>
              </div>
              <div class="card-body">
					      <div class="container">
						<form action="{{ url('add-customer') }}" method="POST">
							{{csrf_field()}}					
							<div class="row">

								<div class="col-25">
								  <label for="lname">Customer Name:</label>
								</div>
								<div class="col-75">
									<input type="text" class="form-control" value="{{ old('customer_name') }}" placeholder="Customer Name" name="customer_name" required>
                  @if ($errors->has('customer_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('customer_name') }}</strong>
                        </span>
                    @endif
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								  <label for="lname">Customer Code :</label>
								</div>
								<div class="col-75">
									<input type="text" class="form-control"  placeholder="Customer Code" name="customer_code" required>
                  @if ($errors->has('customer_code'))
                        <span class="help-block">
                          <strong>{{ $errors->first('customer_code') }}</strong>
                        </span>
                    @endif
								</div>
							</div>
							<div class="row">
								<input type="submit"  value="Submit" id="formSubmit">
							</div>
						</form>
							</div>
					    </div>
					     </div>
					  </div>

					
              </div>
            </div>


            <script src="/dashboard/vendor/jquery/jquery.min.js"></script>
  
      

@endsection

