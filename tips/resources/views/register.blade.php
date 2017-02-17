@extends('layouts.policelayout')

@section('content')
<div id="page-wrapper"
  <form class="form-horizontal col-lg-12 col-md-12 ">
      <div class="container-fluid">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Owner information</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="number" class="form-control" name="omobno" id="mobno" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <textarea class="form-control" rows="3" name="oaddress" id="address" ></textarea>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="email">Email</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="email" class="form-control" name="oemail" id="email" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="identity">Identity Proof</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="file" class="form-control" name="oidentity" id="identity" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="authority">Authority Person</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="oauthority" id="authority">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="police">Police Station</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="opolice" id="police">
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="propimg">Property Images</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="file" class="form-control" name="opropimg" id="propimg" >
        </div>
       </div>
       <div class="col-lg-5 col-md-6 col-sm-6 ">
         <label class="control-label col-lg-4 col-md-4 col-sm-4" for="landdoc">Property Docs</label>
         <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="file" class="form-control" name="olanddoc" id="landdoc" >
          </div>
         </div>
       </div>
     </div>
	   <br/>
      <div class="panel panel-primary">
      <div class="panel panel-header">
      <h3>Tenant information</h3>
     </div>
      <div class="panel panel-body">
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="tname" id="name" >
      </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="number" class="form-control" name="omobno" id="mobno" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <textarea class="form-control" rows="3" name="oaddress" id="address" ></textarea>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="email">Email</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="email" class="form-control" name="oemail" id="email" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="identity">Identity Proof</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="file" class="form-control" name="oidentity" id="identity" >
        </div>
      </div>
      <br/>
      <br/>
      <h4 style="color:blue">Tenant Family Information</h4>
      <br/>
      <div class="col-lg-10 col-md-10 col-sm-10">
      <div class="table-responsive col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8" >
            <table class="table table-bordered table-striped table-highlight">
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Relation</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control"/></td>
                        <td>
                            <select class="form-control">
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1">
          <button type="submit" class="btn btn-info btn-sm">ADD</button>
        </div>
      </div>
    </div>
    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-5 col-md-5 col-sm-5 ">
      <label class="control-label col-lg-6 col-md-6 col-sm-6 " for="rentno">Rental Agreement No</label>
      <div class="col-lg-6 col-md-6 col-sm-6 ">
          <input type="number" class="form-control" name="orentno" id="rentno" >
      </div>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 ">
      <label class="control-label col-lg-6 col-md-6 col-sm-6 " for="policeno">Police Badge No</label>
      <div class="col-lg-6 col-md-6 col-sm-6 ">
          <input type="number" class="form-control" name="opoliceno" id="policeno" >
      </div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1">
      <button type="submit" class="btn btn-info btn-md">Submit</button>
    </div>
    <br/>
    <br/>
    <br/>
    </div>
    </form>
	</div>
@endsection