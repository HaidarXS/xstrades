<div class="row">
    <div class="col-12">
        @if (count($records) > 0)
            <table class="table table-bordered table-striped records-will-load ">
                <thead class="">
                    <tr class="bg-primary text-white text-center" style="vertical-align: middle">
                        @php
                            $keys = collect($records[0])->keys();
                            if ($section == 'all') {
                                $tmpArr = [];
                                foreach ($records as $record) {
                                    $recordKeys = collect($record)->keys()->toArray();
                                    foreach ($recordKeys as  $key) {
                                        if(!in_array($key, $tmpArr)){
                                            array_push($tmpArr, $key);
                                        }
                                    }
                                }
                            }
                        @endphp
                        @foreach ($keys as $key)
                            <th class="py-3" scope="col">{{ $key }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr class="text-center" style="vertical-align: middle">
                            @foreach ($keys as $key)
                                @if ($loop->index == 0)
                                    <th scope="row" class="py-3">{{ $record['Symbol'] }}</th>
                                @else
                                    <td class="py-3">{{ $record[$key] ?? '' }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">No Records Found</p>
        @endif

    </div>
</div>
