<script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type = "text/javascript" language = "javascript">	 
$(document).ready(function () {
$('#submit').click(function(){
if($('#English').is(":checked")){
 $('#eng').val('English');
 }
 if($('#Malayalm').is(":checked")){
 $('#mal').val('Malayalam');
 }
 if($('#Hindi').is(":checked")){
 $('#hin').val('Hindi');
 }
 if($('#Thamil').is(":checked")){
 $('#tha').val('Thamil');
 }
});

});
   </script>

<h1>Edit page</h1>
<form action="/editdata" method="POST">
    @csrf
    <input type="hidden" name="id" id="" value="{{$reg -> id }}">
    <input type="text" name="name" placeholder="NAME" value="{{$reg -> name }}"><br><br>
    <input type="text" name="age" placeholder="AGE" value="{{$reg -> age}}"><br><br>
        
    
    <label for="">Gender:</label><select name="gender" id="" >
        @if ($reg -> gender == 'Others')
        <option value="Other" selected>Others</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option> 
        @elseif($reg -> gender == 'Male')
        <option value="Other">Others</option>
        <option value="Male" selected>Male</option>
        <option value="Female">Female</option> 
        @else{
            <option value="Other">Others</option>
        <option value="Male">Male</option>
        <option value="Female" selected>Female</option> 
        }
        @endif
    </select><br><br>
    Language selected : 
    @if($reg -> language1 == 'null')
                                
            @else
            {{$reg-> language1}}
                
            @endif  
            @if($reg -> language2 == 'null')
                                
            @else
            {{$reg -> language2}}
                
            @endif 
            @if($reg -> language3 == 'null')
                                
            @else
            {{$reg -> language3}}
                
            @endif 
            @if($reg -> language4 == 'null')
                                
            @else
            {{$reg -> language4}}
                
            @endif 
            <label for="">Language</label><br><br>
            English <input type="checkbox" name="language" value='english' id="English">
            Malayalm <input type="checkbox" name="language" value="malayalm" id="Malayalm">
            Hindi <input type="checkbox" name="language" value="hindi" id="Hindi">
            Thamil <input type="checkbox" name="language" value="thamil" id="Thamil">

            <input type = "hidden" id="eng"  name="english" value="null">
            <input type = "hidden" id="mal" name="malayalm" value="null">
            <input type = "hidden" id="hin"  name="hindi" value="null">
            <input type = "hidden" id="tha" name="thamil" value="null">

            <br><br>
            <button id="submit">SUBMIT</button>
</form>
