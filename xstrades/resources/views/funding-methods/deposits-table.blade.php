<style>
    @media (max-width: 768px) {

        th,
        td {
            font-size: 10px;
            padding: 5px !important;
        }

        .fund-btn {
            padding: 8px !important;
        }
    }

    #deposit-section-btn>div {
        background-color: #30af85 !important;
    }

    #deposit-section-btn>div>h3 {
        /* background-color:#30af85; */
        color: #fff !important;
    }
</style>


<section id="deposit-section" class="bg-gray py-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="">
                        <tr class="bg-primary text-center text-white">
                            <th class="py-3" scope="col">{{ __('funding_methods.FUNDING_METHODS') }}</th>
                            <th class="py-3" scope="col">{{ __('funding_methods.MIN_DEPOSIT') }}</th>
                            <th class="py-3" scope="col">{{ __('funding_methods.MAX_DEPOSIT') }}</th>
                            <th class="py-3" scope="col">{{ __('funding_methods.PROCESSING_TIME') }}</th>
                            <th class="py-3" scope="col">{{ __('funding_methods.ACCEPTED_CURRENCIES') }}</th>
                            <th class="py-3" scope="col"></th>
                        </tr>
                    </thead>
                    @if (session()->get('locale') == 'jp')
                        <tbody>


                            <tr class="text-center">
                                <th scope="row" class="py-3">国内銀行送金(1) </th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 6.63 USD</td>
                                <td class="py-3">13,264.00 USD</td>
                                <td class="py-3">約1時間以内</td>
                                <td class="py-3">USD、JPY</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">ビットウォレット</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 3,000 JPY</td>
                                <td class="py-3">制限なし</td>
                                <td class="py-3">約30 - 45分以内</td>
                                <td class="py-3">USD、JPY</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">クレジット・デビットカード</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 20 USD</td>
                                <td class="py-3">25000 USD</td>
                                <td class="py-3">即時</td>
                                <td class="py-3">EUR、USD、GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">仮想通貨(1)</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 50.00 USD</td>
                                <td class="py-3">120,000.00 USD</td>
                                <td class="py-3">約30分以内</td>
                                <td class="py-3">USDT、TRC20、ERC20、BTC、ETH</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">スティックペイ</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 10.00 USD</td>
                                <td class="py-3">10,000.00 USD</td>
                                <td class="py-3">約1時間以内</td>
                                <td class="py-3">USD</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">パーフェクト・マネー</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 50.00 USD</td>
                                <td class="py-3">35,000.00 USD</td>
                                <td class="py-3">約30 - 45分以内</td>
                                <td class="py-3">USD</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>
                            @if (App::getLocale() != 'jp')
                                <tr class="text-center">
                                    <th scope="row" class="py-3">ミフィニティ</th>
                                    <td class="py-3">{{ __('funding_methods.FROM') }} 10.00 USD</td>
                                    <td class="py-3">2,500.00 USD</td>
                                    <td class="py-3">約1時間以内</td>
                                    <td class="py-3">USD</td>
                                    <td class="py-3">
                                        <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                            target="_blank"
                                            class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                    </td>
                                </tr>
                            @endif
                            <tr class="text-center">
                                <th scope="row" class="py-3">国内銀行送金(2) </th>
                                <td class="py-3">{{ __('funding_methods.FROM') }} 4,642.40 USD</td>
                                <td class="py-3">26,528.00 USD</td>
                                <td class="py-3">約1時間以内</td>
                                <td class="py-3">USD</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>





                            <tr class="text-center">
                                <th scope="row" class="py-3">国際銀行送金</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }}250 USD</td>
                                <td class="py-3">制限なし</td>
                                <td class="py-3">1-7営業日</td>
                                <td class="py-3">EUR、USD、GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">入金する</a>
                                </td>
                            </tr>




                        </tbody>
                    @else
                        <tbody>
                            <tr class="text-center">
                                <th scope="row" class="py-3">{{ __('funding_methods.BANK_TRANSFER') }}</th>
                                <td class="py-3">{{ __('funding_methods.FROM') }}200 USD</td>
                                <td class="py-3">{{ __('funding_methods.UNLIMITED') }}</td>
                                <td class="py-3">1-7 {{ __('funding_methods.WORKING_DAYS') }}</td>
                                <td class="py-3">EUR, USD ,GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">{{ __('funding_methods.FUND') }}</a>
                                </td>
                            </tr>


                            <tr class="text-center">
                                <th scope="row" class="py-3">{{ __('funding_methods.VISA_MASTERCARD') }}</th>
                                <td class="py-3">20 USD</td>
                                <td class="py-3">25000 USD</td>
                                <td class="py-3">{{ __('funding_methods.INSTANT') }}</td>
                                <td class="py-3">EUR, USD ,GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">{{ __('funding_methods.FUND') }}</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">{{ __('funding_methods.SKRILL') }}</th>
                                <td class="py-3">15 USD</td>
                                <td class="py-3">15000 USD {{ __('funding_methods.OR_EQUIVALENT') }}</td>
                                <td class="py-3">{{ __('funding_methods.INSTANT') }}</td>
                                <td class="py-3">EUR, USD,GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">{{ __('funding_methods.FUND') }}</a>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <th scope="row" class="py-3">{{ __('funding_methods.NETELLER') }}</th>
                                <td class="py-3">15 USD</td>
                                <td class="py-3">15000 USD {{ __('funding_methods.OR_EQUIVALENT') }}</td>
                                <td class="py-3">{{ __('funding_methods.INSTANT') }}</td>
                                <td class="py-3">EUR, USD,GBP</td>
                                <td class="py-3">
                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                        target="_blank"
                                        class="fund-btn bg-primary border-radius-30 text-decoration-none text-white py-3 px-5">{{ __('funding_methods.FUND') }}</a>
                                </td>
                            </tr>
                        </tbody>
                    @endif
                </table>
            </div>
        </div>

    </div>
</section>
