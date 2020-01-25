@extends('layouts.app')

@section('content')
<style>
        .overlaysh {
        background: #e9e9e9;
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0.6;
    }
    #loading-img {
        background: url("https://media.giphy.com/media/y1ZBcOGOOtlpC/giphy.gif") center center no-repeat;
        height: 100%;
        z-index: 10;
    }
</style>
     <div class="overlaysh" >
        <div id="loading-img"></div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                
                <th>
                    Crop Name
                </th>
                <th>
                    Year
                </th>
                <th>
                    Quater
                </th>
            </thead>
            <tbody>
                @foreach ($crops as $crop)
                <tr>
                        
                    </td>
                    <td>
                        {{$crop->crop_name}}
                    </td>
                    <td>
                        {{$crop->year}}
                    </td>
                    <td>
                        @if ($crop->quarter_num==1)
                            {{"Jan-Mar"}}
                        @elseif($crop->quarter_num==2)
                            {{"Apr-Jun"}}
                        @elseif($crop->quarter_num==3)
                            {{"Jul-Sep"}}
                        @else
                            {{"Oct-Dec"}}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/user/create"><button class="btn btn-primary d-inline" >Add CROP</button></a>
        <button id="btn" type="button" class="btn btn-success float-right d-inline">Give Me Suggestion For Crops</button>
        <br><br>
        <div class="row">
            <div id="prediction" class="col-md-6">

            </div>
            <div id="demand" class="col-md-6">

            </div>
        </div>
    </div>
    <script>
        $("#btn").on("click",function(){

        $(document).ajaxStart(function(){
            $(".overlaysh").show();
        });
        $(document).ajaxComplete(function(){
            $(".overlaysh").hide();
        });    
       

            $.ajax({
                url:"http://api.openweathermap.org/data/2.5/weather?lat={{$loc->lat}}&lon={{$loc->long}}&APPID=03bd29cd2497753776e0506b0fce46a2",
                success:function(result){
                    console.log(result);
                    $.ajax({
                        url:"/predict",
                        data:{temp:result['main']['temp'],hum:result['main']['humidity'],quat:"1",lat:0,loamy:1,sandy:0},
                        success:function(result){
                            $("#prediction").html("Our Suggestion is grow "+result+"for better output");
                        },
                    })
                }
            });
        });
    </script>
@endsection