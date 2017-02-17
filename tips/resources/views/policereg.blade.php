@extends('layouts.dashlayout')

@section('content')
<div id="page-wrapper">
  
    <form class="form-horizontal col-lg-offset-1 col-lg-10">
	<div class="container-fluid col-lg-10">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Police Registration</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Badge Id</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Station Area</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-sm-2 col-md-2 col-lg-offset-4 btn-lg-2">
        <button type="submit" class="btn btn-info btn-md">Submit</button>
      </div>
       </div>
     </div>
    <br/>
    <br/>
    <br/>
	</div>
    </form>
</div>
@endsection