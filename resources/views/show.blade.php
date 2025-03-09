<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            User Data
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            
                <li>ID : {{$data['id']}}</li>
                <li> Name : {{$data['name']}}</li>
                <li>Username : {{$data['username']}}</li>
                <li>Email : {{$data['email']}}</li>
                <li>Phone : {{$data['phone']}}</li>
                <li>Website : {{$data['website']}}</li>
                <li>Address: {{$data['address']['street']}},
                {{$data['address']['suite']}},
                {{$data['address']['city']}},
                {{$data['address']['zipcode']}}
                </li>

                <li>Company: {{$data['company']['name']}},
                {{$data['company']['catchPhrase']}},
                {{$data['company']['bs']}},
                </li>
                <br>
                <hr>
                <p>User Album</p>

                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col" >#</th>
                            <th  scope="col" >User ID</th>
                            <th  scope="col" >ID</th>
                            <th  scope="col" >Title</th>
                            <th  scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 0; @endphp
                        
                            @foreach($dataAlbum  as $res)
                            <tr>
                                <td>
                                    @php  echo ($count += 1); @endphp
                                </td>
                                <td>{{$res['userId']}}</td>
                                <td>{{$res['id']}}</td>
                                <td>{{$res['title']}}</td>
                                <td>
                                <x-nav-link :href="route('album-photo',$res['id'])" >
                                    View Album Photo
                                </x-nav-link>
                                </td>
                            </tr>
                            @endforeach
                       
                       
                    </tbody>
                </table>
                
            


            </div>
        </div>
    </div>
</x-app-layout>