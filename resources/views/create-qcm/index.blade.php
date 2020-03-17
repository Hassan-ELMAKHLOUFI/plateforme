<html>
<head>
    <title>Webslesson Demo - Dynamically Add or Remove input fields in PHP with JQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <br />
    <h2 align="center"><a href="http://www.webslesson.info/2016/02/dynamically-add-remove-input-fields-in-php-with-jquery-ajax.html" title="Dynamically Add or Remove input fields in PHP with JQuery">Dynamically Add or Remove input fields in PHP with JQuery</a></h2><br />
    <div class="form-group">
        <form action="{{action('QCMController@store')}}" method="post">

            <input required pattern=".{1,255}" title="le nombre maximum de caractères 1 - 255" type="text" name="question" >
            <label>
                Note:
                <input required type="number" name="note" min="1">
            </label>
            <select name="difficulty">
                <option value="1">trés facile</option>
                <option value="2">facile</option>
                <option value="3">moyenne</option>
                <option value="4">difficile</option>
                <option value="5">très difficile</option>
            </select>
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field">
                    <tr>
                            <?php $i=0;?>
                        <td><input required pattern=".{1,255}" title="le nombre maximum de caractères 1 - 255" type="text" name="option_text[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                            <input required type="hidden" name="hidden[]" value="1">
                       <td><input type="checkbox" name="point[]"  value="1"></td><br>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>
                <input required type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                <input required type="hidden" name="test_id" value="{{$test['test']->test_id}}" >
                <input id="btn" required type="submit" value="submit">
            </div>
</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btn').click(function() {
            checked = $("input[type=checkbox]:checked").length;

            if(!checked) {
                alert("You must check at least one checkbox.");
                return false;
            }

        });
    });

</script>

<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input required pattern=".{1,255}" title="le nombre maximum de caractères 1 - 255" type="text" name="option_text[]" placeholder="Enter your Name" class="form-control name_list" /></td><input type="hidden" name="hidden[]" value="'+i+'" ><td><input type="checkbox" name="point[]"  value="'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

        $('#submit').click(function(){
            $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });

    });
</script>




