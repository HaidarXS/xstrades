@php

    $lang = session()->get('locale');
    $jsonData = file_get_contents('../hmr' . '/' . $lang . '/hmr.json');
    $data = json_decode($jsonData, true);

@endphp
<section>
    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center">{{ __('trading-hours-hmr.HMR_PERIODS') }}</h4>
        </div>
        <div class="col-10 offset-md-2 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="notices-table" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="border-radius-23" colspan="6">{!! __('trading-hours-hmr.MR_PERIOD_BETWEEN') !!}</th>
                </tr>
                <tr class="table-header">
                    <th>{!! __('trading-hours-hmr.DATE') !!}</th>
                    <th>{!! __('trading-hours-hmr.TIME_ZONE') !!}</th>
                    <th>{!! __('trading-hours-hmr.NAME') !!}</th>
                    <th>{!! __('trading-hours-hmr.CURRENCY') !!}</th>
                    <th>{!! __('trading-hours-hmr.APPLIED_START') !!}</th>
                    <th>{!! __('trading-hours-hmr.APPLIED_END') !!}</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="fw-700 text-uppercase">{{ $item['date'] }}</td>
                        <td class="fw-700 text-uppercase">{{ $item['time'] }}</td>
                        <td class="text-capitalize">{{ $item['name'] }}</td>
                        <td class="fw-700 text-capitalize">{{ $item['currency'] }}</td>
                        <td class="text-capitalize">{{ $item['applied_start'] }}</td>
                        <td class="text-capitalize">{{ $item['applied_end'] }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</section>
