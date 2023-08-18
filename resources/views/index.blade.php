@include('layout.header')
<h1 class="text-primary text-center">LIST OF CHANNEL</h1>
<div class="container">
  <div class="row">
    <div class="col-md-10 ms-auto me-auto">
      <div class="d-flex justify-content-end">
        <a class="btn btn-success" href="{{route('create')}}">Add New Employee</a>
      </div>
      <div style="color: green">
        
      </div>
      <table class="table table-bordered table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Channel Name</th>
            <th scope="col">Description</th>
            <th scope="col">Subcribers Count</th>
            <th scope="col">URL</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($channels as $channel)
            <tr>
              <th scope="row">{{ $channel->ChannelID  }}</th>
              <td>{{ $channel->ChannelName }}</td>
              <td>{{ $channel->Description }}</td>
              <td>{{ $channel->SubcribersCount }}</td>
              <td><a href="{{ $channel['URL'] }}">{{ $channel['URL'] }}</a></td>
              <td>{{ $channel->Created_At }}</td>
              <td>{{ $channel->Updated_At }}</td>
              <td>
                <a href="" class="me-2" ><i class="fa-solid fa-eye"></i></a>
                <a href="" class="me-2" ><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="me-2" ><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@include('layout.footer')