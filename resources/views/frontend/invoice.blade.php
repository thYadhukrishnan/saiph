<table class="table" style="width:100%" border=1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Hotel</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col">Booking</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->phone }}</td>
      <td>{{ $contact->hotel }}</td>
      <td>{{ $contact->state }}</td>
      <td>{{ $contact->city }}</td>
      <td>{{ $contact->zip }}</td>
      <td>{{ $contact->booking }}</td>
      <td>{{ $contact->comments }}</td>
    </tr>
    @endforeach
  </tbody>
</table>