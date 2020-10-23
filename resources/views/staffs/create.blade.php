@extends('layouts.master')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Add Employee</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>  
          <div class="breadcrumb-item">Add Employee</div>
        </div>
      </div>
      @if(count($errors) > 0)
      @foreach($errors->all() as $error)
     <div class="alert alert-danger" style="width:50%; margin:auto">
                 {{$error}}</div>
         @endforeach
     @endif
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-4">
          
           
          </div>
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="padding-20">
                    <form method="POST" action="{{route('staffs.store')}}" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Full Name</label>
                          <input type="text" class="form-control" value="{{Auth::user()->name}}" readonly>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{Auth::user()->email}}" readonly>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Role</label>
                            <input type="text" class="form-control" value="{{Auth::user()->usertype}}" readonly>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                              <label for="phone">Phone</label>
                              <input type="phone" class="form-control"  name="phone">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="no_of_staff">City</label>
                                <input type="text" class="form-control" name="city">
                              </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="date_of_birth">Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth">
                              </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="admin_image">Date Employed</label>
                              <input type="date" class="form-control" name="date_employed">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="company_name">Department</label>
                                <input type="text" class="form-control"  name="department">
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label for="admin_image">Experience</label>
                              <input type="text" class="form-control" name="experience">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="company_name">Status</label>
                                <input type="text" class="form-control"  name="status">
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label for="photo">Photo</label>
                              <input name="photo" id="photo" type="file" class="form-control"
                              accept="photo/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                              <br><div><img id="output" style="width:100px"></div>
                              </div>
                          </div>  
                        </div>
                      </div>
                      <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">Add Employee</button>
                      </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i
            class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Theme Customizer</div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Theme Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label> <span class="control-label p-r-20">Light</span>
                            <input type="radio" name="custom-switch-input" value="1"
                            class="custom-switch-input" checked> <span
                            class="custom-switch-indicator"></span>
                        </label>
                    </div>
                    <div class="selectgroup layout-color  w-50">
                        <label> <span class="control-label p-r-20">Dark&nbsp;</span>
                            <input type="radio" name="custom-switch-input" value="2"
                            class="custom-switch-input"> <span
                            class="custom-switch-indicator"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Colors</h6>
                <div class="sidebar-setting-options">
                    <ul class="sidebar-color list-unstyled mb-0">
                        <li title="white" class="active">
                            <div class="white"></div>
                        </li>
                        <li title="blue">
                            <div class="blue"></div>
                        </li>
                        <li title="coral">
                            <div class="coral"></div>
                        </li>
                        <li title="purple">
                            <div class="purple"></div>
                        </li>
                        <li title="allports">
                            <div class="allports"></div>
                        </li>
                        <li title="barossa">
                            <div class="barossa"></div>
                        </li>
                        <li title="fancy">
                            <div class="fancy"></div>
                        </li>
                    </ul>
                </div>
    
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Theme Colors</h6>
                <div class="theme-setting-options">
                    <ul class="choose-theme list-unstyled mb-0">
                        <li title="white" class="active">
                            <div class="white"></div>
                        </li>
                        <li title="blue">
                            <div class="blue"></div>
                        </li>
                        <li title="coral">
                            <div class="coral"></div>
                        </li>
                        <li title="purple">
                            <div class="purple"></div>
                        </li>
                        <li title="allports">
                            <div class="allports"></div>
                        </li>
                        <li title="barossa">
                            <div class="barossa"></div>
                        </li>
                        <li title="fancy">
                            <div class="fancy"></div>
                        </li>
                        <li title="cyan">
                            <div class="cyan"></div>
                        </li>
                        <li title="orange">
                            <div class="orange"></div>
                        </li>
                        <li title="green">
                            <div class="green"></div>
                        </li>
                        <li title="red">
                            <div class="red"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Layout Options</h6>
                <div class="theme-setting-options">
                    <label> <span class="control-label p-r-20">Compact
                            Sidebar Menu</span> <input type="checkbox"
                        name="custom-switch-checkbox" class="custom-switch-input"
                        id="mini_sidebar_setting"> <span
                        class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="mt-3 mb-3 align-center">
                <a href="#"
                    class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
                    <i class="fas fa-undo"></i> Restore Default
                </a>
            </div>
        </div>
    </div>
    @endsection