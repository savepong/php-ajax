<?php
$data = [
    'a',
    'b' => [
        'b1' => 'value'
    ],
    'c'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX POST Form</title>
    <meta charset="utf-8">
</head>
<body>

<div id="response">
    <pre></pre>
</div>

<form id="my-form">
    <button type="submit">Submit</button>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    (function($){
        function processForm( e ){
            var data = <?php echo json_encode($data); ?>

            $.ajax({
                url: 'controller.php',
                dataType: 'json',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify(data),
                processData: true,
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( JSON.stringify( data ) );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#my-form').submit( processForm );
    })(jQuery);
</script>
</body>
</html>
