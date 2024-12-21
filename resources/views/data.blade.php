
@include('components.header')
@include('components.nav')
<section class="container">
    <h1>Data Table</h1>
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
                <td>{{ $item->email}} </td>
                <td>{{ $item->password}} </td>
            </tr> 
            @endforeach
            @else 
            
            <td >Data Not Found </td>
            @endif
           
        </tbody>
    </table>
</section>
@include('components.footer')
