@extends('layouts.master')

@section('content')
    <div class="mg-page-title parallax" style="background-position: 50% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 30px;">
        <div class="mg-tab-left-nav">

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#profile3" aria-controls="profile3" role="tab"
                                                          data-toggle="tab"><i class="glyphicon glyphicon-user"></i>
                        Profile</a>
                </li>
                <li role="presentation"><a href="#password3" aria-controls="password3" role="tab" data-toggle="tab"><i
                                class="glyphicon glyphicon-lock"></i> Password</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="profile3">
                    <h2>Edit Profile</h2>
                    <hr/>
                    <div style="padding-left: 10%; padding-right: 10%;">
                        <form method="post">
                            <div class="mg-book-form-input">
                                <label for="first_name">First Name</label>
                                <input class="form-control" id="first_name" name="first_name"/>
                            </div>
                            <div class="mg-book-form-input">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" name="last_name"/>
                            </div>
                            <div class="mg-book-form-input">
                                <label for="email">E-Mail Address</label>
                                <input class="form-control" id="email" name="email"/>
                            </div>
                            <button type="submit" class="btn btn-main">Update</button>
                        </form>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="password3">
                    <h2>Change Password</h2>
                    <hr/>
                    <div style="padding-left: 10%; padding-right: 10%;">
                        <form method="post">
                            <div class="mg-book-form-input">
                                <label>Old Password</label>
                                <input class="form-control" type="password"/>
                            </div>
                            <div class="mg-book-form-input">
                                <label>New Password</label>
                                <input class="form-control" type="password" required/>
                            </div>
                            <div class="mg-book-form-input">
                                <label>Repeat Password</label>
                                <input class="form-control" type="password" required/>
                            </div>
                            <button type="submit" class="btn btn-main">Update Password</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection