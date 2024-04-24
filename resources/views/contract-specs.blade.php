<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-ocean-blue.min.css">
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-main.min.css">
<script src="https://kendo.cdn.telerik.com/2023.1.117/mjs/kendo.all.js" type="module"></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/jquery.min.js" defer></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/jszip.min.js" defer></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/kendo.all.min.js" defer></script>

@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_CONTARCTSPECS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_CONTARCTSPECS') }}">
@endsection
<style>
    .grid {
        border-collapse: collapse;
        width: 100%;
        margin: 10px;
    }


    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    hr {
        margin: 10px 0;
    }

    /* CSS for mobile screens (max-width: 768px) */
    @media (max-width: 768px) {

        .grid th,
        .grid td {
            padding: 4px;
            font-size: 14px;
        }

        /* Hide columns on mobile */
        .hide-on-mobile {
            display: none;
        }

        .filter-section {
            text-align: center;
        }
    }

    /* Custom styling for mobile view */
    .mobile-main-row {
        background-color: #f2f2f2;
    }

    .mobile-open-row {
        display: none;
    }

    .acc-specs-grid td {
        color: black !important
    }

    .blue-grid {
        color: #203c83 !important;
        /* font-size:18px!important; */
        margin-right: 2px;
        font-weight: bold
    }

    .k-loading-image {
        display: none
    }

    .custom-checkbox {
        width: 18px;
        height: 18px;
        background-color: #30af85;
        border: 1px solid white;
        display: inline-block;
        vertical-align: middle;
        border-radius: 3px;
    }

    /* Style for the checkmark inside the custom checkbox */
    .custom-checkbox:after {
        content: '\2713';
        font-size: 10px;
        color: #fff;
        display: block;
        text-align: center;
    }

    /* Style to hide the standard checkbox */
    .custom-checkbox input[type="checkbox"] {
        display: none;

    }

    input[type="checkbox"] {
        -webkit-appearance: initial;
        appearance: initial;
        background: gray;
        width: 18px;
        height: 18px;
        border: none;
        border-radius: initial;
        position: relative;
    }

    /* input[type="checkbox"]:checked {
        background: red;
    }

    input[type="checkbox"]:checked:after {
        content: "x";
        color: #fff;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

    } */

    @media (max-width: 768px) {
        .contract-specs-banner {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url(/img/contract-specs/contract-specs-banner-mobile.png);
        }
    }

    @media (min-width: 769px) {
        .contract-specs-banner {
            background: rgb(48, 175, 133, 1);
            background: linear-gradient(90deg, rgba(48, 175, 133, 1) 0%, rgba(1, 51, 127, 1) 100%);
        }
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>


@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('contract_specs.CONTRACT_SPECIFICATIONS'),
        'bannerDescription' => __('contract_specs.PAGE_DESC'),
        'bannerImage' => asset('/img/traders-accounts-banners/desktop/contract-specification.svg'),
        'mobileBanner' => asset('/img/traders-accounts-banners/mobile/contract-specification.webp'),
    ])



    {{-- <section class="container py-5">
        <div class="row">
            <h1 class="text-center text-secondary fw-700 mb-3 "> {{ __('contract_specs.CONTRACT_SPECIFICATIONS') }}</h1>
            <p class="col-12 text-center">
                {!! __('contract_specs.CONTRATCT_SPECS_INTRO') !!}</p>
        </div>
    </section> --}}

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-3 col-md-6 my-2">
                <input id="assets-filter" type="text" class="py-2 px-2" />
            </div>

            <div class="col-10 col-lg-3 col-md-6 my-2">
                <input id="account-type" type="text" class="py-2 px-2" />
            </div>

        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-12 col-md-6 my-2 my-2 filter-section text-center">
                <button id="filter-btn" class="btn apply-filter py-2 px-5 mt-md-0 mt-3">
                    <div class="d-flex align-items-center justify-content-center">
                        {{ __('contract_specs.APPLY_FILTER') }}
                    </div>
                </button>
            </div>
        </div>
    </div>


    <div class="grey-bg-desktop py-5">
        <div class="container py-3">

            <script type="text/x-kendo-template" id="template-desktop">
                <table class="grid">
                    <tr>
                        <th>Symbols</th>
                        <th>Spreads</th>
                        <th>Commissions</th>
                        <th>Swap Long</th>
                        <th>Swap Short</th>
                        <th>Leverage</th>
                        <th>Contract</th>
                        <th>Mt4</th>
                        <th>Mt5</th>
                    </tr>
                    <tr>
                        <td>#: symbol #</td>
                        <td>#: spread #</td>
                        <td>#: commissions #</td>
                        <td>#: long_swap #</td>
                        <td>#: short_swap #</td>
                        <td>#: leverage #</td>
                        <td>#: contract_size #</td>
                        <td>#: mt4 #</td>
                        <td>#: mt5 #</td>
                    </tr>
                </table>
                <hr>
            </script>

            <script type="text/x-kendo-template" id="template-mobile">
                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column">
                        {{__('contract_specs.COMMISSIONS')}}:
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: commissions #
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column">
                        {{ __('contract_specs.CONTRACT_SIZE') }}:
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: contract_size # #: unit?.title || ''  #
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column">
                        {!! __('contract_specs.SWAP_SHORT') !!} :
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: short_swap #
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column" >
                        {!! __('contract_specs.SWAP_LONG') !!} :
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: long_swap #
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column">
                        {{ __('contract_specs.LEVERAGE') }}:
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: leverage #
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2 d-flex flex-column">
                        {{__('contract_specs.PLATFORM')}}:
                    </div>
                    <div class="col-6 mb-2 d-flex flex-column">
                        #: mt4 ? 'MT4 /' : '' #  #: mt5 ? 'MT5' : ''  #
                    </div>
                </div>

    
          </script>

            <div>
                <div id="grid" class="acc-specs-grid d-none d-md-block shadow"></div>
            </div>
            <div>
                <div id="grid_mobile" class="acc-specs-grid d-block d-md-none"></div>
            </div>
        </div>
    </div>


    @include('contract_specs.tech-details-section')
    @include('sections.easy')


    <script>
        $(document).ready(function() {

            let accountType = '{{ $account_type->id ?? null }}';
            let assetId = '{{ $slug->id ?? null }}';

            var dataSource = new kendo.data.DataSource({
                transport: {
                    read: {
                        url: '{{ route('getFilteredAccounts', ['lang' => App::getLocale()]) }}',
                        dataType: "json",
                    }
                },
                schema: {
                    data: function(response) {
                        return response.data;
                    },
                    total: function(response) {
                        return response.total;
                    },
                    serverPaging: false,
                },
                filter: {
                    logic: "and",
                    filters: [{
                        field: "id",
                        operator: "equal",
                        value: 0,
                    }]
                },
                pageSize: 10,
            });

            var isMobile = window.innerWidth <= 768; // Check if the screen is mobile

            var gridOptions = {
                dataSource: dataSource,
                height: 550,
                sortable: true,
                pageable: {
                    input: true,
                    numeric: false
                },
                // toolbar: ["search"],
                // search: {
                //     fields: [{
                //         name: "symbol",
                //         operator: "contains"
                //     }, ],
                //     placeholder: "Custom Search Placeholder Text",
                // },
            };

            // Use mobile template for mobile screens
            gridOptions.columns = [{
                    field: "symbol",
                    title: "{{ __('contract_specs.SYMBOL') }}"
                },
                {
                    field: "spread",
                    title: "{{ __('contract_specs.SPREAD') }}"
                }
            ];

            gridOptions.detailTemplate = kendo.template($("#template-mobile").html());
            $("#grid_mobile").kendoGrid(gridOptions);

            // Use desktop template for larger screens
            gridOptions.columns = [{
                    field: "symbol",
                    title: "{{ __('contract_specs.SYMBOL') }}"
                },
                {

                    field: "commissions",
                    title: "{{ __('contract_specs.COMMISSIONS') }}"


                },
                {
                    field: "spread",
                    title: "{{ __('contract_specs.SPREAD') }}"
                },
                {
                    field: "leverage",
                    title: "{{ __('contract_specs.LEVERAGE') }}"
                },
                {
                    field: "short_swap",
                    title: "{!! __('contract_specs.SWAP_SHORT') !!}"
                },
                {
                    field: "long_swap",
                    title: "{!! __('contract_specs.SWAP_LONG') !!}"
                },
                {
                    field: "contract_size",
                    title: "{{ __('contract_specs.CONTRACT_SIZE') }}",
                    template: function(di) {
                        return `<span>${di.contract_size} ${di?.unit?.title || ''}</span>`
                    }
                },
                {
                    field: "mt4",
                    title: "MT4",
                    template: function(dataItem) {
                        if (dataItem.mt4) {
                            return `<img class="img-fluid" height="20" width="20" src="{{ asset('/img/contract-specs/true.webp') }}" alt="true">`;
                        } else {
                            return `<img class="img-fluid" height="20" width="20" src="{{ asset('/img/contract-specs/false.webp') }}" alt="false">`;
                        }
                    }
                },
                {
                    field: "mt5",
                    title: "MT5",
                    template: function(dataItem) {
                        if (dataItem.mt5) {
                            return `<img class="img-fluid" height="20" width="20" src="{{ asset('/img/contract-specs/true.webp') }}" alt="true">`;
                        } else {
                            return `<img class="img-fluid" height="20" width="20" src="{{ asset('/img/contract-specs/false.webp') }}" alt="false">`;
                        }
                    }

                },
            ];

            gridOptions.detailTemplate = null;

            $("#grid").kendoGrid(gridOptions);


            $("#filter-btn").click(function() {
                var filters = [];
                // updateUrl();
                var accountFilter = $("#account-type").val();
                if (accountFilter) {
                    filters.push({
                        field: "account_type_id",
                        operator: "contains",
                        value: accountFilter,
                    });
                }
                var assetsFilter = $("#assets-filter").val();
                if (assetsFilter) {
                    filters.push({
                        field: "asset_id",
                        operator: "contains",
                        value: assetsFilter,
                    });
                }

                if (accountFilter && assetsFilter) {
                    var newURL = "{{ route('contract_specs', ['lang' => App::getLocale()]) }}" + $(
                            "#account-type").data("kendoDropDownList").text() + "/" + $("#assets-filter")
                        .data("kendoDropDownList").text().replace(' ', '-');

                    // Push the new URL to the browser history without page reload
                    window.history.replaceState({}, '', newURL);

                    dataSource.filter({
                        logic: "and",
                        filters: filters,
                    });
                }
            });

            $("#assets-filter").kendoDropDownList({
                dataSource: {
                    transport: {
                        read: {
                            url: "{{ route('getAssets', ['lang' => App::getLocale()]) }}",
                            data: function() {
                                return {
                                    account_type: 1,
                                };
                            },
                            dataType: "json",
                        },
                    },
                    schema: {
                        data: function(response) {
                            return response.data;
                        },
                    },
                },
                value: assetId,
                optionLabel: "{{ __('contract_specs.SELECT_ASSET') }}",
                dataTextField: "title",
                dataValueField: "id",

                change: function() {
                    $("#account-type").kendoDropDownList({
                        dataSource: {
                            transport: {
                                read: {
                                    url: "{{ route('getAccounts', ['lang' => App::getLocale()]) }}",
                                    data: function() {
                                        return {
                                            asset: $("#assets-filter").data(
                                                    "kendoDropDownList")
                                                .value(),
                                        };
                                    },
                                    dataType: "json"
                                },
                            },
                            schema: {
                                data: function(response) {
                                    return response.data;
                                }
                            },
                            pageSize: 10,
                        },
                        value: accountType,
                        autobind: false,
                        optionLabel: "{{ __('contract_specs.SELECT_ACCOUNT') }}",
                        dataTextField: "title",
                        dataValueField: "id",
                    });
                }
            });



            $("#account-type").kendoDropDownList({
                // dataSource: {
                //     transport: {
                //         read: {
                //             url: "{{ route('getAccounts', ['lang' => App::getLocale()]) }}",
                //             dataType: "json"
                //         },
                //     },
                //     schema: {
                //         data: function(response) {
                //             return response.data;
                //         }
                //     },
                //     pageSize: 10,
                // },
                value: accountType,
                autobind: false,
                optionLabel: "{{ __('contract_specs.SELECT_ACCOUNT') }}",
                dataTextField: "title",
                dataValueField: "id",

            });

            // if (assetId !== null) {
            //     $("#assets-filter").kendoDropDownList({
            //         dataSource: {
            //             transport: {
            //                 read: {
            //                     url: "{{ route('getAssets', ['lang' => App::getLocale()]) }}",
            //                     data: function() {
            //                         return {
            //                             account_type: $("#account-type").data("kendoDropDownList")
            //                                 .value(),

            //                         };
            //                     },
            //                     dataType: "json",
            //                 },
            //             },
            //             schema: {
            //                 data: function(response) {
            //                     return response.data;
            //                 },
            //             },
            //         },
            //         value: assetId,
            //         optionLabel: "{{ __('contract_specs.SELECT_ASSET') }}",
            //         dataTextField: "title",
            //         dataValueField: "id",
            //     });

            //     $("#assets-filter").data("kendoDropDownList").dataSource.read({
            //             account_type: 1
            //     });

            //     $("#assets-filter").data("kendoDropDownList").dataSource.value(
            //         {
            //         return {
            //             assetId;
            //         }
            //     });

            //     var filters = [];
            //     var accountFilter = $("#account-type").val();
            //     if (accountFilter) {
            //         filters.push({
            //             field: "account_type_id",
            //             operator: "contains",
            //             value: accountFilter,
            //         });
            //     }

            //     var assetsFilter = $("#assets-filter").val();
            //     if (assetsFilter) {
            //         filters.push({
            //             field: "asset_id",
            //             operator: "contains",
            //             value: assetsFilter,
            //         });
            //     }

            //     if (accountFilter && assetsFilter) {
            //         dataSource.filter({
            //             logic: "and",
            //             filters: filters,
            //         });
            //     }

            // }

        });
    </script>
@endsection
