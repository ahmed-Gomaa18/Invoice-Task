@props(['customers'])

<div class="row">
    
    <div class="col-sm-12">
        <a href="client" class="btn btn-danger text-white">+ Create</a>
        <div class="white-box">
            <h3 class="box-title">Clients</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">Address</th>
                            <th class="border-top-0">Created Since</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->created_at->diffForHumans() }}</td>
                                <td>
                                    <span>
                                        <button class="btn btn-danger text-white">Delete</button>
                                        <button class="btn btn-success text-white">Update</button>
                                    </span>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>