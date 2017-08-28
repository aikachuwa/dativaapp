<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style >
        .container{
            background-color: blue;
            margin-top: 15px;
        }
        h2{
            text-transform: uppercase;
            text-align: center;
            color: white;
            font-size: 47px;
        }
        fieldset input[type=text] {
            width: 40%;
            padding: 8px 10px;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #F5F5DC;

        }
        .btn.btn-danger{
            margin-left: 10px;
        }
        label{
            font-size: 23px;
            margin-left: 10px;

        }
        .form-group{
            margin-left: 10px;
            margin: 8px 0px 5px 120px;


        }
        #tasktodo{
            cursor: pointer;
            margin-left: 35px;
        }
        #tasktodo:nth-child(1){
            font-size: 23px;
        }
        li:nth-child(1){
            font-size: 38px;

        }
        li{
            color: white;
            margin-left: 35px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hisptz todos</h2>
    <!-- input divisition -->
    <div class="form-group">
        <fieldset>
            <label>Enter the tasks:</label>
            <input type="text" name="" id="dativatask" size="30"><button class="btn btn-danger" type="submit" id="add" size="30">Add</button>
        </fieldset>
    </div>
    <!-- for displaying list of task -->
    <div id="tasktodo">
    </div>

    <script >
        /*object to store todo task*/
        function get_tasks() {
            var  tasktodo = new Array;
            var hisptodo = localStorage.getItem('todolist');
            if (hisptodo !== null) {
                tasktodo = JSON.parse(hisptodo);
            }
            return tasktodo;
        }

        // function used to add task
        function add() {
            var dativatask = document.getElementById('dativatask').value;
            var tasktodo = get_tasks();
            tasktodo.unshift(dativatask);
            localStorage.setItem('todolist', JSON.stringify(tasktodo));

            showList();

            return false;
        }
        /*function use to remove task*/
        function remove() {
            var id = this.getAttribute('id');
            var tasktodo = get_tasks();
            tasktodo.splice(id, 1);
            localStorage.setItem('todolist', JSON.stringify(tasktodo));

            showList();

            return false;
        }

        /*function to display task*/
        function showList() {
            var tasktodo = get_tasks();

            var html = '<ul>';
            for(var i=0; i<tasktodo.length; i++) {
                html += '<li class="remove" id="" >' + tasktodo[i] + '</li>';
            };
            html += '</ul>';

            document.getElementById('tasktodo').innerHTML = html;

            var buttons = document.getElementsByClassName('remove');
            for (var i=0; i < buttons.length; i++) {
                buttons[i].addEventListener('click', remove);
            };
        }

        document.getElementById('add').addEventListener('click', add);

        localStorage.removeItem('todolist');

    </script>
</body>
</html>