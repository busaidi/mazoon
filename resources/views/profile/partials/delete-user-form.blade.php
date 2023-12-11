<section>
    <header class="mb-4">
        <h2 class="h4 fw-medium text-gray-900">
            {{ __('profile.delete_account') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('profile.delete_account_info') }}
        </p>
    </header>

    <!-- Replace x-danger-button with Bootstrap button -->
    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('profile.delete_account') }}
    </button>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('profile.destroy', ['locale' => app()->getLocale()]) }}" class="modal-content">

                @csrf
                @method('delete')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">{{ __('profile.confirm_account_deletion') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-sm text-gray-600">
                        {{ __('profile.confirm_account_deletion_info') }}
                    </p>
                    <div class="mt-3">
                        <label for="password" class="form-label d-none">{{ __('Passsssssssword') }}</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('login.password') }}">
                        <!-- Replace x-input-error with appropriate Bootstrap or custom error display -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('profile.cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('profile.delete_account') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>

{{--
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
--}}
