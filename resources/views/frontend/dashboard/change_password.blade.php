@extends('frontend.dashboard.user_dashboard')


@section('userdashboard')
    @php
        $id = Auth::user()->id;
        $profileData = App\Models\User::find($id);
    @endphp


        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>

                <form method="post" action="{{ route('user.password.update') }}"  enctype="multipart/form-data" class="row pt-40px">
                    @csrf

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Old Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password"  name="old_password"
                                  class="form-control 
                                  @error('old_password')
                                      is-invalid
                                  @enderror"  id="old_password" />

                                  @error('old_password')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">New Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password"  name="new_password"
                                  class="form-control 
                                  @error('new_password')
                                      is-invalid
                                  @enderror"  id="new_password" />

                                  @error('new_password')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Confirm New Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password"  name="new_password_confirmation"
                                  class="form-control"  id="new_password_confirmation" />

                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- end setting-body -->
        </div><!-- end tab-pane -->
    @endsection
