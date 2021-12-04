<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment</title>
    <meta http-equiv="content-type">
    <meta content="text/html">
    <meta charset="utf-8">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-md-center align-items-center vh-100">
        <div class="col-md-6 col-md-offset-3 ">
            <div class="well well-sm">
                <form action="post.php" class="form-horizontal" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="taisnimi">Täisnimi</label>
                            <div class="col-md-9">
                                <input pattern="[a-zA-Z\s]*" id="taisnimi" name="taisnimi" type="text"
                                       placeholder="Täisnimi"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="eesnimi">Eesnimi</label>
                            <div class="col-md-9">
                                <input pattern="[a-zA-Z\s]*" required id="eesnimi" name="eesnimi" type="text"
                                       placeholder="Eesnimi"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="perenimi">Perenimi</label>
                            <div class="col-md-9">
                                <input pattern="[a-zA-Z\s]*" id="perenimi" name="perenimi" type="text"
                                       placeholder="Perenimi"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sunniaasta">Sünniaasta</label>
                            <div class="col-md-9">
                                <input id="sunniaasta" name="sunniaasta" type="number" placeholder="Sünniaasta"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Email</label>
                            <div class="col-md-9">
                                <input required id="email" name="email" type="email" placeholder="Email"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="sugu" value="mees">
                            <label class="form-check-label" for="suguMees">
                                Mees
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="sugu" value="naine">
                            <label class="form-check-label" for="suguNaine">
                                Naine
                            </label>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sonum">Sõnum</label>
                            <div class="col-md-9">
                                <textarea required class="form-control" id="sonum" name="sonum"
                                          placeholder="Jätke sõnum siia..."
                                          rows="5"></textarea>
                            </div>
                        </div>

                        <label for="toovaldkond">Töövaldkond:</label>
                        <select required name="toovaldkond" id="toovaldkond">
                            <option disabled selected value> -- Valige valdkond --</option>
                            <option value="infotehnoloogia">Infotehnoloogia</option>
                            <option value="pollumajandus">Põllumajandus</option>
                            <option value="toitlustus">Toitlustus</option>
                            <option value="transport">Transport</option>
                        </select>

                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Saada">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


