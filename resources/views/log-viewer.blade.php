<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<div class="card p-2 bg-light h-100">
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

