<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>gender</th>
        <th>Language</th>
    </tr>
    @foreach ($reg as $item)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{$item -> name}}</td>
        <td>{{$item -> age}}</td>
        <td>{{$item -> gender}}</td>
        <td>
            @if($item -> language1 == 'null')
                                
            @else
            {{$item -> language1}}
                
            @endif  
            @if($item -> language2 == 'null')
                                
            @else
            {{$item -> language2}}
                
            @endif 
            @if($item -> language3 == 'null')
                                
            @else
            {{$item -> language3}}
                
            @endif 
            @if($item -> language4 == 'null')
                                
            @else
            {{$item -> language4}}
                
            @endif 
        
        </td>
        <td>
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" value="{{$item -> id}}" name='id'>
                <input type="submit" value ="Edit"></form>
                <form action="/delete" method="POST">
                    @csrf
                    <input type="hidden" value="{{$item -> id}}" name='id'>
                    <input type="submit" value ="Delete"></form>
    
    </tr>
    @endforeach
</table>