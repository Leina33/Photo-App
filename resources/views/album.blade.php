<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Album
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Album
                </div>
                <hr>

                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col" >#</th>
                            <th  scope="col" >User ID</th>
                            <th  scope="col" >ID</th>
                            <th  scope="col" >Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 0; @endphp
                        
                            @foreach($data as $res)
                            <tr>
                                <td>
                                    @php  echo ($count += 1); @endphp
                                </td>
                                <td>{{$res['userId']}}</td>
                                <td>{{$res['id']}}</td>
                                <td>{{$res['title']}}</td>
                            </tr>
                            @endforeach
                       
                       
                    </tbody>
                </table>

               
 
            </div>
        </div>
    </div>
</x-app-layout>