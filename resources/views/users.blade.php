<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Users
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  

                <table id="userTable" class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col" >#</th>
                            <th  scope="col" >ID</th>
                            <th  scope="col" >Name</th>
                            <th  scope="col" >Username</th>
                            <th  scope="col" >Email</th>
                            <th  scope="col" >Phone</th>
                            <th  scope="col" >Website</th>
                            <th  scope="col" >Action</th>
                            

                   
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 0; @endphp
                        
                            @foreach($data as $res)
                            <tr>
                                <td>
                                    @php  echo ($count += 1); @endphp
                                </td>
                                <td>{{$res['id']}}</td>
                                <td>{{$res['name']}}</td>
                                <td>{{$res['username']}}</td>
                                <td>{{$res['email']}}</td>
                                <td>{{$res['phone']}}</td>
                                <td>{{$res['website']}}</td>
                                <td>
                                    <x-nav-link :href="route('user',$res['id'])" >
                                        View album
                                    </x-nav-link>
                                </td>
                             
                            </tr>
                            @endforeach
                       
                       
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
   
 </script>
 <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

 <script>
    // let table = new DataTable('#userTable', {
    //     responsive:true,
    // });

     $(document).ready( function () {
        $('#userTable').DataTable();
    } );
</script>