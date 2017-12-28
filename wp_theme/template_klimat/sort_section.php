<div class="row">
    <div class="col-xl-12 mt-5">
        <h3>Сортировка товара</h3>
        <div class="card border-0 mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-9">
                        <form class="form-sort mt-3" action="sortproduct" method="get">
                            <div class="form-row">
                                <div class="col-xl-12">
                                    <label class="mr-sm-2 form-sort__par" for="inlineFormCustomSelect">Мощность</label>
                                    <span class="form-sort__start">от</span>
                                    <select class="custom-select mb-2 mr-xl-2 mb-xl-0 form-sort__select" id="inlineFormCustomSelect" name="power_ot">
                                        <option value="0" selected>0 кВт</option>
                                        <option value="3,3">3.3 кВт</option>
                                        <option value="4,2">4.2 кВт</option>
                                        <option value="5,2">5.2 кВт</option>
                                    </select>
                                    <span class="form-sort__end">до</span>
                                    <select class="custom-select mb-2 mr-xl-2 mb-xl-0 form-sort__select" id="inlineFormCustomSelect" name="power_do">
                                        <option value="999999" selected>0 кВт</option>
                                        <option value="5.8">5.8 кВт</option>
                                        <option value="6.3">6.3 кВт</option>
                                        <option value="6.7">6.7 кВт</option>
                                    </select>
                                </div>
                                <div class="col-xl-12 mt-5">
                                    <label class="mr-sm-2 form-sort__par" for="inlineFormCustomSelect">Стоимость</label>
                                    <span class="form-sort__start">от</span>
                                    <select class="custom-select mb-2 mr-xl-2 mb-xl-0 form-sort__select" id="inlineFormCustomSelect" name="price_ot">
                                        <option value="0" selected>0 руб.</option>
                                        <option value="9500">9 500 руб.</option>
                                        <option value="11200">11 200 руб.</option>
                                        <option value="15100">15 100 руб.</option>
                                    </select>
                                    <span class="form-sort__end">до</span>
                                    <select class="custom-select mb-2 mr-xl-2 mb-xl-0 form-sort__select" id="inlineFormCustomSelect" name="price_do">
                                        <option value="999999" selected>0 руб.</option>
                                        <option value="12200">12 200 руб.</option>
                                        <option value="15600">15 600 руб.</option>
                                        <option value="17000">17 000 руб.</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="col-xl-3 form-sort__hr-left">
                        <button type="submit" class="btn btn-primary btn-lg form-sort__button-sort">Поиск</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>