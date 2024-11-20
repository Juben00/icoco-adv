<div id="LoginSignupForm" class="vw-100 d-none justify-content-center align-items-center vh-100 position-fixed "
    style="z-index: 1000; background: rgba(0,0,0,0.5);">
    <div class="row justify-content-center col-lg-5">
        <div class="col-md-6 col-lg-10">
            <div class="card">
                <div class="card-body border-2 position-relative">
                    <a id="xButton" class="position-absolute top-0 end-0 m-2 mt-1" style="cursor: pointer;">
                        <i class="bi bi-x fs-2"></i>
                    </a>
                    <div class="flex mb-4 text-sm-center lh-sm">
                        <h1 class="text-danger fs-2 font-monospace">Icoco</h1>
                        <span class="fs-5">Resort Management System</span>
                    </div>
                    <div id="form-container">
                        <form id="login-form">
                            <div class="mb-3">
                                <label for="username" class="form-label fs-6">Email</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fs-6">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Login</button>
                            </div>
                        </form>
                        <!-- Signup Form (hidden by default) -->
                        <form id="signup-form" class="d-none">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="first-name" class="form-label fs-6">First Name</label>
                                    <input type="text" class="form-control" id="first-name"
                                        placeholder="Enter your first name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="last-name" class="form-label fs-6">Last Name</label>
                                    <input type="text" class="form-control" id="last-name"
                                        placeholder="Enter your last name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="sex" class="form-label fs-6">Sex</label>
                                    <select class="form-select" id="sex" required>
                                        <option value="" disabled selected>Select your sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="birthdate" class="form-label fs-6">Birthdate</label>
                                    <input type="date" class="form-control" id="birthdate" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="contact-number" class="form-label fs-6">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact-number"
                                        placeholder="Enter your contact number" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label fs-6">Address</label>
                                    <input class="form-control" id="address" placeholder="Enter your address"
                                        required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fs-6">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="new-password" class="form-label fs-6">Password</label>
                                <input type="password" class="form-control" id="new-password"
                                    placeholder="Create your password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none text-danger" id="toggle-signup">Create Account</a>
                        <a href="#" class="text-decoration-none d-none" id="toggle-login">Back
                            to Login</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="" class="text-decoration-none" style="font-size: 12px;">Forgot
                            password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>