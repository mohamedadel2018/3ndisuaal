<div class="card-body p-4">
    <div class="text-center w-75 m-auto pb-3">
        <a href="javascript:void(0);">
            <span><img src="{{ asset('images/logo.png') }}" alt="" height="120"></span>
        </a>
        @include('alerts')
        <br />
    </div>

    <h5 class="auth-title">Sign In</h5>

    <form action="#">

        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input class="form-control py-3" type="text" value="admin" id="username"
                placeholder="Enter your Username" autocomplete="off" wire:model="username" />
                @error('username')
                <p class="text-danger font-18">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input class="form-control py-3" value="123456" type="password" id="password"
                placeholder="Enter your password" autocomplete="off" wire:model="password" />
                @error('password')
                <p class="text-danger font-18">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block font-weight-bold py-2" type="submit" wire:click.prevent="login"> Log In
            </button>
        </div>

    </form>


</div> <!-- end card-body -->
