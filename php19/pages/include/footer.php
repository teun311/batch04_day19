<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body py-2>">
                    <form action="action.php" method="POST">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="input_value">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Select Type</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="type" value="word">Word count</label>
                                <label for=""><input type="radio" name="type" value="character">Character Count</label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>

                            <div class="col-md-8">
                                <!--                                     <input type="text" readonly value="--><?php //echo isset($result) ? $result : '' ;?><!--" class="form-control">-->
                                <textarea class="form-control"readonly cols="30" rows="10">
<!--                                         --><?php //echo isset($result) ? $result ['givenWord'] : '' ?><!-- -->
                                    <!--                                         --><?php //echo isset($result) ? $result ['wordCount'] : '' ?><!-- -->
                                    <!--                                         --><?php //echo isset($result) ? $result ['characterCount'] : '' ?><!-- -->
                                         <?php echo "$givenWord\n$wordCount\n$characterCount";?>
                                     </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4  col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="xyz" class="btn btn-outline-success btn-block" value="Get_result">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>



<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
