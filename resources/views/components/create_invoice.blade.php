@props(['customers', 'products'])

<div class="col-lg-20 col-xlg-9 col-md-12">

    <span class="btn d-grid btn-danger text-white mb-2" > Create Invoice </span>

    <div class="card">
        <div class="card-body">

            <h1>No: <span id="invoice-number"></span></h1>

            <form method="post" action="/invoice" class="form-horizontal form-material">

                @csrf

                <div class="form-group mb-4">
                    <label class="col-sm-12">Select Customer</label>

                    <div class="col-sm-6 border-bottom">

                        <select id="customer" class="form-select shadow-none p-0 border-0 form-control-line" name="customer" onchange="enableProduct()">
                           
                            <option disabled selected hidden> Select Your Customer From Here... </option>
                            @foreach ($customers as $customer )
                                <option value="{{$customer->id}}" >{{$customer->name}}</option>
                            @endforeach
                        </select>
                        
                        
                    </div>

                    @error('customer')
                        <p style="color: red;"> {{ $message }} </p>
                    @enderror
                </div>


                <div class="form-group mb-4">
                    <label class="col-sm-12">Select Product</label>

                    <div class="col-sm-6 border-bottom">

                        <input id="product-count" type="number" value="1" class="col-md-1" name="count" min="1" disabled>

                        <select id="product" class="form-select shadow-none p-0 border-0 form-control-line" name="product" disabled>

                            <option disabled selected hidden> Select Your Product From Here... </option>
                            @foreach ($products as $product )
                                <option value="{{$product->id}}">{{$product->name}} | {{$product->price}} $</option>
                            @endforeach
                        </select>

                        
                        
                    </div>
                    @error('product')
                    <p style="color: red;"> {{ $message }} </p>
                    @enderror

                    <br>
                    <span id="add-product" class="btn btn-warning" onclick="startAction(this)" disabled >Add Product</span>
                </div>
                

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Details</label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea id="invoice-note" name="note" placeholder="Details HERE....." rows="8" class="form-control p-0 border-0" readonly></textarea>
                    </div>
                </div>


                <h3>Totlal: <span id="total"> 0 </span></h3>
                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <input class="btn btn-success" type="submit" value="Submit" >
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

