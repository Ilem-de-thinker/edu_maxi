<div>
    <div class="card rounded-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="card-body relative p-12.5">
                <!-- Auth Brand Logo -->
                <div class="mb-7.5 flex flex-col items-center justify-center text-center">
                    <h4 class="text-default-900 mt-7.5 mb-2 text-base font-bold">Create New Account</h4>
                    <p class="text-default-400 mx-auto w-full lg:w-3/4">Let’s get you started. Create
                        your account by entering your details below.</p>
                </div>

                <form wire:submit='save'>
                    <div class="mb-5">
                        <label for="userName" class="form-label">
                            Name
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-icon-group">
                            <i class="iconify tabler--user input-icon"></i>
                            <input type="text" class="form-input" id="userName" placeholder="Damian D."
                                wire:model.live='name' />

                        </div>
                        <div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="userEmail" class="form-label">
                            Email address
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-icon-group">
                            <i class="iconify tabler--mail input-icon"></i>
                            <input type="email" class="form-input" id="userEmail" placeholder="you&#64;example.com"
                                wire:model.live='email' required />
                        </div>
                          <div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-5" data-password="bar">
                        <label for="userPassword" class="form-label">
                            Password
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-icon-group">
                            <i class="iconify tabler--lock-password input-icon"></i>
                            <input type="password" id="userPassword" class="form-input" placeholder="••••••••"
                                wire:model.live='password' />
                        </div>
                        <div class="password-bar my-3"></div>
                        <p class="text-default-400 text-xs">Use 8+ characters with letters, numbers &
                            symbols.</p>
                          <div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                       <div class="mb-5" data-password="bar">
                        <label for="userPassword" class="form-label">
                           Confirm Password
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-icon-group">
                            <i class="iconify tabler--lock-password input-icon"></i>
                            <input type="password" id="userPassword" class="form-input" placeholder="••••••••"
                                wire:model.live='confirm_password' />
                        </div>
                          <div>
                            @error('confirm_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="flex items-center gap-2">
                            <input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" id="termAndPolicy"
                                checked />
                            <label class="form-check-label" for="termAndPolicy">Agree the Terms &
                                Policy</label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="btn bg-primary w-full py-3 font-semibold text-white hover:bg-primary-hover">
                            <span wire:loading wire:loading.target='save'>saving</span>
                            <span wire:loading.remove> Create</span> Account</button>
                    </div>
                </form>

                <p class="text-default-400 mt-7.5 text-center">
                    Already have an account?
                    <a href="auth-card-sign-in.html"
                        class="text-primary font-semibold underline underline-offset-4">Login</a>
                </p>

                <!-- Auth Footer -->
                <p class="text-default-400 mt-7.5 text-center">
                    &copy;
                    <span data-current-year></span>
                    Edu_maxi - by
                    <span>Ilthres Acada</span>
                </p>
            </div>
            <div class="relative hidden h-full overflow-hidden rounded-e-2xl bg-cover bg-center object-cover lg:block">
                <div
                    class="absolute inset-0 flex items-end justify-center rounded-e-sm p-9 [background:linear-gradient(to_top,#313a46,rgba(49,58,70,.8),rgba(49,58,70,.5))]">
                </div>
            </div>
        </div>
    </div>
</div>
