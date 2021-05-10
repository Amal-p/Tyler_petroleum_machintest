<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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


        <style>
            .form{
                text-align: center;
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    
    <div class="form">
        <h1>ADD DATA</h1>
        @if (session('message'))
        <div>
            <h3 style="color: green">{{session('message')}}</h3>
        </div>  
        @endif
        <form action="/submit" method="POST">
            @csrf
            <input type="text" name="name" placeholder="NAME"><br><br>
            <input type="number" name="age" placeholder="AGE"><br><br>
            <label for="">Gender:</label><select name="gender" id="">
                <option value="Other">Others</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
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


    </div>
    <br><br>
    <a href="/showdata">Show datas inside Database</a>


   
    </body>
</html>
