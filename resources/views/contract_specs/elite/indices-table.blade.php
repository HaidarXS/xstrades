
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <thead class="">
                <tr class="bg-primary text-white">
                    @foreach (collect($records[0])->keys() as $key)
                        <th class="py-3" scope="col">{{ $key }}</th>
                    @endforeach
                    {{-- <th class="py-3" scope="col">{{ __('contract_specs.SYMBOLS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.DIGITS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.MIN_TRADE_UNIT') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.TRADING_HOURS') }}</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr class="">
                        <th scope="row" class="py-3">{{$record['Symbol']}}</th>
                        <td class="py-3">{{$record['Type']}}</td>
                        <td class="py-3">{{$record['Minimum Spread (Pips)']}}</td>
                        <td class="py-3">{{$record['Pip value per 1 standard lot (term currency)']}}</td>
                        <td class="py-3">{{$record['Commission per 1 standard lot']}}</td>
                        <td class="py-3">{{$record['Lot Size']}}</td>
                        <td class="py-3">{{$record['Maximum Leverage']}}</td>
                        <td class="py-3">{{$record['Minimum Volume']}}</td>
                        <td class="py-3">{{$record['Maximum Volume']}}</td>
                        <td class="py-3">{{$record['Swap Long']}}</td>
                        <td class="py-3">{{$record['Swap short']}}</td>
                        <td class="py-3">{{$record['Trading Sessions']}}</td>
                        {{-- <td class="py-3">{{$record['Open Sessions']}}</td> --}}
                        {{-- <td class="py-3">{{$record['Close Sessions']}}</td> --}}
                    </tr>
                @endforeach
                {{-- <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.CAD')}}</th>
                    <td class="py-3">AUD/CAD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.JPY')}}</th>
                    <td class="py-3">AUD/JPY</td>
                    <td class="py-3">3</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.NZD')}}</th>
                    <td class="py-3">AUD/NZD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.NOK')}}</th>
                    <td class="py-3">AUD/NOK</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.SGD')}}</th>
                    <td class="py-3">AUD/SGD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.SEK')}}</th>
                    <td class="py-3">AUD/SEK</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.CHF')}}</th>
                    <td class="py-3">AUD/CHF</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.AUD')}} {{__('contract_specs.VS')}} {{ __('currencies.USD')}}</th>
                    <td class="py-3">AUD/USD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CAD')}} {{__('contract_specs.VS')}} {{ __('currencies.JPY')}}</th>
                    <td class="py-3">CAD/JPY</td>
                    <td class="py-3">3</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CAD')}} {{__('contract_specs.VS')}} {{ __('currencies.SGD')}}</th>
                    <td class="py-3">CAD/SGD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CAD')}} {{__('contract_specs.VS')}} {{ __('currencies.CHF')}}</th>
                    <td class="py-3">CAD/CHF</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CHF')}} {{__('contract_specs.VS')}} {{ __('currencies.JPY')}}</th>
                    <td class="py-3">CHF/JPY</td>
                    <td class="py-3">3</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CHF')}} {{__('contract_specs.VS')}} {{ __('currencies.NOK')}}</th>
                    <td class="py-3">CHF/NOK</td>
                    <td class="py-3">4</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.CHF')}} {{__('contract_specs.VS')}} {{ __('currencies.SGD')}}</th>
                    <td class="py-3">CHF/SGD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr>

                <tr class="">
                    <th scope="row" class="py-3">{{__('currencies.EURO')}} {{__('contract_specs.VS')}} {{ __('currencies.AUD')}}</th>
                    <td class="py-3">EUR/AUD</td>
                    <td class="py-3">5</td>
                    <td class="py-3">1000</td>
                    <td class="py-3">{{__('contract_specs.MONDAY')}} - {{__('contract_specs.FRIDAY')}} ( 00:00 - 24:00 )</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>
