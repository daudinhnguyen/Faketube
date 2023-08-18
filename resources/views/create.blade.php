@include('layout.header')
<h1 class="text-primary text-center">ADD NEW CHANNEL</h1>
<div class="container">
  <div class="row">
    <div class="col-md-10 ms-auto me-auto">
      @if ($errors->any())
        <div class="alert alert-danger p-0 mt-2">
            <ul class="mb-1 mt-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form class="row g-3 needs-validation" action="{{route('store')}}" method="POST" novalidate>
        @csrf
        <div class="col-md-12">
          <label for="ChannelName" class="form-label">Channel Name</label>
          <input type="text" class="form-control" id="ChannelName" name="ChannelName" value="" required>
          <div class="invalid-feedback">
            Please enter channel name.
          </div>
        </div>
        <div class="col-md-12">
          <label for="Description" class="form-label">Description</label>
          <textarea type="text" class="form-control" name="Description" id="Description" value="" cols="5" required></textarea>
          <div class="invalid-feedback">
            Please enter channel description.
          </div>
        </div>
        <div class="col-md-6">
          <label for="SubcribersCount" class="form-label">Subcribers Count</label>
          <input type="text" class="form-control" name="SubcribersCount" id="SubcribersCount" value="" required>
          <div class="invalid-feedback">
            Please enter channel subcribers count.
          </div>
        </div>
        <div class="col-md-6">
          <label for="address" class="form-label">URL</label>
          <input type="text" class="form-control" name="address" id="address" value="" required>
          <div class="invalid-feedback">
            Please enter channel url.
          </div>
        </div>
        <div class="col-12 d-flex justify-content-end">
          <button class="btn btn-primary" name="submit" type="submit">Add Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
@include('layout.footer')