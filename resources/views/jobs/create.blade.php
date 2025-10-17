<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf


        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Create a new job</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input id="title" type="text" name="title" placeholder="Shift Leader"
                                    class="block min-w-0 grow bg-transparent py-1.5 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required/>
                            </div>

                                @error('title')
                                    <p class="text-red-900 mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block ptext-sm/6 font-medium text-white">salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input id="salary" type="text" name="salary" placeholder="$50,000 Per Year"
                                    class="block min-w-0 grow bg-transparent py-1.5 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required/>
                            </div>
                             @error('salary')
                                    <p class="text-red-900 mt-2">{{ $message }}</p>
                            @enderror
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
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>