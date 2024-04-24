@extends('layouts.app')
@section('content')
    <style>
        header,
        footer,
        .webchat {
            display: none !important;
        }

        .flipbook-menu-right {
            display: none !important;
        }
    </style>
    <section>
        <div id="guide"></div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#guide").flipBook({
                pdfUrl: '{{ $guide['pdf'] }}',
                lightBox: true,
                layout: 2,
                currentPage: {
                    vAlign: "bottom",
                    hAlign: "left"
                },
                btnColor: '#30af85',
                font: '{{ $guide['font'] }}',
            });

            simulateClick("#guide");

            function simulateClick(selector) {
                var element = document.querySelector(selector);

                if (element) {
                    var event = new MouseEvent('click', {
                        bubbles: true,
                        cancelable: true,
                        view: window
                    });

                    element.dispatchEvent(event);
                } else {
                    console.error("Element not found: " + selector);
                }
            }

        });
    </script>
@endsection
