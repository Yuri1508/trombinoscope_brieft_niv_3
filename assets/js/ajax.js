<script type="text/javascript">
    $(document).ready(function () {
        $('#insertData').click(function (e) {
            e.preventDefault();
            $.ajax({
                method: "post",
                url: "insertData.php",
                data: $("#data").serialize(),
                dataType: "text",
                success: function (response) {
                    $('#displayResult').text(response);
                }
            })
        })
    });
</script>