@php
    $numFutures = 15; 
    $futures = [];

    for ($i = 1; $i <= $numFutures; $i++) {
        $future = [
            'INSTRUMENT_NAME' => __('futures-fm.INSTRUMENT_NAME_' . $i), 
            'SYMBOLS' => __('futures-fm.SYMBOLS_' . $i),
            'DIGITS' => __('futures-fm.DIGITS_' . $i),
            'INSTRUMENT_TYPE' => __('futures-fm.INSTRUMENT_TYPE_' . $i), 
            'MIN_TRADE_UNIT' => __('futures-fm.MIN_TRADE_UNIT_' . $i),
            'CURRENCY' => __('futures-fm.CURRENCY_' . $i),
            'TRADING_HOURS' => __('futures-fm.TRADING_HOURS_' . $i),
        ];

        $futures[] = $future;
    }
@endphp

<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <thead class="">
                <tr class="bg-primary text-white">
                    <th class="py-3" scope="col">{{ __('contract_specs.INSTRUMENT_NAME') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.SYMBOLS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.DIGITS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.INSTRUMENT_TYPE') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.MIN_TRADE_UNIT') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.CURRENCY') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.TRADING_HOURS') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($futures as $future)
                <tr class="">
                    <th scope="row"  class="py-3">{{ $future['INSTRUMENT_NAME'] }}</td>
                    <td class="py-3">{{ $future['SYMBOLS'] }}</td>
                    <td class="py-3">{{ $future['DIGITS'] }}</td>
                    <td scope="row"  class="py-3">{{ $future['INSTRUMENT_TYPE'] }}</td>
                    <td class="py-3">{{ $future['MIN_TRADE_UNIT'] }}</td>
                    <td class="py-3">{{ $future['CURRENCY'] }}</td>
                    <td class="py-3">{{ $future['TRADING_HOURS'] }}</td>
                </tr>
                @endforeach 

            </tbody>
        </table>
    </div>
</div>
