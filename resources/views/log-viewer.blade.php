{{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<div class="card p-2 bg-light h-100">
    <div class="card-title">Log Viewer</div>
    <div class="form-group mb-2">
        <form action="" method="post">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-between">
                <div>
                    <btn class="btn btn-outline-secondary mr-2" onClick="window.location.reload();"><i
                            class="fa-solid fa-arrows-rotate"></i></btn>
                    <span><span class="font-weight-bold">{{ $selectedFile }}</span>: {{ date('d-m-y H:i:s') }}</span>
                </div>
                <div>
                    <select
                        name="file"
                        class="form-control"
                        onchange="this.form.submit()">
                        @foreach($files as $file)
                            <option value="{{ basename($file) }}" @if($selectedFile == basename($file)) selected @endif>{{ basename($file) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <textarea
                class="form-control mt-2"
                style="height: 90vh"
                id="logsOutput">{{ File::get(storage_path('logs/'.$selectedFile)) }}
            </textarea>
        </form>
    </div>
</div>
