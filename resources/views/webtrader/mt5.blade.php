<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<iframe src="{{$server}}" style="border: 0; width: 100%; height: 100%">Your browser doesn't support iFrames.</iframe>

@if(isset($serverName))
<script>
    $(document).ready(function () {
        var currentURL = window.location.href;
        var newUrl = currentURL + '?server={{$serverName}}/';
        history.pushState(null, null, newUrl);
    });
</script>
@endif