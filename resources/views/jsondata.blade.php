<div>
    <table>
        <thead>
            <tr>
                <th>userId</th>
                <th>id</th>
                <th>title</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>


            @if(isset($datas) && count($datas) > 0)
                
        
            @foreach ($datas as $item)
            <tr>
                <td>{{ $item->userId}} </td>
                <td>{{ $item->id}} </td>
                <td>{{ $item->title}} </td>
                <td>{{ $item->body}} </td>
            </tr> 
            @endforeach
            @else 
            
            <td >Data Not Found </td>
            @endif
           

         

        </tbody>
    </table>
</div>
