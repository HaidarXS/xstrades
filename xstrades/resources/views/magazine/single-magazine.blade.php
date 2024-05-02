@extends('layouts.app')
@section('content')
<style>
    header, footer, .webchat {
        display: none !important;
    }
</style>
    <section>
        <div id="magazine"></div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
                $("#magazine").flipBook({
                    pdfUrl: '{{ $magazine['pdf'] }}',
                    lightBox: true,
                    layout: 2,
                    currentPage: {
                        vAlign: "bottom",
                        hAlign: "left"
                    },
                    btnColor: '#30af85',
                });

                simulateClick("#magazine");

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
