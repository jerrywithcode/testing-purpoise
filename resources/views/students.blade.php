<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($data) && count($data) > 0)
                

            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id}} </td>
                <td>{{ $item->name}} </td>
                <td>{{ $item->roll}} </td>
                <td>{{ $item->class}} </td>
            </tr> 
            @endforeach
            @else 
            
            <td >Data Not Found </td>
            @endif
           

         

        </tbody>
    </table>
</div>
