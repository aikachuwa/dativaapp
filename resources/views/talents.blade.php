@extends('layouts.app')

@section('content')
    <div class="container">
        <style>
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=talents],{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            body{

                align-content: center;
            }
            /*center {*/
                /*text-align: center;*/
                /*border: 3px solid green;*/
            /*}*/
            /*input[type=submit] {*/
                /*width: 100%;*/
                /*background-color: #4CAF50;*/
                /*color: white;*/
                /*padding: 14px 20px;*/
                /*margin: 8px 0;*/
                /*border: none;*/
                /*border-radius: 4px;*/
                /*cursor: pointer;*/
            /*}*/

            /*input[type=submit]:hover {*/
                /*background-color: #45a049;*/
            /*}*/
     div{
         align-content: center;
         alignment: center;
     }
        </style>
        <body>


        <div class="container" class="center">
            <div class="row">
                <div class="col-xs-6">
                    <p>Porvide your Talents</p>
            <h1>HOW MANY TALENTS DO YOU HAVE</h1>
            <form>
                <label for="talents">talent 1</label>
                <input type="text" id="talents" name="talents" placeholder="talents">

                <label for="lname">talent 2</label>
                <input type="text" id="talents" name="talents" placeholder="talents">



                <label for="talents">talent 3</label>
                <input type="text" id="talents" name="talents" placeholder="talents">

                <label for="lname">talent 4</label>
                <input type="text" id="talents" name="talents" placeholder="talents">



                <input type="submit" value="Submit" class="btn-primary">
            </form>
        </div>
        </div>
        </div>

        </body>
        </html>
    </div>
@endsection