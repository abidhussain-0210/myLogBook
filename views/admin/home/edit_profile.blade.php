@extends('admin.home.layout.master')

@section('page-title')
  Account Setting
@endsection

@section('main-content')
  <div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
      <div class="col-md-6">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
    
  <h4 class="py-3 mb-4">
    Account Settings 
  </h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
      
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          {{-- @forelse($userProfile as $images)
          @if($images->image == "No Image Found")
          <img src="/uploads/no-img.jpg" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          @else --}}
          <img src="/uploads/{{ $userProfile->image }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          {{-- @endif
          @empty
        <div class="alert alert-danger">No Record Found</div>
        @endforelse --}}

          <div class="button-wrapper">
            <label for="image" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">User Photo</span>
               <i class="bx bx-upload d-block d-sm-none"></i>
              {{-- <input type="file" id="image" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" /> --}}
            </label>
            {{-- <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button> --}}

            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div>
        </div>
      </div>
    
      <hr class="my-0">
      <div class="card-body">


        <form id="UserProfileForm" name="UserProfileForm" method = "POST" action = "{{ route('profileUpdate' , $userProfile->id) }}" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="row">
            <div class="mb-3 col-md-6" @error('firstName') has-error @enderror>
              <label for="firstName" class="form-label">First Name</label>
              <input class="form-control" type="text" id="firstName" name="firstName" placeholder="First Name" value="{{ $userProfile->first_name }}"/>
              @error('firstName')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('lastName') has-error @enderror>
              <label for="lastName" class="form-label">Last Name</label>
              <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name" value="{{ $userProfile->last_name }}"/>
              @error('lastName')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('email') has-error @enderror>
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" placeholder="example@gmail.com" value="{{ $userProfile->email }}"/>
              @error('email')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('phoneNumber') has-error @enderror>
              <label class="form-label" for="phoneNumber">Phone Number</label>
              <div class="input-group input-group-merge">
                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="1111 1234567" value="{{ $userProfile->phone_number }}"/>
              </div>
              @error('phoneNumber')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('address') has-error @enderror>
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $userProfile->address }}" />
              @error('address')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('state') has-error @enderror>
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" placeholder="State" value="{{ $userProfile->state }}"/>
              @error('state')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('country') has-error @enderror>
              <label class="form-label" for="country">Country</label>
              <select id="country" name="country" class="select2 form-select">
                <option value="none" {{ old('country') == 'none' ? 'selected' : '' }}>Select</option>
                <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>Australia</option>
                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                <option value="Pakistan" {{ old('country') == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="America" {{ old('country') == 'America' ? 'selected' : '' }}>America</option>
              </select>
              @error('country')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('language') has-error @enderror>
              <label for="language" class="form-label">Language</label>
              <select id="language" name="language" class="select2 form-select">
                <option value="none" {{ old('language') == 'none' ? 'selected' : '' }}>Select</option>
                <option value="English" {{ old('language') == 'English' ? 'selected' : '' }}>English</option>
                <option value="Urdu" {{ old('language') == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                <option value="French" {{ old('language') == 'French' ? 'selected' : '' }}>French</option>
                <option value="German" {{ old('language') == 'German' ? 'selected' : '' }}>German</option>
                <option value="Portuguese" {{ old('language') == 'Portuguese' ? 'selected' : '' }}>Portuguese</option>
              </select>
              @error('language')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 col-md-6" @error('image') has-error @enderror>
              <label for="image" class="form-label">Upload Image</label>
              <input class="form-control" type="file" id="image" name="image" value="{{ $userProfile->image }}"/>
              @error('image')
               <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
              @enderror
            </div>

          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>


          </div>
          <!-- / Content -->

          
          
@endsection