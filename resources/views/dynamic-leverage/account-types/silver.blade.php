<div class="row">
    <div class="col-12 text-center my-4">
        <h1 class="text-secondary fw-700 text-center">{{ __('dynamic-leverage.METALS(SILVER)') }}
        </h1>
    </div>
    @if (session()->get('locale') == 'jp')
        <div class="col-md-8 offset-md-2 col-12 text-center mb-5 mx-auto">
            <table cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('dynamic-leverage.LOTS') !!}</th>
                    <th>{!! __('dynamic-leverage.MARGIN') !!}</th>
                    <th class="right-corner">{!! __('dynamic-leverage.MAX_LEVERAGE') !!}</th>
                </tr>
                <tr>
                    <td>0.01~5</td>
                    <td>0.5%</td>
                    <td>1:200</td>
                </tr>
                <tr>
                    <td>5.01~20</td>
                    <td>1%</td>
                    <td>1:100</td>
                </tr>
                <tr>
                    <td>20.01~40</td>
                    <td>4%</td>
                    <td>1:25</td>
                </tr>
                <tr>
                    <td>40+</td>
                    <td>10%</td>
                    <td>1:10</td>
                </tr>
            </table>
        </div>
    @else
        <div class="col-md-8 offset-md-2 col-12 text-center mb-5 mx-auto">
            <table cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('dynamic-leverage.LOTS') !!}</th>
                    <th>{!! __('dynamic-leverage.MARGIN') !!}</th>
                    <th class="right-corner">{!! __('dynamic-leverage.MAX_LEVERAGE') !!}</th>
                </tr>
                <tr>
                    <td>0-5</td>
                    <td>0.5%</td>
                    <td>1:200</td>
                </tr>
                <tr>
                    <td>5-20</td>
                    <td>1%</td>
                    <td>1:100</td>
                </tr>
                <tr>
                    <td>20-40</td>
                    <td>4%</td>
                    <td>1:25</td>
                </tr>
                <tr>
                    <td>40+</td>
                    <td>10%</td>
                    <td>1:10</td>
                </tr>
            </table>
        </div>
    @endif

    <section>

        <ul class="nav nav-tabs d-flex justify-content-lg-between justify-content-center col-lg-7 col-12 mx-auto"
            id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="example1-tab" data-bs-toggle="tab" data-bs-target="#silverexample1"
                    type="button" role="tab" aria-controls="home"
                    aria-selected="true">{{ __('dynamic-leverage.EXAMPLES_1') }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="example2-tab" data-bs-toggle="tab" data-bs-target="#silverexample2"
                    type="button" role="tab" aria-controls="profile"
                    aria-selected="false">{{ __('dynamic-leverage.EXAMPLES_2') }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="example3-tab" data-bs-toggle="tab" data-bs-target="#silverexample3"
                    type="button" role="tab" aria-controls="contact"
                    aria-selected="false">{{ __('dynamic-leverage.EXAMPLES_3') }}</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="silverexample1" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">


                    <div class="col-12 text-center my-4">
                        <p class="">{{ __('dynamic-leverage.CONSIDER_XAGUSD') }}</p>
                        <p class="">{{ __('dynamic-leverage.CONSIDER_XAGUSD_VALUE') }}</p>
                        <p class="">{{ __('dynamic-leverage.MARGIN_REQUIRED') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="left-corner">{!! __('dynamic-leverage.LOTS') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_LEVERAGE') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_MARGIN') !!}</th>
                                <th>{!! __('dynamic-leverage.MARGIN_CALCULATIONS') !!}</th>
                                <th class="right-corner">{!! __('dynamic-leverage.MARGIN_AMOUNT') !!}</th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1:200</td>
                                <td>0.5%</td>
                                <td>5 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 200 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>2,500.00 USD</td>
                            </tr>
                            <tr class="fw-700">
                                <td class="fw-800" colspan="4">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}</td>
                                <td class="green-td fw-800">2,500.00 USD</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 text-center my-4">
                        <p>{{ __('dynamic-leverage.THE_ACCOUNT_CURRENCY') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="border-radius-23" colspan="3">
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}</td>
                                <td>2,500.00 USD</td>
                            </tr>

                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.CONVERSION_RATE_USD') }}</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td class="fw-800" colspan="2">
                                    {{ __('dynamic-leverage.TOTAL_REQUIRED_IN_ACCOUNT') }}
                                </td>
                                <td class="green-td fw-800">2,500.00 USD</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="silverexample2" role="tabpanel" aria-labelledby="profile-tab">

                <div class="row">


                    <div class="col-12 text-center my-4">
                        <p class="">{{ __('dynamic-leverage.CONSIDER_XAGUSD_25LOTS') }}</p>
                        <p class="">{{ __('dynamic-leverage.CONSIDER_XAGUSD_VALUE') }}</p>
                        <p class="">{{ __('dynamic-leverage.MARGIN_REQUIRED') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="left-corner">{!! __('dynamic-leverage.LOTS') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_LEVERAGE') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_MARGIN') !!}</th>
                                <th>{!! __('dynamic-leverage.MARGIN_CALCULATIONS') !!}</th>
                                <th class="right-corner">{!! __('dynamic-leverage.MARGIN_AMOUNT') !!}</th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1:200</td>
                                <td>0.5%</td>
                                <td>5 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 200 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>2,500.00 USD</td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>1:100</td>
                                <td>1%</td>
                                <td>15 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 100 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>15,000.00 USD</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>1:25</td>
                                <td>4%</td>
                                <td>5 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 25 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>20,000.00 USD</td>
                            </tr>


                            <tr>
                                <td class="fw-800" colspan="4">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}</td>
                                <td class="green-td fw-800">37,500.00 USD</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 text-center my-4">
                        <p>{{ __('dynamic-leverage.CONSIDER_EUR_USD') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="border-radius-23" colspan="3">
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}</td>
                                <td>37,500.00 USD</td>
                            </tr>

                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.CONVERSION_RATE_USD_EUR') }}</td>
                                <td>0.91</td>
                            </tr>

                            <tr>
                                <td class="fw-800" colspan="2">
                                    {{ __('dynamic-leverage.TOTAL_REQUIRED_IN_ACCOUNT') }}
                                </td>
                                <td class="green-td fw-800">34,125.00 EUR</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="silverexample3" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">


                    <div class="col-12 text-center my-4">
                        <p class="">{{ __('dynamic-leverage.CONSIDER_A_XAGUSD') }}</p>
                        <p class="">{{ __('dynamic-leverage.CONSIDER_XAGUSD_VALUE') }}</p>
                        <p class="">{{ __('dynamic-leverage.MARGIN_REQUIRED') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="left-corner">{!! __('dynamic-leverage.LOTS') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_LEVERAGE') !!}</th>
                                <th>{!! __('dynamic-leverage.APPLICABLE_MARGIN') !!}</th>
                                <th>{!! __('dynamic-leverage.MARGIN_CALCULATIONS') !!}</th>
                                <th class="right-corner">{!! __('dynamic-leverage.MARGIN_AMOUNT') !!}</th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1:200</td>
                                <td>0.5%</td>
                                <td>5 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 200 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>2,500.00 USD</td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>1:100</td>
                                <td>1%</td>
                                <td>15 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 100 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>15,000.00 USD</td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>1:25</td>
                                <td>4%</td>
                                <td>20 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 25 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>80,000.00 USD</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>1:10</td>
                                <td>10%</td>
                                <td>5 ({!! __('dynamic-leverage.LOTS') !!}) * 5,000 * 20.00 / 10 ({!! __('dynamic-leverage.LEVERAGE') !!})</td>
                                <td>50,000.00 USD</td>
                            </tr>


                            <tr class="fw-700">
                                <td class="fw-800" colspan="4">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}</td>
                                <td class="green-td fw-800">147,500.00 USD</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 text-center my-4">
                        <p>{{ __('dynamic-leverage.CONSIDER_JPY_USD') }}</p>
                    </div>

                    <div class="col-md-8 col-10 text-center mb-5 d-flex justify-content-center mx-auto">
                        <table cellpadding="10" cellspacing="0" class="fs-md-10">
                            <tr class="table-header">
                                <th class="border-radius-23" colspan="3">
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.TOTAL_REQUIRED') }}
                                </td>
                                <td>147,500.00 USD</td>
                            </tr>

                            <tr>
                                <td colspan="2">{{ __('dynamic-leverage.CONVERSION_RATE_JPY') }}</td>
                                <td>150.00</td>
                            </tr>

                            <tr>
                                <td class="fw-800" colspan="2">
                                    {{ __('dynamic-leverage.TOTAL_REQUIRED_IN_ACCOUNT') }}
                                </td>
                                <td class="green-td fw-800">22,125,000.00 JPY</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
