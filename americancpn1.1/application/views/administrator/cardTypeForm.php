<div class="content-wrapper">
    <section class="content-header">
        <h1>
            card type
            <small>add</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="<?php echo base_url() . 'administrator/cardType/cardTypes'; ?>">card types</a></li>
            <li class="active">add</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="<?php echo base_url() . 'administrator/cardType/addCardType'; ?>" method="post"
                  id="line">
                <div class="col-md-3">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">line information:</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="type" class="control-label">card type:</label>

                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control"
                                           id="type" name="type" autofocus/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="control-label">card name:</label>

                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control"
                                           id="phone" name="name"/>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="input-group">
                                              <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary btn-flat">add</button>
                                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
</script>



