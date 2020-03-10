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

            <input type="text" name="question" >
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field">
                    <tr>
<?php $i=0;?>

                        <td><input type="text" name="option_text[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                            <input type="hidden" name="hidden[]" value="1">

                       <td><input type="checkbox" name="point[]"  value="1" ></td><br>

                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                <input type="submit" value="t">
            </div>
</form>
</div>
</div>
</body>
</html>

<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="option_text[]" placeholder="Enter your Name" class="form-control name_list" /></td><input type="hidden" name="hidden[]" value="'+i+'" ><td><input type="checkbox" name="point[]"  value="'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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




