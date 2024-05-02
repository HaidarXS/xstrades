@extends('layouts.app')

@section('content')
    <style>
        .card-body {
            padding: 1.5rem 1.5rem;
            border: 0px solid white !important;
            border-radius: 10px !important;
        }

        .card {
            border-radius: 10px !important;
            border: 0px solid white !important;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #serverSection {
            display: none;
        }

        .form-check-input{
            margin-top: 7px !important
        }
    </style>

    <section class="py-5">

        <div class="container">
            <div class="row py-3">
                <div class="col-md-12">
                    <h2 class="text-center text-secondary">Sign in to MetaTrader WebTerminal</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="platform-form" action="{{ route('webtrader.mt4') }}" method="post">
                                @csrf
                                <div class="mb-3 text-center pt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="platform" id="metatrader4"
                                            value="metatrader4" @if ($platform == 'mt4') checked @endif>
                                        <label class="form-check-label" for="metatrader4">
                                            <p class="lead">Metatrader 4</p>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="platform" id="metatrader5"
                                            value="metatrader5" @if ($platform == 'mt5') checked @endif>
                                        <label class="form-check-label" for="metatrader5">
                                           <p class="lead">Metatrader 5</p>
                                        </label>
                                    </div>
                                </div>


                                <div class="mb-3 text-center" id="serverSection">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-12">
                                            <label class="form-check-label" for="metatrader4">
                                                <p>Select a Server</p>
                                            </label>
                                            <select class="form-select" name="server" id="serverSelect">
                                                <option value="https://mt5webtrader.XSTrades.com/terminal" selected>Live 1</option>
                                                <option value="https://mt5webtrader2.XSTrades.com/terminal">Live 2</option>
                                                <option value="https://mt5webtrader3.XSTrades.com/terminal">Live 3</option>
                                                <option value="https://mt5webtrader4.XSTrades.com/terminal">Live 4</option>
                                                <option value="https://mt5webtraderdemo.XSTrades.com/terminal">Demo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center py-3">
                                    <button type="submit" id="submitButton" class="btn btn-primary join-btn mx-auto">Continue to MT4</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            var base = window.location.origin;
            var lang = window.location.pathname.split('/')[1];
            var newUrl = base + '/' + lang + '/webtrader';


            if ($('#metatrader4').is(':checked')) {
                $('#serverSection').hide();
                $('#platform-form').attr('action', "{{ route('webtrader.mt4') }}");
                $('#submitButton').text('Continue to MT4');

                history.pushState(null, null, newUrl + '-mt4/');
            }else{
                $('#serverSection').show();
                $('#platform-form').attr('action', "{{ route('webtrader.mt5') }}");
                $('#submitButton').text('Continue to MT5');

                history.pushState(null, null, newUrl + '-mt5/');
            }

            $('#metatrader5').change(function () {
                $('#serverSection').show();
                $('#platform-form').attr('action', "{{ route('webtrader.mt5') }}");
                $('#submitButton').text('Continue to MT5');

                history.pushState(null, null, newUrl + '-mt5/');
            });

            $('#metatrader4').change(function () {
                $('#serverSection').hide();
                $('#platform-form').attr('action', "{{ route('webtrader.mt4') }}");
                $('#submitButton').text('Continue to MT4');

                history.pushState(null, null, newUrl + '-mt4/');
            });
        });
    </script>
@endsection
