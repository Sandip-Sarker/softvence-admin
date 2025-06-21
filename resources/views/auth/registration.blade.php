@extends('frontend.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 center-screen">
                <div class="card animated fadeIn w-100 p-3">
                    <div class="card-body">
                        <h4>Sign Up</h4>
                        <hr/>
                        <div class="container-fluid m-0 p-0">
                                <div class="row m-0 p-0">
                                    <div class="col-md-4 p-2">
                                        <label>First Name</label>
                                        <input id="first_name" placeholder="First Name" class="form-control" type="text"/>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <label>Last Name</label>
                                        <input id="last_name" placeholder="Last Name" class="form-control" type="text"/>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <label>Mobile Number</label>
                                        <input id="phone" placeholder="Mobile" class="form-control" type="mobile"/>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <label>Email Address</label>
                                        <input id="email" placeholder="User Email" class="form-control" type="email"/>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <label>Password</label>
                                        <input id="password" placeholder="User Password" class="form-control" type="password"/>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <label>Confirm Password</label>
                                        <input id="confirm_password" placeholder="User Confirm  Password" class="form-control" type="password"/>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-md-4 p-2">
                                        <button onclick="SubmitRegister()" class="btn mt-3 w-100  bg-gradient-primary">Complete</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>

        async function SubmitRegister() {

            let first_name          =$('#first_name').val();
            let last_name           =$('#last_name').val();
            let phone               =$('#phone').val();
            let email               =$('#email').val();
            let password            =$('#password').val();
            let confirm_password    =$('#confirm_password').val();

            // Regular expressions
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^(?:\+88|88)?01[3-9]\d{8}$/;

            if (first_name.length === 0) {
                errorToast("First Name is required");
            } else if (last_name.length === 0) {
                errorToast("Last Name is required");
            } else if (phone.length === 0) {
                errorToast("Phone Number is required");
            } else if (!phoneRegex.test(phone)) {
                errorToast("Phone Number is invalid");
            } else if (email.length === 0) {
                errorToast("Email is required");
            } else if (!emailRegex.test(email)) {
                errorToast("Email is invalid");
            } else if (password.length === 0) {
                errorToast("Password is required");
            }else if (password.length < 6) {
                errorToast("Password must be at least 6 characters");
            }else if (confirm_password.length === 0) {
                errorToast("Confirm Password is required");
            } else if (password !== confirm_password) {
                errorToast("Confirm Passwords do not match");
            } else {
                showLoader();
                let res = await axios.post('/registration', {
                    first_name:first_name,
                    last_name:last_name,
                    phone:phone,
                    email:email,
                    password:password
                });
                hideLoader();

                if (res.status === 200 && res.data.status == 'success'){
                    successToast(res.data.message);
                    setTimeout(function () {
                        window.location.href='/login';
                    }, 2000)
                }else {
                    errorToast(res.data.message);
                }
            }

        }
    </script>

@endsection

