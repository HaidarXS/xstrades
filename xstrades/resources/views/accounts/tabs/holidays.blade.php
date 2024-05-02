@php
    $lang = session()->get('locale');
    $jsonData = file_get_contents('../holidays' . '/' . $lang . '/holidays.json');
    $data = json_decode($jsonData, true);

@endphp
<section>

    <div class="row d-flex justify-content-center text-center py-5">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours-2.HOLIDAYS_HOURS_TITLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-2.HOLIDAYS_HOURS_DESC') !!}</p>
    </div>

    {{-- <div class="row d-flex justify-content-center text-center py-3">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours-2.UPCOMING_TITLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-2.UPCOMING_DESC') !!}</p>
    </div> --}}

</section>

<div class="row trading-hours px-3 px-md-0">
    <div class="row d-flex justify-content-center text-center py-3">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours-2.UPCOMING_TITLE') }}</h2>
    </div>
    <div class="col-10 offset-md-2 text-center mb-5 mx-auto d-flex justify-content-center">
        <table class="notices-table" cellpadding="10" cellspacing="0">
            @foreach ($data as $index => $item)
                @if ($index === 0 || isset($item['main-title']))
                    <tr class="table-header">
                        <th class="radius-x" colspan="6">{{ $item['main-title'] }}</th>
                    </tr>
                    <tr class="table-header">
                        <th>{{ $item['main-column1'] }}</th>
                        <th>{{ $item['main-column2'] }}</th>
                        <th>{{ $item['main-column3'] }}</th>
                        <th>{{ $item['main-column4'] }}</th>
                        <th>{{ $item['main-column5'] }}</th>
                        <th>{{ $item['main-column6'] }}</th>
                    </tr>
                    <tr class="table-header">

                        <th rowspan="2">{{ $item['sub-column1'] ?? '' }}</th>

                        <th rowspan="2">{{ $item['sub-column2'] ?? '' }}</th>
                        <th>{{ $item['sub-column3'] ?? '' }}</th>
                        <th>{{ $item['sub-column4'] ?? '' }}</th>
                        <th>{{ $item['sub-column5'] ?? '' }}</th>
                        <th>{{ $item['sub-column6'] ?? '' }}</th>
                    </tr>
                    <tr class="table-header">

                        <th colspan="4">{{ $item['time-zone'] ?? '' }}</th>
                    </tr>
                @else
                    @if (isset($item['Column1']) ||
                            isset($item['Column2']) ||
                            isset($item['Column3']) ||
                            isset($item['Column4']) ||
                            isset($item['Column5']) ||
                            isset($item['Column6']))
                        <tr>
                            @php
                                $rowspan = 1;
                                if (isset($item['Column1'])) {
                                    for ($i = $index + 1; $i < count($data); $i++) {
                                        if (!isset($data[$i]['Column1']) || empty($data[$i]['Column1'])) {
                                            $rowspan++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                            @endphp

                            @if (isset($item['Column1']))
                                <td class="firstTwoCol" rowspan="{{ $rowspan }}">
                                    {{ $item['Column1'] }}
                                </td>
                            @endif
                            <td class="firstTwoCol">
                                {{ $item['Column2'] ?? '' }}</td>
                            <td>{!! isset($item['Column3'])
                                ? ($item['Column3'] !== __('trading-hours-holidays.NORMAL_HOURS')
                                    ? '<strong>' . $item['Column3'] . '</strong>'
                                    : $item['Column3'])
                                : '' !!}</td>
                            <td>{!! isset($item['Column4'])
                                ? ($item['Column4'] !== __('trading-hours-holidays.NORMAL_HOURS')
                                    ? '<strong>' . $item['Column4'] . '</strong>'
                                    : $item['Column4'])
                                : '' !!}</td>
                            <td>{!! isset($item['Column5'])
                                ? ($item['Column5'] !== __('trading-hours-holidays.NORMAL_HOURS')
                                    ? '<strong>' . $item['Column5'] . '</strong>'
                                    : $item['Column5'])
                                : '' !!}</td>
                            <td>{!! isset($item['Column6'])
                                ? ($item['Column6'] !== __('trading-hours-holidays.NORMAL_HOURS')
                                    ? '<strong>' . $item['Column6'] . '</strong>'
                                    : $item['Column6'])
                                : '' !!}</td>
                        </tr>
                    @endif
                @endif
            @endforeach
        </table>
    </div>
</div>
