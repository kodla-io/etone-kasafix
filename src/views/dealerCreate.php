<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yeni Bayi Kaydı</h4>
                            </div>
                            <div class="card-body">
                                <?= form_open('/eTone/delaerCreateOn', ['class' => 'form form-horizontal']); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <?= form_label('Bayi Adı', 'bayi_adi'); ?>
                                            </div>
                                            <div class="col-sm-9">
                                                <?= form_input('name', '', ['id' => 'bayi_adi', 'class' => 'form-control', 'placeholder' => 'Bayi Adı']); ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <?= form_label('Bayi Soyadı', 'bayi_adi'); ?>
                                            </div>
                                            <div class="col-sm-9">
                                                <?= form_input('surname', '', ['id' => 'bayi_adi', 'class' => 'form-control', 'placeholder' => 'Bayi Soyadı']); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-9 offset-sm-3">
                                        <?= form_submit('', 'Oluştur', ['class' => 'btn btn-primary waves-effect waves-float waves-light']); ?>
                                    </div>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>