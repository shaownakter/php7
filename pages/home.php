<?php include "pages/include/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Series</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php"method="post" >
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Starting Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="starting_number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Ending Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="ending_number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Select type</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="type"  value="asc">Low to high</label>
                                        <label for=""><input type="radio" name="type"  value="desc">high Low to</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                <textarea class="form-control" readonly name="" id="" cols="30" rows="5"><?php echo isset($result) ? $result:'';?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-12"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="submit" class="btn btn-outline-success btn-block" value="Check Result">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include "pages/includes/footer.php"; ?>

