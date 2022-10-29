
<div class="col-lg-20 col-xlg-9 col-md-12">
    <div class="card">
        <div class="card-body">
            
            <form method="post" action="/client" class="form-horizontal form-material">

                @csrf
                
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Full Name</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="name" type="text" placeholder="Enter Your Full Name Please..."
                            class="form-control p-0 border-0"> 
                    </div>

                    @error('name')
                        <p style="color: red;"> {{ $message }} </p>
                    @enderror

                </div>

                <div class="form-group mb-4">
                    <label for="example-email" class="col-md-12 p-0">Email</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="email" type="email" placeholder="exampel@gmail.com"
                            class="form-control p-0 border-0" name="example-email"
                            id="example-email">
                    </div>

                    @error('email')
                        <p style="color: red;"> {{ $message }} </p>
                    @enderror
                    
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Address No</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="address" type="text" placeholder="Enter Your Address Here Please..."
                            class="form-control p-0 border-0">
                    </div>

                    @error('address')
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
