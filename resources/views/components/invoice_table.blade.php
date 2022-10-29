@props(['invoices'])

<div class="row">
    
    <div class="col-sm-12">
        <a href="invoice" class="btn btn-danger text-white">+ Create</a>
        <div class="white-box">
            <h3 class="box-title">Invoices</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">Number</th>
                            <th class="border-top-0">Client Name</th>
                            <th class="border-top-0">Some Product</th>
                            <th class="border-top-0">Total</th>
                            <th class="border-top-0">Created Since</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                            
                            <tr>
                                <td>{{ $invoice->number }}</td>
                                <td>{{ $invoice->customer->name }}</td>
                                <td>{{ $invoice->products[0]->name }}</td>
                                <td>{{ $invoice->total }} $</td>
                                <td>{{ $invoice->created_at->diffForHumans() }}</td>
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