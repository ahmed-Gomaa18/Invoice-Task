@props(['products'])

<div class="row">
    
    <div class="col-sm-12">
        <a href="/product" class="btn btn-danger text-white">+ Create</a>
        <div class="white-box">
            <h3 class="box-title">Products</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Product Name</th>
                            <th class="border-top-0">Product Price</th>
                            <th class="border-top-0">Created Since</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }} $</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
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