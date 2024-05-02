@php

    $lang = session()->get('locale');
    $jsonData = file_get_contents('../notices' . '/' . $lang . '/notices.json');
    $data = json_decode($jsonData, true);

    $jsonDataOne = file_get_contents('../notices/en/noticesOne.json');
    $dataOne = json_decode($jsonDataOne, true);

@endphp
<section>

    <div class="row d-flex justify-content-center text-center py-5">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours-2.NOTICES_HOURS_TITLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-2.NOTICES_HOURS_DESC') !!}</p>
    </div>

    {{-- <div class="row d-flex justify-content-center text-center py-3">
        <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours-2.UPCOMING_NOTICES_TITLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-2.UPCOMING_NOTICES_DESC') !!}</p>
    </div> --}}


    <div class="row d-flex justify-content-center text-center py-3">
        <h2 class="col-md-8 col-10 text-secondary text-wrap-balance">
            {{ __('trading-hours-notice.UPCOMING_CORPORATE_ACTIONS') }}
        </h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-notice.OPEN_POSITIONS_ON_SHARES') !!}</p>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center text-wrap-balance">
                {{ __('trading-hours-notice.CASH_INDICES') }}
            </h4>
        </div>
        <div class="col-10 offset-md-2 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="notices-table" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('trading-hours-notice.SYMBOL') !!}</th>
                    <th>{!! __('trading-hours-notice.MONDAY') !!}</th>
                    <th>{!! __('trading-hours-notice.TUESDAY') !!}</th>
                    <th>{!! __('trading-hours-notice.WEDNESDAY') !!}</th>
                    <th>{!! __('trading-hours-notice.THURSDAY') !!}</th>
                    <th class="right-corner">{!! __('trading-hours-notice.FRIDAY') !!}</th>
                </tr>
                @foreach ($dataOne as $item)
                    <tr>
                        <td>{{ $item['symbol'] }}</td>
                        <td>{{ isset($item['Monday']) ? $item['Monday'] : '' }}</td>
                        <td>{{ isset($item['Tuesday']) ? $item['Tuesday'] : '' }}</td>
                        <td>{{ isset($item['Wednesday']) ? $item['Wednesday'] : '' }}</td>
                        <td>{{ isset($item['Thursday']) ? $item['Thursday'] : '' }}</td>
                        <td>{{ isset($item['Friday']) ? $item['Friday'] : '' }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div class="row trading-hours px-3 px-md-0">
        <div class="col-12 text-center my-4">
            <h4 class="text-primary fw-700 text-center text-wrap-balance">
                {{ __('trading-hours-notice.SHARE_CASH_DIVIDENDS') }}
            </h4>
        </div>
        <div class="col-10 offset-md-2 text-center mb-5 mx-auto d-flex justify-content-center">
            <table class="notices-table" cellpadding="10" cellspacing="0">
                <tr class="table-header">
                    <th class="left-corner">{!! __('trading-hours-notice.DATE') !!}</th>
                    <th>{!! __('trading-hours-notice.SYMBOL') !!}</th>
                    <th>{!! __('trading-hours-notice.ACTION') !!}</th>
                    <th>{!! __('trading-hours-notice.DESCRIPTION') !!}</th>
                    <th>{!! __('trading-hours-notice.DETAIL') !!}</th>
                    <th class="right-corner">{!! __('trading-hours-notice.DIVIDEND_CURRENCY') !!}</th>
                </tr>

                @foreach ($data as $item)
                    <tr>
                        <td class="fw-700 text-uppercase">{{ $item['date'] }}</td>
                        <td class="fw-700 text-uppercase">{{ $item['symbol'] }}</td>
                        <td class="text-capitalize">{{ $item['action'] }}</td>
                        <td class="fw-700 text-capitalize">{{ $item['description'] }}</td>
                        <td>{{ $item['detail'] }}</td>
                        <td class="text-capitalize">{{ $item['dividend_currency'] }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div class="row d-flex justify-content-center text-center py-3">
        <h2 class="col-md-8 col-10 text-secondary text-wrap-balance">
            {{ __('trading-hours-notice.EXAMPLE') }}</h2>
        <p class="col-md-8 col-10">{!! __('trading-hours-notice.THERE_IS_A_DIVIDEND') !!}</p>
    </div>

</section>
