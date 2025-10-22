<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf


        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="name">
                            Name
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input id="name" name="name" placeholder="Albert" required />


                            <x-form-error name="name" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label type="email" for="email">
                            Email
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" required />
                            <x-form-error name="email" />

                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="password">
                            Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" required />
                            <x-form-error name="password" />

                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label type="password" for="confirm_password">
                            Confirm Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />
                            <x-form-error name="password_confirmation" />

                        </div>
                    </div>


                </div>
                {{-- <div class="mt-10">

                    @if ($errors->any())
                    <ul class="text-white">
                        @foreach ($errors->all() as $er)
                        <li class="text-red-900 italic ">{{ $er }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div> --}}

            </div>




        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
            <x-form-button type="submit">
                Register
            </x-form-button>
        </div>
    </form>

</x-layout>
