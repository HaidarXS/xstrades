@php
    $numEnergies = 3; 
    $energies = [];

    for ($i = 1; $i <= $numEnergies; $i++) {
        $energy = [
            'INSTRUMENT_NAME' => __('energies-fm.INSTRUMENT_NAME_' . $i), 
            'SYMBOLS' => __('energies-fm.SYMBOLS_' . $i),
            'DIGITS' => __('energies-fm.DIGITS_' . $i),
            'MIN_TRADE_UNIT' => __('energies-fm.MIN_TRADE_UNIT_' . $i),
            'CURRENCY' => __('energies-fm.CURRENCY_' . $i),
            'TRADING_HOURS' => __('energies-fm.TRADING_HOURS_' . $i),
        ];

        $energies[] = $energy;
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
                    <th class="py-3" scope="col">{{ __('contract_specs.MIN_TRADE_UNIT') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.CURRENCY') }}</th>
                    <th class="py-3" scope="col">{{ __('contract_specs.TRADING_HOURS') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($energies as $energy)
                <tr class="">
                    <th scope="row"  class="py-3">{{ $energy['INSTRUMENT_NAME'] }}</td>
                    <td class="py-3">{{ $energy['SYMBOLS'] }}</td>
                    <td class="py-3">{{ $energy['DIGITS'] }}</td>
                    <td class="py-3">{{ $energy['MIN_TRADE_UNIT'] }}</td>
                    <td scope="row"  class="py-3">{{ $energy['CURRENCY'] }}</td>
                    <td class="py-3">{{ $energy['TRADING_HOURS'] }}</td>
                </tr>
                @endforeach 

            </tbody>
        </table>
    </div>
</div>
