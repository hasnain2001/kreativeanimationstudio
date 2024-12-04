<section>
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <h4>Profile Information</h4>
                        <p class="mb-0">Update your account's profile information and email address.</p>
                    </div>
                    <div class="card-body">
                        <!-- Verification Form -->
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <!-- Profile Update Form -->
                        <form method="post" action="{{ route('profile.update') }}" class="mt-3">
                            @csrf
                            @method('patch')

                            <!-- Name Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                @if ($errors->has('name'))
                                    <div class="text-danger mt-1">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                                @if ($errors->has('email'))
                                    <div class="text-danger mt-1">{{ $errors->first('email') }}</div>
                                @endif

                                <!-- Email Verification -->
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="alert alert-warning mt-3">
                                        <p class="mb-2">Your email address is unverified.</p>
                                        <button form="send-verification" class="btn btn-sm btn-link p-0">Click here to re-send the verification email.</button>
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="text-success mt-2">A new verification link has been sent to your email address.</p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <!-- Save Button -->
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-dark">Save</button>
                                @if (session('status') === 'profile-updated')
                                    <p class="text-success mb-0" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                                        Saved.
                                    </p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
