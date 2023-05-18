<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 90%">
        <div class="modal-content">
        <div class="container pt-150">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="appointment" role="tabpanel"
                             aria-labelledby="appointment-tab">
                            <div class="contact-form">
                                <form action="<?=BASE_URL?>?c=sandmail" method="POST">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input name="name" type="text" placeholder="Ім'я">
                                                <span class="icon"><i class="fal fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input name="surname" type="text" placeholder="Фамілія">
                                                <span class="icon"><i class="fal fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input name="second_surname" type="text" placeholder="По-батькові">
                                                <span class="icon"><i class="fal fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input name="email" type="email" placeholder="Пошта">
                                                <span class="icon"><i class="fal fa-envelope"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input name="phone" type="tel" placeholder="Телефон">
                                                <span class="icon"><i class="fal fa-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <input name="age" type="text" placeholder="Вік">
                                                <span class="icon"><i class="fal fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="text" placeholder="Що Вас турбує?"></textarea>
                                                <span class="icon"><i class="fal fa-edit"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 text-center">
                                            <button type="submit" class="site-btn">Відправити</button>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <button class="site-btn red" data-dismiss="modal">Скасувати</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- contact area end -->