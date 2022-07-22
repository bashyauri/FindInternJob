<x-app-layout>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-[#EEEEEE] overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="rounded-lg  py-6">
                            <div class="block overflow-x-auto mx-6">
                                <table class="w-full text-left rounded-lg">
                                    <thead>
                                        <tr class="text-[#EEEEEE]  bg-[#393E46] border border-b-0">
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">Title</th>
                                            <th class="px-4 py-3">Address</th>
                                            <th class="px-4 py-3">Requirement</th>

                                            <th class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp

                                        @foreach ($posts as $post)
                                            <tr
                                                class="w-full font-light text-[]-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">{{ $i++ }}</td>
                                                <td class="px-4 py-4">{{ $post->title }}</td>
                                                <td class="px-4 py-4">
                                                    {{ $post->address }}
                                                </td>
                                                <td class="px-4 py-4">{{ $post->requirements }}</td>

                                                <td class="text-center py-4">
                                                    <a href="#"><span
                                                            class="fill-current text-green-500 material-icons">edit</span></a>
                                                    <a href="#"><span
                                                            class="fill-current text-red-500 material-icons">highlight_off</span></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header   bg-[#393E46] text-[#EEE] ">
                                Form
                            </div>
                            <div class="card-body bg-[#576F72]">
                                <label class="text-[#EEEEEE] font-light">Company name</label>
                                <input type='text' placeholder="Enter your input here" name='title'
                                    class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
                                <label class="text-[#EEEEEE] font-light">Company address</label>
                                <input type='text' placeholder="Enter your input here" name='title'
                                    class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
                                <label class="text-[#EEEEEE] font-light">Category</label>
                                <select class="w-full border bg-white rounded px-3 py-2   mt-2 mb-6 outline-none">
                                    <option class="py-1">Option 1</option>
                                    <option class="py-1">Option 2</option>
                                    <option class="py-1">Option 3</option>
                                </select>
                                <label class="text-[#EEEEEE] font-light">Requirements</label>
                                <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>

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
