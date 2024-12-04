<section class="bg-dark text-white p-4 rounded">
    <header>
        <h2 class="text-white">
            {{ __('Update Password') }}
        </h2>
        <p class="text-muted mt-1">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="mb-3 position-relative">
            <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" 
                   class="form-control bg-secondary text-white border-0" autocomplete="current-password">
            <button type="button" class="btn btn-sm btn-outline-light position-absolute top-50 end-0 translate-middle-y me-2" 
                    onclick="togglePasswordVisibility('update_password_current_password', this)">
                <i class="bi bi-eye"></i>
            </button>
            @if ($errors->updatePassword->has('current_password'))
                <div class="text-danger mt-1">{{ $errors->updatePassword->first('current_password') }}</div>
            @endif
        </div>

        <!-- New Password -->
        <div class="mb-3 position-relative">
            <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" 
                   class="form-control bg-secondary text-white border-0" autocomplete="new-password">
            <button type="button" class="btn btn-sm btn-outline-light position-absolute top-50 end-0 translate-middle-y me-2" 
                    onclick="togglePasswordVisibility('update_password_password', this)">
                <i class="bi bi-eye"></i>
            </button>
            @if ($errors->updatePassword->has('password'))
                <div class="text-danger mt-1">{{ $errors->updatePassword->first('password') }}</div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="mb-3 position-relative">
            <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                   class="form-control bg-secondary text-white border-0" autocomplete="new-password">
            <button type="button" class="btn btn-sm btn-outline-light position-absolute top-50 end-0 translate-middle-y me-2" 
                    onclick="togglePasswordVisibility('update_password_password_confirmation', this)">
                <i class="bi bi-eye"></i>
            </button>
            @if ($errors->updatePassword->has('password_confirmation'))
                <div class="text-danger mt-1">{{ $errors->updatePassword->first('password_confirmation') }}</div>
            @endif
        </div>

        <!-- Save Button and Status -->
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'password-updated')
                <p class="text-success mb-0" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

<script>
    function togglePasswordVisibility(inputId, button) {
        const input = document.getElementById(inputId);
        const icon = button.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>
