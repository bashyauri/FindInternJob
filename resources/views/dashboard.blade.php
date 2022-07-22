<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="rounded-lg  py-6">
                            <div class="block overflow-x-auto mx-6">
                                <table class="w-full text-left rounded-lg">
                                    <thead>
                                        <tr class="text-gray-300  bg-gray-800 border border-b-0">
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">Title</th>
                                            <th class="px-4 py-3">Address</th>
                                            <th class="px-4 py-3">Requirement</th>

                                            <th class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                            <td class="px-4 py-4">1</td>
                                            <td class="px-4 py-4">Bedram Tamang</td>
                                            <td class="px-4 py-4">
                                                <img class="h-6 w-6 rounded-full"
                                                    src="/assets/docs/master/image-01.jpg">
                                            </td>
                                            <td class="px-4 py-4">tmgbedu@gmail.com</td>

                                            <td class="text-center py-4">
                                                <a href="#"><span
                                                        class="fill-current text-green-500 material-icons">edit</span></a>
                                                <a href="#"><span
                                                        class="fill-current text-red-500 material-icons">highlight_off</span></a>
                                            </td>
                                        </tr>
                                        <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                                            <td class="px-4 py-4">2</td>
                                            <td class="px-4 py-4">Taylor Otwel</td>
                                            <td class="px-4 py-4">
                                                <img class="h-6 w-6 rounded-full"
                                                    src="/assets/docs/master/image-01.jpg">
                                            </td>
                                            <td class="px-4 py-4">taylow@laravel.com</td>

                                            <td class="text-center py-4">
                                                <a href="#"><span
                                                        class="fill-current text-green-500 material-icons">edit</span></a>
                                                <a href="#"><span
                                                        class="fill-current text-red-500 material-icons">highlight_off</span></a>
                                            </td>
                                        </tr>
                                        <tr
                                            class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                                            <td class="px-4 py-4">3</td>
                                            <td class="px-4 py-4">Adam wathan</td>
                                            <td class="px-4 py-4">
                                                <img class="h-6 w-6 rounded-full"
                                                    src="/assets/docs/master/image-01.jpg">
                                            </td>
                                            <td class="px-4 py-4">tmgbedu@gmail.com</td>

                                            <td class="text-center py-4">
                                                <a href="#"><span
                                                        class="fill-current text-green-500 material-icons">edit</span></a>
                                                <a href="#"><span
                                                        class="fill-current text-red-500 material-icons">highlight_off</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
