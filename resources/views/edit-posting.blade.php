<x-app-layout>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-[#EEEEEE] overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="row">

                    <div class="col-sm-6">
                        @if (session('status'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('status') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header   bg-[#393E46] text-[#EEE] ">
                                Form
                            </div>

                            <div class="card-body bg-[#7D9D9C]">
                                <form action="{{ route('posting.update', ['id' => $post->id]) }}" method="post">
                                    @csrf
                                    <label class="text-[#EEEEEE] font-light">Company name</label>
                                    <input type='text' placeholder="Enter your input here" name='title'
                                        class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"
                                        value="{{ $post->title }}" />
                                    <label class="text-[#EEEEEE] font-light">Company address</label>
                                    <input type='text' placeholder="Enter your input here" name='address'
                                        class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"
                                        value="{{ $post->address }}" />
                                    <label class="text-[#EEEEEE] font-light">Category</label>
                                    <select class="w-full border bg-white rounded px-3 py-2   mt-2 mb-6 outline-none"
                                        name="category_id">
                                        @foreach ($categories as $category)
                                            <option class="py-1" value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <label class="text-[#EEEEEE] font-light">Requirements</label>
                                    <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                                        name="requirements"> {{ $post->requirements }}</textarea>
                                    <button type="submit"
                                        class="bg-[#576F72]  text-gray-200 rounded hover:bg-blue-500 px-4 py-2 focus:outline-none">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    a:hover {
        color: #E4DCCF;
    }
</style>
