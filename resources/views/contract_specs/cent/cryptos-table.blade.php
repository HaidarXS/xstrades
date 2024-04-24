@php
    $numCryptos = 15; 
    $cryptos = [];

    for ($i = 1; $i <= $numCryptos; $i++) {
        $crypto = [
            'INSTRUMENT_NAME' => __('cryptos-fm.INSTRUMENT_NAME_' . $i), 
            'SYMBOLS' => __('cryptos-fm.SYMBOLS_' . $i),
            'CONTRACT_SIZE' => __('cryptos-fm.CONTRACT_SIZE_' . $i),
            'DIGITS' => __('cryptos-fm.DIGITS_' . $i),
            'MIN_TRADE_UNIT' => __('cryptos-fm.MIN_TRADE_UNIT_' . $i),
            'TRADING_HOURS' => __('cryptos-fm.TRADING_HOURS_' . $i),
        ];

        $cryptos[] = $crypto;
    }
@endphp

<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped ">
            <thead class="">
                <tr class="bg-primary text-white">
                    <th class="py-3" scope="col">{{ __('contract_specs.INSTRUMENT_NAME') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.SYMBOLS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.CONTRACT_SIZE') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.DIGITS') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.MIN_TRADE_UNIT') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.TRADING_HOURS') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cryptos as $crypto)
                <tr class="">
                    <th scope="row"  class="py-3">{{ $crypto['INSTRUMENT_NAME'] }}</td>
                    <td class="py-3">{{ $crypto['SYMBOLS'] }}</td>
                    <td scope="row"  class="py-3">{{ $crypto['CONTRACT_SIZE'] }}</td>
                    <td class="py-3">{{ $crypto['DIGITS'] }}</td>
                    <td class="py-3">{{ $crypto['MIN_TRADE_UNIT'] }}</td>
                    <td class="py-3">{{ $crypto['TRADING_HOURS'] }}</td>
                </tr>
                @endforeach 

            </tbody>
        </table>
    </div>
</div>
