<div>
   
    @if(Session::has('key'))             
    {{ Session::get('key')}}
    <a href="logout">Sign Out</a>

    @else
        please signin

    @endif
   <span>
    @if(Session::has('status'))             
    {{ Session::get('status')}}
    @elseif(Session::has('remove'))
    {{ Session::get('remove')}}
    @else
    @endif
    
   </span>
</div>
