<form action="{{route('add_speaker')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Name</label>
      <div class="col-md-8 col-lg-9">
        <input name="fullname" type="text" class="form-control" id="fullName" value="">
      </div>
    </div>

    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Profile</label>
      <div class="col-md-8 col-lg-9">
        <input name="profile" type="file" class="form-control" id="fullName" value="">
      </div>
    </div>

    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Occupation</label>
      <div class="col-md-8 col-lg-9">
        <input name="occupation" type="text" class="form-control" id="fullName" value="">
      </div>
    </div>

    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Twitter Link</label>
      <div class="col-md-8 col-lg-9">
        <input name="twitter" type="text" class="form-control" id="fullName" value="">
      </div>
    </div>

    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Title</label>
      <div class="col-md-8 col-lg-9">
        <select name="titleLabel" class="block mt-1 w-full border-grey-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option value="Honorable">Guest Of Honour</option>
            <option value="Normal">Speaker</option>
        </select>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
  </form><!-- End Profile Edit Form -->