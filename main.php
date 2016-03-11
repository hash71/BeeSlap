<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Bee</th>
                <th>Initial</th>
                <th>Hit Point</th>
                <th>Current</th>
                <th>Condition</th>
            </tr>
            </thead>
            <tbody id="place">
            <?php require_once "reset.php"; ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <button type="button btn-sm" class="btn btn-primary" id="hit">Hit</button>
        <button type="button btn-sm" class="btn btn-success" id="reset">Reset</button>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $("#hit").click(function () {
            $.get("app/Handlers/HitHandler.php", function (data) {
                if (data === "end") {//if the game ends just by finishing all three queens then all bees will be dead
                    $.get("end.php", function (data) {
                        $("#place").html(data);
                    });
                    $("#hit").attr("disabled", "disabled");
                } else {
                    $("#place").html(data);
                }
            });
        });
        $("#reset").click(function () {
            $.get("app/Handlers/ResetHandler.php", function (data) {
                $("#place").html(data);
            });
            $("#hit").removeAttr("disabled");
        });

    });

</script>
</body>
</html>