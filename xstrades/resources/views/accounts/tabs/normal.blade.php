<section>

    <div class="row d-flex justify-content-center text-center py-5">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours.NORMAL_HOURS_TITLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours.NORMAL_HOURS_DESC') !!}</p>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('homepage.FOREX') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.FOREX_INSTRUMENTS') }}</td>
                    <td>{{ __('trading-hours.FOREX_HOURS') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('account_types.METALS') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.METALS_INSTRUMENTS') }}</td>
                    <td>{{ __('trading-hours.HOURS_1') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('account_types.ENERGY') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.ENERGY_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.ENERGY_HOURS_1') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.ENERGY_INSTRUMENTS_2') }}</td>
                    <td>{{ __('trading-hours.HOURS_1') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.ENERGY_INSTRUMENTS_3') }}</td>
                    <td>{{ __('trading-hours.ENERGY_HOURS_3') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('account_types.INDICES') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_1') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_2') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_3') }}</td>
                    <td>{{ __('trading-hours.HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_4') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_4') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_5') }}</td>
                    <td>{{ __('trading-hours.HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_6') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_6') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_7') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_7') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_8') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_8') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.INDICES_INSTRUMENTS_9') }}</td>
                    <td>{{ __('trading-hours.INDICES_HOURS_9') }}</td>
                </tr>
            </table>
        </div>
    </div>

    {{-- <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('account_types.COMMODITIES') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.HOURS_4') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_2') }}</td>
                    <td>{{ __('trading-hours.COMMODITIES_HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_3') }}</td>
                    <td>{{ __('trading-hours.COMMODITIES_HOURS_3') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_4') }}</td>
                    <td>{{ __('trading-hours.HOURS_5') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_5') }}</td>
                    <td>{{ __('trading-hours.COMMODITIES_HOURS_5') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_6') }}</td>
                    <td>{{ __('trading-hours.HOURS_5') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_7') }}</td>
                    <td>{{ __('trading-hours.COMMODITIES_HOURS_7') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.COMMODITIES_INSTRUMENTS_8') }}</td>
                    <td>{{ __('trading-hours.HOURS_5') }}</td>
                </tr>

            </table>
        </div>
    </div> --}}

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('trading-hours.FUTURES') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.FUTURES_HOURS_1') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_2') }}</td>
                    <td>{{ __('trading-hours.FUTURES_HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_3') }}</td>
                    <td>{{ __('trading-hours.HOURS_3') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_4') }}</td>
                    <td>{{ __('trading-hours.HOURS_3') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_5') }}</td>
                    <td>{{ __('trading-hours.HOURS_3') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_6') }}</td>
                    <td>{{ __('trading-hours.HOURS_3') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.FUTURES_INSTRUMENTS_7') }}</td>
                    <td>{{ __('trading-hours.FUTURES_HOURS_7') }}</td>
                </tr>


            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('account_types.SHARES') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>
                <tr>
                    <td>{{ __('trading-hours.SHARES_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.SHARES_HOURS_1') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.SHARES_INSTRUMENTS_2') }}</td>
                    <td>{{ __('trading-hours.SHARES_HOURS_2') }}</td>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.SHARES_INSTRUMENTS_3') }}</td>
                    <td>{{ __('trading-hours.SHARES_HOURS_3') }}</td>
                </tr>

            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('contract_specs.CRYPTOS') }}</h4>
        </div>
        <div class="col-md-9 offset-md-2 col-12 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="w-md-100" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('account_types.INSTRUMENTS') !!}</th>
                    <th class="right-corner">{!! __('trading-hours.TRADING_HOURS_TABLE') !!}</th>
                </tr>

                <tr>
                    <td>{{ __('trading-hours.CRYPTOS_INSTRUMENTS_1') }}</td>
                    <td>{{ __('trading-hours.CRYPTOS_HOURS_1') }}</td>
                </tr>

            </table>
        </div>
    </div>
</section>
