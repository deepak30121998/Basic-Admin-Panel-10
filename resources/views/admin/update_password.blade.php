@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="admin_email">Email address</label>
                    <input class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" style="background-color: #666" readonly>
                  </div>

                  <div class="form-group">
                    <label for="current_pwd">Current Password</label>
                    <input type="password" name="" class="form-control" id="current_pwd" name="current_pwd" placeholder="Current Password">
                  </div>

                  <div class="form-group">
                    <label for="new_pwd">New Password</label>
                    <input type="password" name="" class="form-control" id="new_pwd" name="new_pwd" placeholder="New Password">
                  </div>

                  <div class="form-group">
                    <label for="confirm_pwd">Confirm Password</label>
                    <input type="password" name="" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm Password">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
