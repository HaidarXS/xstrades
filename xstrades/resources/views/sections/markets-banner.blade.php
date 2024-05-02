@if ($tab == 'energy')
    <div class="w-100 position-relative">
        <img id="markets-banner" src="{{ asset('/img/Market/new-banner/' . $tab . '.png') }}"
            alt="{{ __('markets.ENERGIES') }}" class="img-fluid w-100">
    </div>
@elseif($tab == 'crypto')
    <div class="w-100 position-relative">
        <img id="markets-banner" src="{{ asset('/img/Market/new-banner/' . $tab . '.png') }}"
            alt="{{ __('markets.CRYPTOS') }}" class="img-fluid w-100">
    </div>
@else
    <div class="w-100 position-relative">
        <img id="markets-banner" src="{{ asset('/img/Market/new-banner/' . $tab . '.png') }}"
            alt="{{ __('markets.' . strtoupper($tab)) }}" class="img-fluid w-100">
    </div>
@endif
