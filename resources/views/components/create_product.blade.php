
<div class="col-lg-20 col-xlg-9 col-md-12">
    <div class="card">
        <div class="card-body">
            
            <form method="post" action="/product" class="form-horizontal form-material">

                @csrf
                
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Product Name</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="name" type="text" placeholder="Enter Your Product Name Here Please..."
                            class="form-control p-0 border-0"> 
                    </div>

                    @error('name')
                        <p style="color: red;"> {{ $message }} </p>
                    @enderror

                </div>


                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Product Price</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="price" type="number" placeholder="Enter Your Price Here Please..."
                            class="form-control p-0 border-0">
                    </div>

                    @error('price')
                        <p style="color: red;"> {{ $message }} </p>
                    @enderror                    

                </div>

                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>